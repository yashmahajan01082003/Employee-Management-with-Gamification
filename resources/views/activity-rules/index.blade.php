@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>Activity Rules
                <a href="{{ route('activity-rules.create') }}" class="btn btn-block btn-sm btn-primary">
                    Activity Rule
                </a>
            </h3>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Activity Rule Id</th>
                    <th>Name</th>
                    <th>Activity </th>
                    <th>Minimum Score</th>
                    <th>Maximum Score</th>
                    <th>Operator</th>
                    <th>Points</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activityRules as $activityRule)
                    <tr>
                        <td>{{ $activityRule->id }}</td>
                        <td>{{ $activityRule->name }}</td>
                        <td>{{ $activityRule->activity->name }}</td>
                        <td>{{ $activityRule->min_score }}</td>
                        <td>{{ $activityRule->max_score }}</td>
                        <td>{{ $activityRule->operator }}</td>
                        <td>{{ $activityRule->points }}</td>
                        <td><a href="{{ route('activity-rules.edit', ['activity_rule' => $activityRule->id]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $activityRules->links() }}
    </div>
@endsection
