<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserTest extends Controller
{
    public function index()
    {
        $user=new User();
        $name= $user ->name;
        // dd($name);
        // return view('welcome',['name'=>$name]);
        return view('welcome')-> with('name',$name);
    }
}
