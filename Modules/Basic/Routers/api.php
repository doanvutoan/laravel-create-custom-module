<?php
Route::prefix('basic')->group(function() {
    Route::get('/users', "BasicController@index");
});
