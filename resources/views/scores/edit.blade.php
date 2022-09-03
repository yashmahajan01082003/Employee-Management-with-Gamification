@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Edit Score</h3>
                <form method="POST" action="{{ route('scores.update', ['score' => $score->id]) }}">
                    @csrf
                    @method('PUT')
                    @include('scores.form')
                </form>
            </div>
        </div>
    </div>
@endsection
