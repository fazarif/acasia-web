<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\IndexSlider;
use App\Gallery;
use App\Country;
use App\Opportunity;

class PageController extends Controller
{
    public function index()
    {
        $indexFile = IndexSlider::all()->sortBy('position');
        return view('index', compact('indexFile'));
    }
    
    public function webinar()
    {
        $country = Country::get();
    	return view('webinar_register', compact('country'));
    }
    
    public function careerListing()
    {
        $careerList = Opportunity::get();
        return view('opportunity', compact('careerList'));
    }

    public function jobDetail($id)
    {

        $indexFile = Opportunity::where('id',$id)->first();
        return view('career_details', compact('indexFile'));
    }
}
