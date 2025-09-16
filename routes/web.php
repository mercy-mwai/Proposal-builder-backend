<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/accounting-proposal', function () {
    return view('proposals.templates.accountingProposalTemplate.AccountingProposalTemplate', [
        '$client_name' => 'Jane Pendo',
        '$user_assigned'=> 'Nillah Carter',
        '$company_name'=> 'Starlex',
        '$user_phone' => '7687897290124',
        '$user_email' => 'nillah@gmail.com',
        '$company_address' => 'P.O. Box 12345-00100',
        '$company_city'=> 'Nairobi',
        '$company_street'=> 'Upperhill Longonot Road',
        '$company_zip_code'=> '00010',
        '$company_url' => 'www.starlextechstore.co.ke',

    ]);
});


Route::prefix('auth')->group(function(){
Route::get('/google',[AuthController::class, 'redirect'])->name('google-auth');
Route::get('/google/callback', [AuthController::class, 'googleAuthentication']);
});
