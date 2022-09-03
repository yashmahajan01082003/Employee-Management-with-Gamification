@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ Auth::user()->name }}</h2>
                        <div>{{ __('Welcome back!') }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $credit_points }}</h2>
                        <div>Earned Points</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $debit_points }}</h2>
                        <div>Redeemed Points</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $balance_points }}</h2>
                        <div>Balance Points</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table striped">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Name</th>
                                <th>Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaderboard as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->points }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
