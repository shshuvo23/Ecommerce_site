@extends('admin.master')

@section('pageTitle')
    Customer
@endsection

@section('pageDropDown')
    Add Customer
@endsection

@section('body')
<div class="card col-md-12 border-0">
    <div class="card-header border-0">
        <h3>Add Customer Form</h3>
        <div class="alert-warning alert-dismissible fade show" role="alert">
            <h3><strong>{{Session::get('message')}}</strong></h3>
        </div>
    <div class="card-body">
        <form action="{{route('customer.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="col-md-8">
                    <label class="form-label" for="inputAddress">Name</label>
                    <input type="text" class="form-control" id="inputAddress" name="name" placeholder="name">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                </div>
                <div class=" col-md-4">
                    <label class="form-label" for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword4"
                        placeholder="Password">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-8">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address"
                        placeholder="1234 Main St">
                </div>
            </div>
            <div class="row mb-3">
                <div class=" col-md-4">
                    <label class="form-label" for="inputCity">Contact Number</label>
                    <input type="number" class="form-control" name="mobile" id="inputCity">
                </div>
                <div class=" col-md-4">
                    <label class="form-label" for="inputZip">NID Number</label>
                    <input type="text" class="form-control" name="nid" id="inputZip">
                </div>
            </div>
            <div class="row mb-3">
                <label class="form-label" for="inputZip">Image</label>
                <div class=" col-md-8">
                    <input type="file" class="form-control" id="inputImage" name="image" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Add new Customer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
