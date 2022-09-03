@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Add Products</h3>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    @include('products.form')
                </form>
            </div>
        </div>
    </div>
@endsection
