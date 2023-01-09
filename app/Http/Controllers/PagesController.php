<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home(){
        $data['agencies'] = Agency::all();
        return view('pages.home')->with($data);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data['agencies'] = Agency::all();
        return view('pages.services')->with($data);
    }
    

    public function agency($slug){
        $data['agency'] = Agency::with('phases')->where('slug', $slug)->firstOrFail();
        
        return view('pages.service-detail')->with($data);
    }

    public function contact(){
        return view('pages.contact');
    }
}
