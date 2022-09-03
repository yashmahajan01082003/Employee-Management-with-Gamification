@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>Products
                <a href="{{ route('products.create') }}" class="btn btn-block btn-sm btn-primary">
                    Add Products
                </a>
            </h3>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Points </th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->points }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td><a href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection
