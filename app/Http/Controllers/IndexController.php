<?php

namespace App\Http\Controllers;
use App\Models\country;
use App\Models\category;
use App\Models\categoryproduct;
use App\Models\product;
use App\Models\image;
use App\Models\About;
use App\Models\Post;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $modelPost = new Post;
        $Posts=$modelPost->getListPost();
        $Countries=country::all();
        $Categoryproducts = categoryproduct::all();
        $Categorys = category::all();
        $Products = product::all();
        $Abouts = About::all();
        //$Posts = Post::all();
        return view('index.index',["title"=>"home","active"=>"index",'Countries'=>$Countries],compact('Categoryproducts','Products','Abouts','Categorys','Posts'));
    }
    public function show(string $id)
    {
       //$product=product::findOrFail($id);
       // $product=product::findOrFail($id)->get();
       //tambah ->get(); untuk error bool $Products=product::findOrFail($id)

        //dd($id);
        $modelproductById = new product;
        $product=$modelproductById->getListproductsById($id)->get(0);


       // var_dump($product);
        //exit;
        return view('index.detail',["title"=>"Detail","active"=>"Detail"],compact('product'));


    }
}
