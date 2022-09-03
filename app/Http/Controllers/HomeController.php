<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $credit_points = auth()->user()->getCreditPoints();
        $debit_points = auth()->user()->getDebitPoints();
        $balance_points = auth()->user()->getBalancePoints();
        $leaderboard = auth()->user()->getLeaderboard();
        return view('home', compact('credit_points', 'debit_points', 'balance_points', 'leaderboard'));
    }
}
