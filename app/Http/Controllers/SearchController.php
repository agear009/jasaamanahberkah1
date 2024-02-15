<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tracker;
use App\Models\jasa;


class SearchController extends Controller

        {

                public function index()

                            {



                            if (request('search')) {

                                $tracker=tracker::where('code','=',request('search'))->get();



                               var_dump($tracker);
                               exit;
                                return view('index.detail',["title"=>"Search","active"=>"index"],compact('tracker'));
                                }

                            else{
                                $tracker=tracker::latest();
                                return view('index.detail',["title"=>"Search","active"=>"index"],compact('tracker'));

                                }

                                    $tracker=tracker::latest();
                                    //dd($tracker);
                                    return view('index.detail',["title"=>"Search","active"=>"index"],compact('tracker'));

                            }



                public function search(Request $request)

                            {

                                if($request->ajax())

                                {

                                $output="";

                                $products=DB::table('products')->where('title','LIKE','%'.$request->search."%")->get();

                                if($products)

                                {

                                foreach ($products as $key => $product) {

                                $output.='<tr>'.

                                '<td>'.$product->id.'</td>'.

                                '<td>'.$product->title.'</td>'.

                                '<td>'.$product->description.'</td>'.

                                '<td>'.$product->price.'</td>'.

                                '</tr>';

                            }



                            return Response($output);



                            }



                            }



                }

}
