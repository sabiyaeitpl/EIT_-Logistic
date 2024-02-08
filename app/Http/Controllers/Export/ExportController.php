<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Export\Company;
use App\Models\Export\Goods;
use App\Models\Export\Product;
use App\Models\Export\ExportPass;
use App\Models\Export\Importer;
use App\Models\Export\Bank;
use App\Models\Export\Invoice;
use App\Models\Export\InvoiceItem;
use Session;
use Carbon\Carbon;
use view;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;

class ExportController extends Controller
{
    public function __construct($parameters = array())
    {
        $this->_module      = 'Export Company List';
        $this->_routePrefix = 'export';
        $this->_model       = new Company();
    }

    public function index(Request $request){
        return view('export/dashboard');
    }
    public function exportPdf(Request $request) {
        return view('export/pdf');
    }
    public function exportMaster(Request $request){
        $srch_params                    = $request->all();
        $this->_data['data']            = $this->_model->getListing($srch_params);
        $this->_data['orderBy']         = $this->_model->orderBy;
        return view('export.companymaster', $this->_data);
    }
    public function companyEdit(Request $request,$id){
        $data          = $this->_model->getListing(['id'=>$id]);
        return view('export.edit-company-master', compact('data'));

    }
    public function companyAdd(Request $request){
        return view('export.add-company-master');

    }
    public function companySave(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $extension = $request->image->extension();
            $filename = $request->image->store('company_logo', 'public');
            $data['image'] = $filename;
        } else {

            $filename = "";
            $data['image'] = $filename;
        }
        $id = $request->input('id');
        $company = Company::updateOrCreate(['id' => $id], $data);
        if($company){
        Session::flash('message', 'Record has been successfully saved');
        return redirect()->route('export.companymaster');
        }else{
            Session::flash('error', 'something went wrong');
            return redirect()->route('export.companymaster');
        }
    }
    public function importermaster(Request $request){
        if (!empty(Session::get('admin'))) {
        $data['data'] = Importer::get();
        return view('export.importer-master', $data);
        }else{
            return redirect('/');
        }
    }
    public function addImporterMaster(Request $request){
        if (!empty(Session::get('admin'))) {
            return view('export.add-importer-master');
        }
        else{
            return redirect('/');
        }
    }
    public function saveImporterMaster(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'crno' => 'nullable|string|max:255',
            'pobox' => 'nullable|string|max:255',
            'gst' => 'nullable|string|max:255',
        ]);
        $importerData = [
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'crno' => $request->input('crno'),
            'pobox' => $request->input('pobox'),
            'gst' => $request->input('gst'),
        ];
        Importer::insert($importerData);
        Session::flash('message', 'Record has been successfully saved');
        return redirect()->route('importer-master');
    }
    public function editImporterMaster($id)
    {
        if (!empty(Session::get('admin'))) {
            $importer = Importer::find($id);
            if (!$importer) {
                return redirect()->route('error.page');
            }
            return view('export.edit-importer-master', compact('importer'));
        }else{
            return redirect('/');
        }
    }
    public function updateImporterMaster(Request $request)
    {
        if (!empty(Session::get('admin'))) {
            $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'crno' => 'nullable|string|max:255',
                'pobox' => 'nullable|string|max:255',
                'gst' => 'nullable|string|max:255',
            ]);
            $id = $request->id;
            $importer = Importer::find($id);
            if (!$importer) {
                return redirect()->route('error.404');
            }
            $importer->update([
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'crno' => $request->input('crno'),
                'pobox' => $request->input('pobox'),
                'gst' => $request->input('gst'),
                'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Session::flash('message', 'Record has been successfully saved');
            return redirect()->route('importer-master');
        }else{
            return redirect('/');
        }
    }
    public function bankMaster(Request $request){
        if (!empty(Session::get('admin'))) {
            $data['data'] = Bank::get();
            return view('export.bankmaster', $data);

        }else{
            return redirect('/');
        }
    }
    public function addBankMaster(Request $request){
        if (!empty(Session::get('admin'))) {
            return view('export.add-bank-master');
        }else{
            return redirect('/');
        }

    }
    public function saveBankMaster(Request $request)
    {
        if (!empty(Session::get('admin'))) {
            $validatedData = $request->validate([
                'bank_name' => 'required',
                'account_name' => 'nullable',
                'account_number' => 'nullable',
                'swift_code' => 'nullable',
                'ifsc_code' => 'nullable',
                'dealer_code' => 'nullable',
                'address' => 'nullable',
            ]);
            Bank::create($validatedData);
            Session::flash('message', 'Record has been successfully saved');
            return redirect()->route('bank-master');
        }else{
            return redirect('/');
        }
    }
    public function editBankMaster(Request $request, $id)
    {
        if (!empty(Session::get('admin'))) {
            $bank = Bank::find($id);
            if (!$bank) {
                return redirect()->route('error.page');
            }
            return view('export.edit-bank-master', compact('bank'));
        }else{
            return redirect('/');
        }
    }
    public function updateBankMaster(Request $request)
    {
        $id = $request->bank_id;
        if (!empty(Session::get('admin'))) {
            $bank = Bank::find($id);
            if (!$bank) {
                return redirect()->route('error.page');
            }

            $validatedData = $request->validate([
                'bank_name' => 'required',
                'account_name' => 'nullable',
                'account_number' => 'nullable',
                'swift_code' => 'nullable',
                'ifsc_code' => 'nullable',
                'dealer_code' => 'nullable',
                'address' => 'nullable',
            ]);
            $bank->update($validatedData);
            Session::flash('message', 'Record has been successfully saved');
            return redirect()->route('bank-master');
        } else {
            return redirect('/');
        }
    }

    public function goodsMaster(Request $request){
        if (!empty(Session::get('admin'))) {
            $data['data'] = Goods::with('products')->get();
            //dd($data);
            return view('export.goodsmaster', $data);

        }else{
            return redirect('/');
        }
    }
    public function goodsEdit(Request $request, $id)
    {
        $data['data'] = Goods::with('products')->find($id);
        if (!$data['data']) {
            abort(404);
        }
        return view('export.edit-goods-master', compact('data'));
    }
    public function goodsAdd(Request $request){
        return view('export.add-goods-master');

    }
    public function goodsSave(Request $request)
    {
        $existingGoods = Goods::where('name', $request->name)->first();
        if ($existingGoods) {
            Session::flash('error', 'Record with the same name already exists');
            session()->put('_old_input', $request->input());
            return redirect()->back();
        }
        $goodsData = array(
            'name' => $request->name,
        );

        $goodsId = Goods::insertGetId($goodsData);

        if (isset($request->product)) {
            $products = array();
            foreach ($request->product as $index => $productName) {
                $hscode = $request->hscode[$index] ?? null;

                if (!empty($productName) && !empty($hscode)) {
                    $products[] = [
                        'goods_id' => $goodsId,
                        'name' => $productName,
                        'hscode' => $hscode,
                    ];
                }
            }

            if (!empty($products)) {
                Product::insert($products);
            }
        }

        Session::flash('message', 'Record has been successfully saved');
        return redirect()->route('export.goodsmaster');
    }

    public function updateGoodsMaster(Request $request)
    {
        try {
            $goods = Goods::find($request->id);
            $goods->update(['name' => $request->name]);

            $products = [];
            foreach ($request->product as $index => $productName) {
                $hscode = $request->hscode[$index] ?? null;

                if (!empty($productName) && !empty($hscode)) {
                    $products[] = [
                        'goods_id' => $goods->id,
                        'name' => $productName,
                        'hscode' => $hscode,
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ];
                }
            }

            // Delete existing products and insert the updated or new products
            Product::where('goods_id', $goods->id)->delete();
            Product::insert($products);

            Session::flash('message', 'Record has been successfully saved');
            return redirect()->route('export.goodsmaster');
        } catch (\Exception $e) {
            Session::flash('error', 'An error occurred while updating the record.');
            return redirect()->back();
        }
    }

    public function productMaster(Request $request)
    {
        if (!empty(Session::get('admin'))) {
            $data['data'] = Goods::with('products')->get();
            //dd($data);
            return view('export.productmaster', $data);

        }else{
            return redirect('/');
        }
    }


    public function createPdf(Request $request){
        $data['data'] = ExportPass::with(['company','importername1','goods'])->get();
       // dd($data);
        return view('export.exporterpass', $data);
    }
    public function addExporterPass(Request $request){
        $data['goods'] = Goods::get();
        $data['exporter'] = Company::get();
        $data['importer'] = Importer::get();
        return view('export.add-exporter-pass', $data);

    }
    public function saveExportPass(Request $request){
        $exportPass = new ExportPass($request->all());
        $exportPass->save();
        Session::flash('message', 'Record has been successfully saved');
        return redirect()->route('export.createpdf');
    }

    public function generateExportPassPdf(Request $request, $id)
    {
        $data['pass'] = ExportPass::where('id', $id)->first();
        if (!$data['pass']) {
            return redirect()->route('export.createpdf');
        }
        $exporterId = $data['pass']->exporter_id;
        $goodsId = $data['pass']->no_of_package;
        $importer1 = $data['pass']->importer_name1;
        $importer2 = $data['pass']->importer_name2;
        $data['goods'] = Goods::with('products')->find($goodsId);
        if (!$data['goods']) {
            return redirect()->route('export.createpdf');
        }
        $data['exporter'] = Company::where('id', $exporterId)->first();
        $data['importer1'] = Importer::where('id', $importer1)->first();
        $data['importer2'] = Importer::where('id', $importer2)->first();
        //dd($data);
        if (!$data['exporter']) {
            return redirect()->route('export.createpdf');
        }
        return view('export.generatepasspdf', $data);
    }



    public function downloadExportPassPdf($id)
    {
        // Fetch data from your database or other source
        $data['pass'] = ExportPass::where('id', $id)->first();
        $exporterId = $data['pass']->exporter_id;
        $goodsId = $data['pass']->no_of_package;
        $data['goods'] = Goods::with('products')->find($goodsId);
        $data['exporter'] = Company::where('id', $exporterId)->first();

        // Load the view with data
        //$view = view('export.generatepasspdf', $data);
        // $dompdf = new Dompdf();
        // $options = new Options();
        // $options->set('debugKeepTemp', true);
        // $dompdf->setOptions($options);
        // Generate PDF
        $pdf = PDF::loadView('export.generatepasspdf',$data);
        //$pdf = PDF::loadHtml($view->render());

        // Download the PDF file
        return $pdf->download('export_pass.pdf');
    }

    public function editExportPassPdf($id){
         $data['pass'] = ExportPass::where('id', $id)->first();
         if (!$data['pass']) {
            return redirect()->route('export.createpdf');
        }
        $data['goods'] = Goods::get();
        $data['exporter'] = Company::get();
        $data['importer'] = Importer::get();
        //dd($data['pass']);
        return view('export.editgeneratepasspdf', $data);

    }
    public function updateExportPass(Request $request, $id)
    {
        $exportPass = ExportPass::find($id);
        $exportPass->update([
            'date' => $request->input('date'),
            'reference_id' => $request->input('reference_id'),
            'exporter_id' => $request->input('exporter_id'),
            'importer_name1' => $request->input('importer_name1'),
            'importer_name2' => $request->input('importer_name2'),
            'importer_address1' => $request->input('importer_address1'),
            'importer_address2' => $request->input('importer_address2'),
            'means_of_transport' => $request->input('means_of_transport'),
            'port_of_loading' => $request->input('port_of_loading'),
            'port_of_discharge' => $request->input('port_of_discharge'),
            'final_destination' => $request->input('final_destination'),
            'marks_of_package' => $request->input('marks_of_package'),
            'type_of_packeg' => $request->input('type_of_packeg'),
            'no_of_package' => $request->input('no_of_package'),
            'total_package' => $request->input('total_package'),
            'origin_criteria' => $request->input('origin_criteria'),
            'gross_weight_quantity' => $request->input('gross_weight_quantity'),
            'net_weight_quantity' => $request->input('net_weight_quantity'),
            'invoice_no' => $request->input('invoice_no'),
            'date' => $request->input('date'),
            'export_to' => $request->input('export_to'),
            'place' => $request->input('place'),
            'place_date' => $request->input('place_date'),
            'designation' => $request->input('designation'),
        ]);
        Session::flash('message', 'Record has been successfully saved');
        return redirect()->route('export.createpdf');
    }
    public function getGoodsDescription($id)
    {
        $products = Product::where('goods_id', $id)->get();
        $descriptions = $products->pluck('name')->toArray();
        return response()->json(['descriptions' => $descriptions]);
    }

    public function ajaxgoodsProduct($row){
        $row = $row + 1;

        $result = ' <tr class="itemslotdoc" id="' . $row . '" >
					    <td>' . $row . '</td>

        <td><input type="text" class="form-control" name="product[]" required></td>
        <td><input type="text" class="form-control" name="hscode[]" required></td>
          <td><button class="btn-success" style="margin-bottom: 5px;" type="button" id="addProduct' . $row . '" onClick="addnewproduct(' . $row . ')" data-id="' . $row . '"> <i class="ti-plus"></i> </button>
         <button class="btn-danger deleteButtondoc" style="background-color:#E70B0E; border-color:#E70B0E;" type="button" id="del' . $row . '"  onClick="delRowProduct(' . $row . ')"> <i class="ti-minus"></i> </button></td>
      </tr>';

        echo $result;
    }
    public function invoic(Request $request){
        if (!empty(Session::get('admin'))) {
            $data['data'] = Invoice::with(['items', 'exporter', 'importer','bank'])->get();
            //dd($data);
            return view('export.invoice', $data);
        } else {
            return redirect('/');
        }

    }
    public function addInvoice(Request $request){
        if (!empty(Session::get('admin'))) {
            $data['goods'] = Goods::get();
            $data['exporter'] = Company::get();
            $data['importer'] = Importer::get();
            $data['product'] = Product::get();
            $data['bank'] = Bank::get();
            return view('export.add-invoice',$data);
        } else {
            return redirect('/');
        }

    }
    public function saveInvoice(Request $request)
    {
       // dd($request->all());
        // Validate the form data

        // Create a new Invoice instance and save the data
        $invoice = new Invoice([
            'exporter_id' => $request->input('exporter_id'),
            'invoice_no' => $request->input('invoice_no'),
            'date_invoice' => $request->input('date_invoice'),
            'dispatch_date' => $request->input('dispatch_date'),
            'po_no' => $request->input('po_no'),
            'order_by_date' => $request->input('order_by_date'),
            'importer_id1' => $request->input('importer_id1'),
            'importer_id2'=> $request->input('importer_id2'),
            'awb_no'=> $request->input('awb_no'),
            'gst_no'=> $request->input('gst_no'),
            'buyer_consigne'=> $request->input('buyer_consigne'),
            'pre_carriage'=> $request->input('pre_carriage'),
            'pre_carrier'=> $request->input('pre_carrier'),
            'country_origin_goods'=> $request->input('country_origin_goods'),
            'country_final_destination'=> $request->input('country_final_destination'),
            'vesel'=> $request->input('vesel'),
            'flight_no'=> $request->input('flight_no'),
            'port_of_loading'=> $request->input('port_of_loading'),
            'port_of_discharge'=> $request->input('port_of_discharge'),
            'final_destination'=> $request->input('final_destination'),
            'bank1'=> $request->input('bank1'),
            'bank2'=> $request->input('bank2'),
            'box_marking'=> $request->input('box_marking'),
        ]);

        $invoice->save();

        // Save the invoice items
        $this->saveInvoiceItems($request, $invoice->id);

        Session::flash('message', 'Record has been successfully saved');
        return redirect()->route('invoice');
    }
    public function invoicePdf(Request $request, $id) {
        if (!empty(Session::get('admin'))) {
            $data['data'] = Invoice::with(['items.product', 'exporter', 'importer','importer2','bank2'])->find($id);
            $data['bank1'] = Invoice::leftJoin('banks', 'invoices.bank1', '=', 'banks.id')
            ->where('invoices.id','=', $id)
            ->select('banks.*')
            ->first();
            $data['bank2'] = Invoice::leftJoin('banks', 'invoices.bank2', '=', 'banks.id')
            ->where('invoices.id','=', $id)
            ->select('banks.*')
            ->first();
            //dd($data['bank1']);
            //$data['data']->load('bank1');
            $data['invoiceitem'] = InvoiceItem::calculateTotals($id);
            //dd($data);
            if ($data['data']) {
                return view('export.invoice-pdf', $data);
            } else {
                Session::flash('error', 'Record not found');
                return redirect()->back();
            }
        } else {
            return redirect('/');
        }
    }
    public function indent(Request $request) {
        if (!empty(Session::get('admin'))) {
            return view('export.indent');
        }else{
            return redirect('/');
        }
    }
    public function addIndent(Request $request) {
        if (!empty(Session::get('admin'))) {
            return view('export.add-indent');
        }else{
            return redirect('/');
        }
    }
    private function saveInvoiceItems(Request $request, $invoiceId)
    {
        foreach ($request->input('counting') as $key => $counting) {
            $item = new InvoiceItem([
                'invoice_id' => $invoiceId,
                'counting' => $counting,
                'dimention' => $request->input('dimention')[$key],
                'no_of_bag_box' => $request->input('no_of_bag_box')[$key],
                'type_bag_box' => $request->input('type_bag_box')[$key],
                'pkgs_size' => $request->input('pkgs_size')[$key],
                'item_no' => $request->input('item_no')[$key],
                'quantity' => $request->input('quantity')[$key],
                'rate' => $request->input('rate')[$key],
                'amount' => $request->input('amount')[$key],
            ]);

            $item->save();
        }
    }
    public function getHsCode(Request $request) {
        $itemId = $request->input('id');
        $product = Product::where('id', $itemId)->first();
        $hsCode = $product->hscode;
        return response()->json(['hscode' => $hsCode]);
    }
    public function ajaxgoodsItem($row){
        $product = Product::get();
        $row = $row + 1;
        $defaultHsCode='';

        $result = '<tr class="itemslotdoc" id="' . $row . '" >
                    <td style="border-left: 0px; border-right: 0px; border-top: 0px;">
                    <p class="p-1"><input type="text" name="counting[]" id="" class="form-control" required></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input type="text" name="dimention[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input type="text" name="no_of_bag_box[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input type="text" name="type_bag_box[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: left;">
                        <p class="p-1"><input type="text" name="pkgs_size[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1">
                            <select data-placeholder="Select Item" name="item_no[]"
                                    class="form-control" id="item" onchange="itemFetch()" required>
                                <option value="" selected> Select </option>';
                                foreach ($product as $products) {
                                    $result .= '<option value="' . $products->id . '">' . $products->name . '</option>';
                                }
                                $result .= '
                            </select>
                        </p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input type="text" name="quantity[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input type="text" name="rate[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p class="p-1"><input type="text" name="amount[]" class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p>
                            <a id="addproduct_' .$row . '" onClick="addnewproduct(' . $row  . ')" data-id="' . $row . '">
                                <span class="material-symbols-outlined text-primary">add_circle</span>
                            </a>
                            <a type="buttom" class="deleteButton" id="del' . $row . '"  onClick="delRowProduct(' . $row . ')"><span class="material-symbols-outlined text-danger">
                                delete
                                </span>
                            </a>
                        </p>
                    </td>
                </tr>';

        echo $result;
    }




}
