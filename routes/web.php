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

// Box Master
Route::get('export/box-master', [ExportController::class,'boxMaster'])->name('box-master');
Route::get('export/add-box-master', [ExportController::class,'addBoxMaster'])->name('add-box-master');
Route::post('export/save-box-master', [ExportController::class,'saveBoxMaster'])->name('save-box-master');
Route::get('export/edit-box-master/{id}', [ExportController::class,'editBoxMaster'])->name('edit-box-master');
Route::post('export/update-box-master', [ExportController::class,'updateBoxMaster'])->name('update-box-master');

// Goods Master
Route::get('export/good-master', [ExportController::class, 'goodsMaster'])->name('export.goodsmaster');
Route::get('export/add-goods-master', [ExportController::class, 'goodsAdd']);
Route::get('export/edit-goods-master/{id}', [ExportController::class, 'goodsEdit']);
Route::post('export/save-goods-master', [ExportController::class, 'goodsSave']);
Route::get('export/get-add-row-product/{row}', [ExportController::class, 'ajaxgoodsProduct']);
Route::post('export/update-goods-master', [ExportController::class, 'updateGoodsMaster']);

//Bank Master
Route::get('export/bank-master', [ExportController::class,'bankMaster'])->name('bank-master');
Route::get('export/add-bank-master', [ExportController::class,'addBankMaster'])->name('add-bank-master');
Route::post('export/save-bank-master', [ExportController::class,'saveBankMaster'])->name('save-bank-master');
Route::get('export/edit-bank-master/{id}', [ExportController::class,'editBankMaster'])->name('edit-bank-master');
Route::post('export/update-bank-master', [ExportController::class,'updateBankMaster'])->name('update-bank-master');

//Buyer indent invoice
Route::get('export/indent', [ExportController::class,'indent'])->name('indent');
Route::get('export/edit-indent/{id}', [ExportController::class,'editIndent'])->name('indent');
Route::get('export/add-indent', [ExportController::class,'addIndent'])->name('add-indent');
Route::get('export/get-add-row-indent/{row}', [ExportController::class, 'ajaxIndent']);
Route::post('export/save-indent', [ExportController::class,'saveIndent'])->name('save-indent');
Route::get('export/buyerbox/{row}', [ExportController::class, 'indenwisebug']);
Route::post('export/update-indent', [ExportController::class, 'updateIndent'])->name('update-indent');
Route::get('export/indent-pdf/{id}',[ExportController::class, 'indentPdf'])->name('indent-pdf');
Route::get('export/get-box-price/{selectedValue}', [ExportController::class, 'getAddRowIndent']);
//Tentetive Packing List --------------------------------
Route::get('export/tentetive-paking-list', [ExportController::class,'tentetiveList'])->name('tentetive-paking-list');
Route::get('export/edit-tentetive/{id}', [ExportController::class,'editTentetive'])->name('edit-tentetive');

// Confirm Packing List ------------------------
Route::get('export/confirm-paking-list', [ExportController::class,'cPakingList'])->name('confirm-paking-list');
Route::get('export/edit-confirm-paking/{id}', [ExportController::class,'editeConfirmPaking'])->name('edit-confirm-paking');

// Invoice Cum Packing List CoO ---------------------
Route::get('export/invoice-cum-paking-list', [ExportController::class,'InvoicePakingList'])->name('invoice-cum-paking-list');
Route::get('export/edit-invoice-cum-packing/{id}', [ExportController::class,'editeInvoiceCumPaking'])->name('edit-invoice-cum-packing');
Route::get('export/edit-invoice-cum-packing-pdf/{id}',[ExportController::class, 'invoicePackingCooPdf'])->name('edit-invoice-cum-packing-pdf');
Route::post('export/update-invoice-packing-coo', [ExportController::class, 'updateInvoicePacCoO'])->name('update-invoice-packing-coo');

// Invoice Dispatch List --------------------------
Route::get('export/invoice-dispatch-list', [ExportController::class,'invoiceDispatchList'])->name('invoice-dispatch-list');
Route::get('export/edit-invoice-dispatch/{id}', [ExportController::class,'editeDispatch'])->name('edit-invoice-dispatch');
// Commercial Packing List -----------------------------
Route::get('export/commercial-packing-list', [ExportController::class,'commercialPakingList'])->name('commercial-packing-list');
Route::get('export/edit-commercial-packing/{id}', [ExportController::class,'editCommercialPacking'])->name('edit-commercial-packing');

//invoice route
Route::get('export/invoice', [ExportController::class,'invoic'])->name('invoice');
Route::get('export/add-invoice', [ExportController::class,'addInvoice'])->name('add-invoice');
Route::post('export/save-invoice', [ExportController::class,'saveInvoice'])->name('save-invoice');
Route::get('export/get-hs-code', [ExportController::class,'getHsCode'])->name('get-hs-code');
Route::get('export/get-add-row-item/{row}', [ExportController::class, 'ajaxgoodsItem']);
Route::get('export/invoice-pdf/{id}', [ExportController::class, 'invoicePdf'])->name('invoice-pdf');

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

// Add Buyer Indent

