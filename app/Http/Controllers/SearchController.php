<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\tracker;
use App\Models\jasa;


class SearchController extends Controller

        {

                public function index(Request $request)

                            {

                            $tracker=tracker::latest();


                            if ($request('search')) {
                                    $searchData = $request('search');

                                    $tracker->where('code', '=', $searchData);
                                }

                            else{

                                }
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
