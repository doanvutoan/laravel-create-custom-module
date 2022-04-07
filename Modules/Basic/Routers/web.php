<?php
Route::prefix('basic')->group(function() {
    Route::get('/', "BasicController@index");
});
