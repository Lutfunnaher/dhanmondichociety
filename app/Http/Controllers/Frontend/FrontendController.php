<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function mission()
    {
        return view('website.mission');
    }

    public function gallery()
    {
        return view('website.gallery');
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function complain()
    {
        return view('website.complain');
    }
    public function executiveMember()
    {
        return view('website.executiveMember');
    }
}
