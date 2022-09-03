<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\ActivityRule;

class ActivityRuleController extends Controller
{
    protected $operators;

    public function __construct()
    {
        $this->operators = [
            'EQUALS' => 'Equals',
            'BETWEEN' => 'Between',
            'GREATER_THAN' => 'Greater Than',
            'GREATER_THAN_EQUALS' => 'Greater Than Equals',
            'LESS_THAN' => 'Less Than',
            'LESS_THAN_EQUALS' => 'Less Than Equals',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activityRules = ActivityRule::with(['activity'])->paginate(10);
        return view('activity-rules.index', compact('activityRules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();
        $activityRule = new ActivityRule();
        $operators = $this->operators;
        return view('activity-rules.create', compact('activityRule', 'activities', 'operators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only(['name', 'activity_id', 'min_score', 'max_score', 'operator', 'points']);
        $activityRule = ActivityRule::create($inputs);
        return redirect()->route('activity-rules.index');
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
        $activityRule = ActivityRule::findOrFail($id);
        $activities = Activity::all();
        $operators = $this->operators;
        return view('activity-rules.edit', compact('activityRule', 'activities', 'operators'));
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
        $activityrule = ActivityRule::findOrFail($id);
        $inputs = $request->only(['name', 'activity_id', 'min_score', 'max_score', 'operator', 'points']);
        $activityrule->fill($inputs);
        $activityrule->save();
        return redirect()->route('activity-rules.index');
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
