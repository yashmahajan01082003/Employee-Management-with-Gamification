@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>
                Scores
                <a href="{{ route('scores.create') }}" class="btn btn-block btn-sm btn-primary">
                    Add Scores
                </a>
            </h3>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Score Id</th>
                    <th>Activity</th>
                    <th>Activity Rule</th>
                    <th>Score date</th>
                    <th>Score</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score)
                    <tr>
                        <td>{{ $score->id }}</td>
                        <td>{{ $score->activity->name }}</td>
                        <td>{{ $score->activityRule->name }}</td>
                        <td>{{ $score->score_date }}</td>
                        <td>{{ $score->score }}</td>
                        <td>{{ $score->user->name }}</td>
                        <td><a href="{{ route('scores.edit', ['score' => $score->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $scores->links() }}
    </div>
@endsection
