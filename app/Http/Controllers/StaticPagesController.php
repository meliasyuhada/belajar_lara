<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function index(){
        $title = 'Selamat datang di website Diary Me!';
        return view ('static.index')->with('title',$title);
    }

    public function about(){
        $data = [
            'title' => 'Tentang kami',
            'services' => ['jual', 'beli', 'perbaikan']
        ];

        return view('static.about')->with($data);

    }

}