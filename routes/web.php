<?php

namespace App\Http\Controllers;

namespace App;

//use Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\import\ImportController;
use App\Http\Controllers\Export\ExportController;
use App\Http\Controllers\Role\UserAccessRightsController;
use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



//Export Controller
Route::get('dashboard', [ExportController::class, 'index']);
Route::get('export/export-master', [ExportController::class, 'exportMaster'])->name('export.companymaster');
Route::get('masters/add-company-master', [ExportController::class, 'companyAdd']);
Route::get('masters/edit-company-master/{id}', [ExportController::class, 'companyEdit']);
Route::post('masters/save-company-master', [ExportController::class, 'companySave']);
Route::get('export/pdf', [ExportController::class, 'exportPdf']);

//importer master
Route::get('export/importer-master', [ExportController::class,'importermaster'])->name('importer-master');
Route::get('export/add-importer-master', [ExportController::class,'addImporterMaster'])->name('add-importer-master');
Route::post('export/save-importer-master', [ExportController::class,'saveImporterMaster'])->name('save-importer-master');
Route::get('export/edit-importer-master/{id}', [ExportController::class,'editImporterMaster'])->name('edit-importer-master');
Route::post('export/update-importer-master', [ExportController::class,'updateImporterMaster'])->name('update-importer-master');

// Goods Master
Route::get('export/good-master', [ExportController::class, 'goodsMaster'])->name('export.goodsmaster');
Route::get('export/add-goods-master', [ExportController::class, 'goodsAdd']);
Route::get('export/edit-goods-master/{id}', [ExportController::class, 'goodsEdit']);
Route::post('export/save-goods-master', [ExportController::class, 'goodsSave']);
Route::get('export/get-add-row-product/{row}', [ExportController::class, 'ajaxgoodsProduct']);
Route::post('export/update-goods-master', [ExportController::class, 'updateGoodsMaster']);


//invoice route
Route::get('export/invoice', [ExportController::class,'invoic'])->name('invoice');
Route::get('export/add-invoice', [ExportController::class,'addinvoice'])->name('add-invoice');
Route::post('export/save-invoice', [ExportController::class,'saveinvoice'])->name('save-invoice');

// create pdf export/add-exporter-pass
Route::get('export/create-pdf', [ExportController::class, 'createPdf'])->name('export.createpdf');
Route::get('export/add-exporter-pass', [ExportController::class, 'addExporterPass'])->name('export.addexporterpass');
Route::post('export/add-exporter-pass', [ExportController::class, 'saveExportPass']);
Route::get('export/export-pass-generate-pdf/{id}', [ExportController::class, 'generateExportPassPdf']);
Route::get('export/export-pass-download-pdf/{id}', [ExportController::class, 'downloadExportPassPdf'])->name('download.pdf');
Route::get('export/edit-pass-generate/{id}', [ExportController::class, 'editExportPassPdf']);
Route::get('/export/update-exporter-pass/{id}', [ExportController::class, 'updateExportPass'])->name('export.update.exporter.pass');
Route::get('/get-goods-description/{id}', [ExportController::class, 'getGoodsDescription']);


// Authentication Routes
Route::get('/', [HomeController::class, 'getlogin']);
Route::post('/login', [HomeController::class, 'DoLogin']);
// Route::get('dashboard', [HomeController::class, 'Dashboard']);
Route::get('change-password', [HomeController::class, 'changepassword']);
Route::post('save-change-password', [HomeController::class, 'savechangepassword']);
Route::get('logout', [HomeController::class, 'Logout']);
Route::get('masters/dashboard', [HomeController::class, 'mastersdashboard']);
Route::get('hcm-dashboard', [HomeController::class, 'hcmdashboard']);
Route::get('finance-dashboard', [HomeController::class, 'FinanceDashboard']);
//******* Routes with Login  end *********//

// Role Routes
Route::get('role/dashboard', [UserAccessRightsController::class, 'viewdashboard']);
Route::get('role/vw-users', [UserAccessRightsController::class, 'viewUserConfig']);
Route::get('role/add-user-config', [UserAccessRightsController::class, 'viewUserConfigForm']);
Route::post('role/save-user-config', [UserAccessRightsController::class, 'SaveUserConfigForm']);
Route::get('role/edit-user-config/{user_id}', [UserAccessRightsController::class, 'GetUserConfigForm']);
Route::post('role/update-user-config', [UserAccessRightsController::class, 'UpdateUserConfigForm']);

Route::get('role/view-users-role', [UserAccessRightsController::class, 'viewUserAccessRights']);
Route::get('role/add-user-role', [UserAccessRightsController::class, 'viewUserAccessRightsForm']);
Route::post('role/save-user-role', [UserAccessRightsController::class, 'saveUserAccessRightsForm']);
Route::get('role/delete-users-role/{role_authorization_id}', [UserAccessRightsController::class, 'deleteUserAccess']);

Route::get('role/get-sub-modules/{id_module}', [UserAccessRightsController::class, 'subModuleID']);
Route::get('role/get-role-menu/{id_sub_module}', [UserAccessRightsController::class, 'subMenuID']);


