<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });



//NOTE This Query should place under the Route Get to avoid the Route Not Found !
Route::get('/{any}', function(){
    return view('main');
})->where('any','.*')->name('main');