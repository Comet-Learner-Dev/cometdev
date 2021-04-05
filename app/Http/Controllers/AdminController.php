<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * show admin login form
     */

    public function showAdminLoginForm(){
        return view('admin.login');      //location : admin ->login.blade.php
    }

    public function showAdminRegisterForm(){
        return view('admin.register');   //location : admin->register.blade.php
    }

    public function showAdminDashboard(){
        return view('admin.dashboard');  //location : admin->register.blade.php
    }
}
