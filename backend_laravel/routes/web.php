<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halo Dunia! Laravel saya berjalan dari dalam Docker!';
});
