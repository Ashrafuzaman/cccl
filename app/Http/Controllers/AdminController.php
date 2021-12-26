<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Index Part
    public function index(){
        return view('admin_part.index');
    }
}
