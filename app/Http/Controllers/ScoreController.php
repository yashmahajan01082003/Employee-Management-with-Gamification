<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityRule;
use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Score::with(['activity', 'activityRule', 'user'])->paginate(10);
        return view('scores.index', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $score = new Score();
        $activities = Activity::all();
        $users = User::all();
        return view('scores.create', compact('score', 'activities', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only(['activity_id', 'score', 'score_date', 'user_id']);
        $score = Score::create($inputs);
        $score->creditPoints();

        return redirect()->route('scores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $score = Score::findOrFail($id);
        $activities = Activity::all();
        $users = User::all();
        return view('scores.edit', compact('score', 'activities', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->only(['activity_id', 'score', 'score_date', 'user_id']);
        $score = Score::findOrFail($id);
        $score->fill($inputs);
        $score->save();
        $score->creditPoints();

        return redirect()->route('scores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
