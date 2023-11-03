
 @extends('layouts.dashboard')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Add new product</button>
                </div>
                <h1>Products list</h1>
                <table class="table table-striped table-hover table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Img</th>
                            <th>Product Name</th>
                            <th>productPrice</th>
                            <th style="width: 200px">productDescription</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img style="width: 90px; height:90px;" src="{{ asset('storage/'.$product->productImg)}}" alt="{{$product->productName}}"></td>
                                <td>{{ $product->productName }}</td>
                                <td>{{ $product->productPrice }}</td>
                                <td>{{ $product->productDescription }}</td>
                                <td>
                                    
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">Show</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add new product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{route("products.store")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-lable">Product Name</div>
                            <input class="form-control" type="text" name="ProductName">
                        </div>
                        <div class="form-group">
                            <div class="form-lable">Product Price</div>
                            <input class="form-control" type="text" name="ProductPrice">
                        </div>
                        <div class="form-group">
                            <div class="form-lable">Product Discription</div>
                            <textarea class="form-control" name="ProductDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label">upload img</label>
                            <input name="img" class="form-control" type="file" id="formFile">
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                  </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
@endsection
