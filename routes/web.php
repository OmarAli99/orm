<?php


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {

    
    // $result = User::find(1)->delete();


   // $users=User::onlyTrashed()->find(1)->restore();
   $users=User::onlyTrashed()->find(1)->forceDelete();

  //dd( $users);


    //return view('welcome', compact('users')); 
});
 