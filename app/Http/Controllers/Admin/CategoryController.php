<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
class CategoryController extends Controller
{
    public function index(){

    $data=[];
    $data['name']='alaa';
    $data['age']='12';
    $user=User::all();
   


    	return view('admin.category',compact('user'));
    }
}
