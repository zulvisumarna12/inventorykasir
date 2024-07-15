<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controllers
{
    public function index()
    {
        $data = array(
            'title' => 'Home page'
        );

        return view('index',$data);
        return view('Home',$data);
    }
}
