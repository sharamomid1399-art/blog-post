<?php

use Illuminate\Support\Facades\Route;

// get -> for show a page

Route::get('/', function () {
    return view('Home');
});

Route::get('about' , function(){
    return view('About');
});

Route::get('contact' , function(){
    return view('Contact');
});







// post -> for saving data
Route::post('/save' , function(){

});

// put -> for Updating data
Route::put('/updating' , function(){

});

// delete -> for deleting data
Route::delete('/delete', function(){

});
