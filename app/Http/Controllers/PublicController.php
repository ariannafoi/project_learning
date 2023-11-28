<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $topics = Topic::all()->sortDesc();
        return view('welcome', compact('topics'));
    }
}
