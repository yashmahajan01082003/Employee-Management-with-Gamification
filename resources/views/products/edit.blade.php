@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col">
                <h3>Edit Products</h3>
                <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                    @csrf
                    @method('PUT')
                    @include('products.form')
                </form>
            </div>
        </div>
    </div>
@endsection
