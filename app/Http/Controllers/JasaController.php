<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\jasa;



// return type redirect respone
use Illuminate\Http\RedirectResponse;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class JasaController extends Controller
{
    //
    public function index(): View
    {
        $jasas=jasa::all();
       //$modeljasa = new jasa;
       //$jasas=$modeljasa->getListjasa();
        //get jasa
       // $jasas = jasa::latest()->paginate(5);
        //render view jasa
        return view('jasas.index',["title"=>"Jasa",'active'=>'Jasa'],compact('jasas'));
    }
    // untuk menampilkan form tambah data
    public function create(): view {
        $countries=jasa::all();

        return view('jasas.Create',["title"=>"Create",'active'=>'Jasa','countries'=>$countries]);

    }
    //pungsi menambahkan data
    public function store(Request $request): RedirectResponse
    {

        $this->validate($request,[


            'name' =>'required|max:255',
            'condition' =>'required|min:2|max:255',
            'price' =>'required|min:2',
            'benefit' =>'required|max:255',
            'process1' =>'required|max:255',
            'process2' =>'required|max:255',
            'process3' =>'required|max:255',
            'process4' =>'required|max:255',
            'process5' =>'required|max:255',
            'process6' =>'required|max:255',
            'process7' =>'required|max:255',
            'process8' =>'required|max:255',
            'process9' =>'required|max:255',
            'process10' =>'required|max:255'


        ]);

        jasa::create([

            'name'=>$request->name,
            'condition'=>$request->condition,
            'price'=>$request->price,
            'benefit'=>$request->benefit,
            'process1'=>$request->process1,
            'process2'=>$request->process2,
            'process3'=>$request->process3,
            'process4'=>$request->process4,
            'process5'=>$request->process5,
            'process6'=>$request->process6,
            'process7'=>$request->process7,
            'process8'=>$request->process8,
            'process9'=>$request->process9,
            'process10'=>$request->process10

        ]);

        //redirect to index
        return Redirect()->route('jasas.index',["title"=>"jasa",'active'=>'Jasa'])->with(['success'=>'data success ditambahkan!']);
    }

    //function show
    public function show(string $id):view
    {

        //get pos id
        $jasa=jasa::findorFail($id);

        //render view with jasa
        return view('jasas.show',["title"=>"Show",'active'=>'jasa'],compact('jasa'));
    }

    public function edit(string $id):View
    {
        //get jasa by id
        $jasa=jasa::findOrFail($id);
        return view('jasas.edit',["title"=>"Edit",'active'=>'Jasa'], compact('jasa'));

    }

    public function update(Request $request, $id): RedirectResponse

    {

        $this->validate($request,[

            'name' =>'required|max:255',
            'condition' =>'required|min:2|max:255',
            'price' =>'required|min:2',
            'benefit' =>'required|max:255',
            'process1' =>'required|max:255',
            'process2' =>'required|max:255',
            'process3' =>'required|max:255',
            'process4' =>'required|max:255',
            'process5' =>'required|max:255',
            'process6' =>'required|max:255',
            'process7' =>'required|max:255',
            'process8' =>'required|max:255',
            'process9' =>'required|max:255',
            'process10' =>'required|max:255'
        ]);
        //get jasa by id
        $jasa=jasa::FindOrFail($id);

            $jasa->update([
                'name'=>$request->name,
                'condition'=>$request->condition,
                'price'=>$request->price,
                'benefit'=>$request->benefit,
                'process1'=>$request->process1,
                'process2'=>$request->process2,
                'process3'=>$request->process3,
                'process4'=>$request->process4,
                'process5'=>$request->process5,
                'process6'=>$request->process6,
                'process7'=>$request->process7,
                'process8'=>$request->process8,
                'process9'=>$request->process9,
                'process10'=>$request->process10
            ]);


        return redirect()->route('jasas.index',["title"=>"jasas",'active'=>'jasa'])->with(['success'=>'data berhasil diubah!']);

    }

    public function destroy($id): RedirectResponse
    {
        //get jasa id
        $jasa=jasa::findOrFail($id);

        // delete jasa
        $jasa->delete();

        //redirect to index
        return redirect()->route('jasas.index',["title"=>"jasas",'active'=>'Jasa'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
