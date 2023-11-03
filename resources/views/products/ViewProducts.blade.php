
@extends('layouts.dashboard')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <h3>Items in stock</h3>
                @foreach($products as $product)
                <div class="col-3 mt-1 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="width: 286px;height:286px;" src="{{ asset('storage/'.$product->productImg)}}" alt="{{$product->productName}}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->productName }}</h5>
                          <h6 class="card-title">{{ $product->productPrice }}ksh</h6>
                          <p class="card-text">{{ $product->productDescription }}</p>
                        </div>
                      </div>
                </div>       
                @endforeach
            </div>
        </div>
@endsection
