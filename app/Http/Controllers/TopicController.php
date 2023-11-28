<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::all()->sortDesc();
        return view('topic.index', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Topic $topic)
    {
        return view('topic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
        $request->validate(['topic_name' => 'required|string']);

        Topic::create(
            [
            'topic_author' => Auth::user()->name,
            'topic_name' => $request->input('topic_name'),
            ]);
            
        return redirect()->route('topic.index');
   }


    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
