@extends('admin.master')

@section('pageTitle')
    Brand
@endsection

@section('pageDropDown')
    Add Brand
@endsection

@section('body')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Create New Brand</h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('brand.create')}}" method="POST">
                    @csrf
                    <p class="text-success">{{Session::get('message')}}</p>
                    <div class="row">
                    <div class="col-md-6">
                        <label for="">Brand Name</label>
                        <input type="text" class="form-control" placeholder="name" name="name">
                    </div>
                    <div class="row">
                        <div class="col-md-3 py-3">
                            <input type="submit" class="btn btn-primary" value="Add new category">
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
