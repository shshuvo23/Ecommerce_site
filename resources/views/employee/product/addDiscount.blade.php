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
            <h2>Added discount for :{{ $product->product_name }}</h2>
        </div>
        <div class="card-body">
            <form action="{{route('product.discount-add', ['id' => $product->id])}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <p class="text-success">{{Session::get('message')}}</p>


                    <div class="row mb-3">
                        <label for="" class="col-md-3">Discount</label>
                        <div class="col-md-9">
                            <input type="number" name="discount" id="price" class="form-control" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            {{-- <input type="submit"  class="btn btn-outline-success px-5" value="Add Product"> --}}
                            <button type="submit" class="btn btn-outline-success px-5 btn-submit">Add Discount</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
