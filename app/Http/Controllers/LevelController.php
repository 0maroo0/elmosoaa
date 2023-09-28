<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getLeve(){
        $data = level::get();
        return response(['data'=>$data],200);
    }
}
