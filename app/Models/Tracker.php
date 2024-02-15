<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tracker extends Model
{
    use HasFactory;
    protected $fillable=[
        'code',
        'name',
        'name_order',
        'condition',
        'status1',
        'status2',
        'status3',
        'status4',
        'status5',
        'status6',
        'status7',
        'status8',
        'status9',
        'status10',
        'constraint',
    ];

    public function getListTrackers()
                {
                    $listTrackers = DB::table('trackers')
                        ->join('jasas','trackers.name_order','=','jasas.id')
                        ->select('trackers.*','jasas.name AS jasa_name','jasas.process1 AS jasa_process1','jasas.process2 AS jasa_process2','jasas.process3 AS jasa_process3','jasas.process4 AS jasa_process4','jasas.process5 AS jasa_process5','jasas.process6 AS jasa_process6','jasas.process7 AS jasa_process7','jasas.process8 AS jasa_process8','jasas.process9 AS jasa_process9','jasas.process10 AS jasa_process10')
                        ->get();
                        return $listTrackers;
                }

                public function getListtrackersById($id)
                {
                $getListTrackersById = DB::table('trackers')
                                                ->join('jasas','trackers.name_order','=','jasas.id')
                                                ->where('trackers.id','=',$id)
                                                ->select('trackers.*','jasas.id AS jasa_id','jasas.name AS jasa_name','jasas.name AS jasa_name','jasas.process1 AS jasa_process1','jasas.process2 AS jasa_process2','jasas.process3 AS jasa_process3','jasas.process4 AS jasa_process4','jasas.process5 AS jasa_process5','jasas.process6 AS jasa_process6','jasas.process7 AS jasa_process7','jasas.process8 AS jasa_process8','jasas.process9 AS jasa_process9','jasas.process10 AS jasa_process10')
                                                ->get();
                return $getListTrackersById[0];
                }

                public function getListtrackersBySearch($search)
                {
                $getListTrackersById = DB::table('trackers')
                                                ->join('jasas','trackers.name_order','=','jasas.id')
                                                ->where('trackers.code','=',$search)
                                                ->select('trackers.*','jasas.id AS jasa_id','jasas.name AS jasa_name','jasas.name AS jasa_name','jasas.process1 AS jasa_process1','jasas.process2 AS jasa_process2','jasas.process3 AS jasa_process3','jasas.process4 AS jasa_process4','jasas.process5 AS jasa_process5','jasas.process6 AS jasa_process6','jasas.process7 AS jasa_process7','jasas.process8 AS jasa_process8','jasas.process9 AS jasa_process9','jasas.process10 AS jasa_process10')
                                                ->get();
                return $getListTrackersById;
                }
}
