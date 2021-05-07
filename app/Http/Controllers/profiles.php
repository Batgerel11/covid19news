<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Twilio\Rest\Client;




class profiles extends Controller
{
    public function list(Request $request)
    {

                $data = Http::get('https://api.covid19api.com/summary')->json();
                return view('profiles', ['data'=>$data]);
    }
 
}



