@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Add Activity Rule</h3>
                <form method="POST" action="{{ route('activity-rules.store') }}">
                    @csrf
                    @include('activity-rules.form')
                </form>
            </div>
        </div>
    </div>
@endsection
