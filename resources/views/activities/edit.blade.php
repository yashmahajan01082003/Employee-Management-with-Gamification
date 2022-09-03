@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Edit Activity</h3>
                <form method="POST" action="{{ route('activities.update', ['activity' => $activity->id]) }}">
                    @csrf
                    @method('PUT')
                    @include('activities.form')
                </form>
            </div>
        </div>
    </div>
@endsection
