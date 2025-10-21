<?php

use Illuminate\Support\Facades\Route;

// get -> for show a page

Route::get('/', function () {
    return view('Home');
 
    // return 'shahram goooool';

});
