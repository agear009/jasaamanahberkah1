<?php

namespace App\Http\Controllers;
use App\Models\country;
use App\Models\category;
use App\Models\categoryproduct;
use App\Models\product;
use App\Models\image;
use App\Models\About;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){


        $Abouts = About::all();

        return view('index.index',["title"=>"home","active"=>"index"],compact('Abouts'));
    }
    public function show(string $id)
    {

        return view('index.detail',["title"=>"Detail","active"=>"Detail"],compact('product'));


    }
}
