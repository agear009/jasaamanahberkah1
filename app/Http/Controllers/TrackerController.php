<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\tracker;
use App\Models\jasa;



// return type redirect respone
use Illuminate\Http\RedirectResponse;
//impandt Facade "Standage"
use Illuminate\Suppandt\Facades\Standage;

class TrackerController extends Controller
{
    //
    public function index(Request $Request): View
    {
        //$trackers=tracker::all();
        //$modeltracker = new tracker;
        //$trackers=$modeltracker->getListtracker();
        //get tracker
        // $trackers = tracker::latest()->paginate(5);
        //render view tracker
        $modelTracker = new tracker;
        $trackers=$modelTracker->getListTrackers();



        if(request('search')){

            //$trackers=tracker::where('code','=',request('search'))->get();
            $trackers=tracker::where('code','=',request('search'))->get();

            return view('trackers.index',["title"=>"tracker",'active'=>'tracker'],compact('trackers'));
        }
        else{
            $modelTracker = new tracker;
            $trackers=$modelTracker->getListTrackers();

            return view('trackers.index',["title"=>"tracker",'active'=>'tracker'],compact('trackers'));
        }

            return view('trackers.index',["title"=>"tracker",'active'=>'tracker'],compact('trackers'));
    }
    // untuk menampilkan fandm tambah data
    public function create(): view {
        $Jasa=jasa::all();
        $date=date("Ymd");
        $part1=date("his");
        $code=$date.$part1;

        return view('trackers.Create',["title"=>"Create",'active'=>'tracker'],compact('Jasa','code'));

    }
    //pungsi menambahkan data
    public function store(Request $request): RedirectResponse
    {

        $this->validate($request,[


            'code' =>'max:255',
            'name' =>'min:2|max:255',
            'name_order' =>'required',
            'condition' =>'required|max:255',
            'status1' =>'required|max:255',
            'status2' =>'required|max:255',
            'status3' =>'required|max:255',
            'status4' =>'required|max:255',
            'status5' =>'required|max:255',
            'status6' =>'required|max:255',
            'status7' =>'required|max:255',
            'status8' =>'required|max:255',
            'status9' =>'required|max:255',
            'status10' =>'required|max:255',
            'constraint' =>'max:255'



        ]);

        tracker::create([

            'code'=>$request->code,
            'name'=>$request->name,
            'name_order'=>$request->name_order,
            'condition'=>$request->condition,
            'status1'=>$request->status1,
            'status2'=>$request->status2,
            'status3'=>$request->status3,
            'status4'=>$request->status4,
            'status5'=>$request->status5,
            'status6'=>$request->status6,
            'status7'=>$request->status7,
            'status8'=>$request->status8,
            'status9'=>$request->status9,
            'status10'=>$request->status10,
            'constraint'=>$request->constraint

        ]);

        //redirect to index
        return Redirect()->route('trackers.index',["title"=>"tracker",'active'=>'tracker'])->with(['success'=>'data success ditambahkan!']);
    }

    //function show
    public function show(string $id):view
    {

        //get pos id
        //$tracker=tracker::findorFail($id);
        //$Jasa=jasa::all();
        $modeltrackerById = new tracker;
        $tracker=$modeltrackerById->getListtrackersById($id);

        //render view with tracker
        return view('trackers.show',["title"=>"Show",'active'=>'tracker'],compact('tracker'));
    }

    public function edit(string $id):View
    {
        //get tracker by id
        $tracker=tracker::findorFail($id);
        $Jasa=jasa::all();
        return view('trackers.edit',["title"=>"Edit",'active'=>'tracker'], compact('tracker','Jasa'));

    }

    public function update(Request $request, $id): RedirectResponse

    {

        $this->validate($request,[

            'code' =>'required|max:255',
            'name' =>'required|min:2|max:255',
            'name_order' =>'required',
            'condition' =>'required|max:255',
            'status1' =>'required|max:255',
            'status2' =>'required|max:255',
            'status3' =>'required|max:255',
            'status4' =>'required|max:255',
            'status5' =>'required|max:255',
            'status6' =>'required|max:255',
            'status7' =>'required|max:255',
            'status8' =>'required|max:255',
            'status9' =>'required|max:255',
            'status10' =>'required|max:255',
            'constraint' =>'required|max:255',
        ]);
        //get tracker by id

        $tracker=tracker::findorFail($id);

             if($tracker->status1=='Process' and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint )
               { $tracker->update(['status1'=>'Done','status2'=>'Process','constraint'=>'-']);}
             elseif($tracker->status2=='Process' and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint )
               { $tracker->update(['status2'=>'Done','status3'=>'Process','constraint'=>'-']);}
             elseif($tracker->status3=='Process' and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint)
               { $tracker->update(['status3'=>'Done','status4'=>'Process','constraint'=>'-']);}
             elseif($tracker->status4=='Process' and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint )
               { $tracker->update(['status4'=>'Done','status5'=>'Process','constraint'=>'-']);}
             elseif($tracker->status5=='Process'  and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint )
               { $tracker->update(['status5'=>'Done','status6'=>'Process','constraint'=>'-']);}
             elseif($tracker->status6=='Process'  and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint )
               { $tracker->update(['status6'=>'Done','status7'=>'Process','constraint'=>'-']);}
             elseif($tracker->status7=='Process' and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint )
               { $tracker->update(['status7'=>'Done','status8'=>'Process','constraint'=>'-']);}
             elseif($tracker->status8=='Process'  and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint)
               { $tracker->update(['status8'=>'Done','status9'=>'Process','constraint'=>'-']);}
             elseif($tracker->status9=='Process'  and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint)
               { $tracker->update(['status9'=>'Done','status10'=>'Process','constraint'=>'-']);}
             elseif($tracker->status10=='Process'  and $request->name==$tracker->name and $request->name_order==$tracker->name_order and $request->condition==$tracker->condition and $request->code==$tracker->code and $request->constraint==$tracker->constraint)
               { $tracker->update(['status10'=>'Done','constraint'=>'-']);}

            else{

                $tracker->update([
                    'code'=>$request->code,
                    'name'=>$request->name,
                    'name_order'=>$request->name_order,
                    'condition'=>$request->condition,
                    'status1'=>$request->status1,
                    'status2'=>$request->status2,
                    'status3'=>$request->status3,
                    'status4'=>$request->status4,
                    'status5'=>$request->status5,
                    'status6'=>$request->status6,
                    'status7'=>$request->status7,
                    'status8'=>$request->status8,
                    'status9'=>$request->status9,
                    'status10'=>$request->status10,
                    'constraint'=>$request->constraint

                 ]);

            }


        return redirect()->route('trackers.index',["title"=>"trackers",'active'=>'tracker'])->with(['success'=>'data berhasil diubah!']);

    }

    public function destroy($id): RedirectResponse
    {
        //get tracker id
        $tracker=tracker::findorFail($id);

        // delete tracker
        $tracker->delete();

        //redirect to index
        return redirect()->route('trackers.index',["title"=>"trackers",'active'=>'tracker'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
