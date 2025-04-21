<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;

class GeneralCOntroller extends Controller
{
    //
    public function test(){
        $uses= User::all();
        return response()->json($uses);
    }
}
