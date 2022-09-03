@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Edit Activity Rule</h3>
                <form method="POST" action="{{ route('activity-rules.update', ['activity_rule' => $activityRule->id]) }}">
                    @csrf
                    @method('PUT')
                    @include('activity-rules.form')
                </form>
            </div>
        </div>
    </div>
@endsection
