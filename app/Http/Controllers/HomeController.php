<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\IndexSlider;
use App\Gallery;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $indexFile = IndexSlider::all();
        return view('index', compact('indexFile'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    //  CMS INDEX PAGE 
    public function indexPage()
    {
        return view('cms.index');
    }

    // CMS PRODUCT PAGE
    public function productPage()
    {
        return view('cms.product');
    }

    //  CMS NEWS PAGE
    public function newsPage()
    {
        $news = News::orderByDesc('created_at')->paginate(4);
        return view('cms.news-index', compact('news'));
    }

    public function galleryPage()
    {
        $galleryFile = Gallery::get()->groupBy('linked_folder');
        // dd($galleryFile);
        return view('cms.news-gallery', compact('galleryFile'));
    }

    public function videoPage()
    {
        $videos = Video::paginate(10);
        return view('cms.news-video', compact('videos'));
    }
}
