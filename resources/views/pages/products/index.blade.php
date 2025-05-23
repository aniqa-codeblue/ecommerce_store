@extends('layout')
@section('content')

<div class="container">
        <h3 align="center">Products</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="productName">
                        </div>

                        <div class="col-md-6">
                            <label>Category</label>
                            <select class="form-control" name="cat_id" id="cat_id">
                                <option selected>Select Category ID</option>
                                @foreach ($categories as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>   
                                @endforeach
                            </select>
                        </div>
                    <div class="col-md-6">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="col-md-6">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="col-md-6">
                        <label>Image</label>
                        <input type="file" class="form-control" name="picture">
                    </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Add Product">
                        </div>
                    </div>
                </form>
            </div>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $products as $key => $product )
                            <tr>
                                <td scope="col">{{ ++$key }}</td>
                                <td scope="col">{{ $product->productName }}</td>
                                <td scope="col">{{ $product->category->name }}</td>
                                <td scope="col">{{ $product->price }}</td>
                                <td scope="col">
                                    @if($product->picture)
                                        <img src="{{ asset('images/' . $product->picture) }}" alt="Product Image" width="100%">
                                    @else
                                        <img src="{{ asset('images/default.jpg') }}" alt="Product Image" width="100%">
                                    @endif
                                </td>
                                <td scope="col">
                                    <a href="{{ route('product.edit', $product->id) }}">
                                    <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </button>
                                    </a>

                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                <table>
            </div>
        </div>
</div>

@endsection

@push('css')

    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: white;
        }

        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }

        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush