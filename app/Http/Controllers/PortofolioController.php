<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function skill() {
        return view('skill');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function school() {
        return view('school');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sertifikat() {
        return view('sertifikat');
    }
}