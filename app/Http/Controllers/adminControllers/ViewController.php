<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function homeaction()
    {
        return view ("/homepage");
    }
    public function aboutaction()
    {
        return view ("/aboutus");
    }
    public function ourworksaction()
    {
        return view ("/ourworks");
    }
    public function portofolioaction()
    {
        return view ("/portofolio");
    }
    public function contactaction()
    {
        return view ("/contactus");
    }
    public function recentnewsaction()
    {
        return view ("/recentnews");
    }
}
