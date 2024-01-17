<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use SoftDeletes;

    protected $table    = 'companys';

    protected $fillable = [
        'company_name',
        'address',
        'country',
        'state',
        'city',
        'pin',
        'gst',
        'ie_code',
        'cin',
        'image',
    ];
    protected $hidden = [
    	'updated_at',
    	'deleted_at'
    ];

    public function getListing($srch_params = [], $offset = 0)
    {
        $listing = self::select(
                $this->table . ".*"
            )
            ->when(isset($srch_params['with']), function ($q) use ($srch_params) {
				return $q->with($srch_params['with']);
			})
            ->when(isset($srch_params['company_name']), function($q) use($srch_params){
                return $q->where($this->table . ".company_name", "LIKE", "%{$srch_params['company_name']}%");
            })
            ->when(isset($srch_params['status']), function($q) use($srch_params){
                return $q->where($this->table . '.status', '=', $srch_params['status']);
            });

        if(isset($srch_params['id'])){
            return $listing->where($this->table . '.id', '=', $srch_params['id'])
                            ->first();
        }

        if(isset($srch_params['orderBy'])){
            $this->orderBy = \App\Helpers\Helper::manageOrderBy($srch_params['orderBy']);
            foreach ($this->orderBy as $key => $value) {
                $listing->orderBy($key, $value);
            }
        } else {
            $listing->orderBy($this->table . '.company_name', 'ASC');
        }

        if (isset($srch_params['get_sql']) && $srch_params['get_sql']) {
            return \App\Helpers\Helper::getSql([
                $listing->toSql(),
                $listing->getBindings(),
            ]);
        }

        if($offset){
            $listing = $listing->paginate($offset);
        } else {
            $listing = $listing->get();
        }

        return $listing;
    }


        public function store($input = [], $id = 0, $request = null)
        {
            $data = null;

            if ($id) {
                $data = $this->getListing(['id' => $id]);

                if (!$data) {
                    return \App\Helpers\Helper::resp('Not a valid data', 400);
                }

                // Check if a new image file is provided in the request
                if ($request->hasFile('image')) {
                    $files = $request->file('image');
                    $extension = $request->emp_image->extension();
                    $filename = $request->emp_image->store('emp_pic', 'public');
                    $input['image']=$filename;
                    dd($input['image']);
                } else {

                    $filename = "";
                    $input['image']=$filename;
                    dd($input['image']);
                }

                $data->update($input);
            } else {
                // Check if an image file is provided in the request
                if ($request->hasFile('image')) {

                    $imagePath = $request->file('image')->store('company_logo', 'public');
                    //dd($imagePath);
                    $input['image'] = basename($imagePath);
                }

                $data = $this->create($input);
            }

            return \App\Helpers\Helper::resp('Changes have been successfully saved.', 200, $data);
        }

}
