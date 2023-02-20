<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;

class TestingController extends Controller
{
    //
    public function HomeSliderr(){

        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.testing',compact('homeslide'));

     } // End Method 
} 
