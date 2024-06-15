@extends('layouts.public.app')

@section('content')
    <div class="container">
        <h1>Our Products</h1>
        @foreach ($products as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->detail }}</p>
                    <a href="{{ route('products.show', $profile->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        @endforeach
        {!! $products->links() !!}
    </div>
@endsection
