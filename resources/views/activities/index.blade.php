@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>Activities
                <a href="{{ route('activities.create') }}" class="btn btn-block btn-sm btn-primary">
                    Add Activity
                </a>
            </h3>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->id }}</td>
                        <td>{{ $activity->name }}</td>
                        <td>{{ $activity->description }}</td>
                        <td><a href="{{ route('activities.edit', ['activity' => $activity->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $activities->links() }}
    </div>
@endsection
