<?php

use App\Http\Controllers\UserTest;
use Illuminate\Support\Facades\Route;


// Route::get('/',UserTest::class,'index');
Route::get('/', function () {
//   $name= "Mona_Salih";
//   return view('welcome')-> with('name',$name);
//   $fruits=['banana','apple','orange'];
//      return view('welcome',compact('fruits'));
    // $products=[
    //     ['name'=>'laptop', 'price'=>1000],
    //     ['name'=>'iphone', 'price'=>500],
    //     ['name'=>'screen', 'price'=>2000],
        
    // ];
    // return view('welcome',compact('products'));
    return view('main_page');

});
