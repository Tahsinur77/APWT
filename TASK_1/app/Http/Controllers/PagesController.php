<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $compName ="XYZ";
        return view('pages.home')
        ->with('compName',$compName);
    }
    public function contact(){
        return view('pages.contact us');
    }
    public function aboutUs(){
        $about = 'This is a Teaching Institute. We introduct you with Techonology.';
        return view('pages.about us')
        ->with('about',$about);
    }
    public function service(){
        $services = array('Problem solving','Full stack web','Programming Language','Algorithm', 'Data Structure', 'App Development');
        return view('pages.service')
        ->with('services',$services);
    }
    public function ourTeam(){
        return view('pages.our team');
    }
}
