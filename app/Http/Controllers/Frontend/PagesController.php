<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()  
    {
        return view('frontend.index');
    }

    public function about()  
    {
        return view('frontend.about');    
    }

    public function mission()  
    {
        return view('frontend.mission');    
    }

    public function team()  
    {
        return view('frontend.team');   
    }

    public function billboards()  
    {
        return view('frontend.billboards');
    }

    public function suburban()  
    {
        return view('frontend.surbuban');
    }
    public function bridge()  
    {
        return view('frontend.bridge');
    }
    public function clients()  
    {
        return view('frontend.clients');
    }
    public function portfolio()  
    {
        return view('frontend.portfolio');
    }
    public function contact()  
    {
        return view('frontend.contact');
    }
}

