<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
}

    
    public function Index(){

    	return 'welcome';
    }


        public function  Show(){

    	return 'wstring2';
    }


   public function  Show2(){

    	return 'wstrin3';
    }

}
