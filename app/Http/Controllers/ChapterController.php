<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    //
    public function getChapert(Request $request){
        $chapter = chapter::where('levelID', $request->levelID)->get();
        if($chapter){
            return response(['data'=>$chapter],200);
        }else{
            return response(['data'=>[], "msg"=>"not found"],400);
        }

    }
}
