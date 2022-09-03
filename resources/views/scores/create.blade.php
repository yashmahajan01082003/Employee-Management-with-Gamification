@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Add score</h3>
                <form method="POST" action="{{ route('scores.store') }}">
                    @csrf
                    @include('scores.form')
                </form>
            </div>
        </div>
    </div>
@endsection
