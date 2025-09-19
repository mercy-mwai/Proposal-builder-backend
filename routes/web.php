<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/accounting-proposal', function () {
    return view('proposals.templates.businessProposals.accountingProposalTemplate.AccountingProposalTemplate');
});
Route:: get('/business-proposal', function (){
    return view('proposals.templates.businessProposals.businessConsultingTemplate.businessConsultingTemplate');
});

Route::prefix('auth')->group(function(){
Route::get('/google',[AuthController::class, 'redirect'])->name('google-auth');
Route::get('/google/callback', [AuthController::class, 'googleAuthentication']);
});
