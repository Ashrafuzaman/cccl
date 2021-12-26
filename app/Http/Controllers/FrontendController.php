<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //index Part
    public function index(){
        return view('frontend_part.index');
    }

    // Category Part
    public function frontend_category(){
        return view('frontend_part.category');
    }

    // Product Pages
    public function frontend_product(){
        return view('frontend_part.product');
    }

    // Service Part
    public function frontend_service(){
        return view('frontend_part.service');
    }

    // Contact Us
    public function frontend_contact_us(){
        return view('frontend_part.contact_us');
    }

    // Corporate Speech
    public function frontend_corporate_speech(){
        return view('frontend_part.corporate_speech');
    }

    // Gallery
    public function frontend_gallery(){
        return view('frontend_part.gallery');
    }
}
