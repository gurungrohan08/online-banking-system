<?php

use App\Http\Controllers\MyDb;
use Illuminate\Support\Facades\Route;

Route::get('/',[MyDb::class,'index']);
Route::get('/createaccount',[MyDb::class,'createAccount']);
Route::get('/login',[MyDb::class,'login']);
Route::get('/logout',[MyDb::class,'logOut']); 
   
Route::middleware(['group-name'])->group(function () {
    Route::get('/deposit',[MyDb::class,'deposit']);
    Route::get('/withdrawl',[MyDb::class,'withdrawl']);
    Route::get('/pinchange',[MyDb::class,'pinchange']);
    Route::get('/fundtransfer',[MyDb::class,'fundTransfer']);
    Route::get('/balanceenquiry',[MyDb::class,'balanceEnquiry']);
    Route::get('/accountsummary',[MyDb::class,'accountSummary']);
});
