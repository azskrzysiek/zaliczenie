<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Witam w ReczVod!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'O nas';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Nasze usługi',
            'services' => ['Oglądanie meczy', 'Statystyki z meczy', 'Dodawanie meczy']
        );
        return view('pages.services')->with($data);
    }
}
