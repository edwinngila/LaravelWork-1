@extends('layouts.dashboard') // Use your app layout or extend as needed
    @section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h1>Items detailes</h1>
                <form class="bg-dark text-white p-4">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <img style="width: 200px; height:200px;border-radius:100px;" src="{{ asset('storage/'.$product->productImg)}}" alt="{{$product->productName}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">product Name:</label>
                        <input type="text" class="form-control" id="productName" value="{{ $product->productName }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">product Price:</label>
                        <input type="text" class="form-control" id="productName" value="{{ $product->productPrice }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">product Description:</label>
                        <div>
                            {{ $product->productDescription }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection