@extends('employee.master')

@section('pageTitle')
Product
@endsection

@section('pageDropDown')
Product Add
@endsection


@section('body')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Create New Product</h2>
        </div>
        <div class="card-body">
            <form action="{{route('product.create')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <p class="text-success">{{Session::get('message')}}</p>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Category</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id" id="category_id">
                                <option  value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Brand</label>
                        <div class="col-md-9">
                            <select class="form-control" name="brand_id" id="brand_id">
                                <option  value="">Select Category</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" name="product_name" id="product_name" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Description</label>
                        <div class="col-md-9">
                            <textarea name="product_detail" id="product_detail" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product BarCode</label>
                        <div class="col-md-9">
                            <input type="text" name="barcode" id="code" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Price</label>
                        <div class="col-md-9">
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            {{-- <input type="submit"  class="btn btn-outline-success px-5" value="Add Product"> --}}
                            <button type="submit" class="btn btn-outline-success px-5 btn-submit">Add product</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
