<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



ROUTE::GET('/', function(){
    $target= "black";
    $search= User::search($target)->get();
    return $search;
});
