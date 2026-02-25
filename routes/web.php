<?php


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {

    
    $users = User::cursor();
    return view('welcome', compact('users')); 
});
