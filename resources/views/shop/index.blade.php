@extends('layouts.master')
@section('title')
Laravel shopping Cart 
@endsection

@section('content')
  @foreach($products->chunk(3) as $productionChunk)
      <div class="row">

        @foreach($productionChunk as $product)
          <div class="col-sm-6 col-md-4">
              <div class="card">
                <a href=""><img class="card-img-top img-responsive" src="{{ $product->imagePath }}"   alt="Card image cap"></a>
                <div class="card-body">
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                <div class="clearfix">
                  <span class="badge badge-dark  price">{{ $product->price }} Shs Only</span>
                  <a href="{{route('product.addToCart', [ 'id'=> $product->id])}}" class="btn btn-primary pull-right">Add to Cart</a>
                  
                  </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
    @endforeach
@endsection


