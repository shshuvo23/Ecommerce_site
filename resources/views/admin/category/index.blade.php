@extends('admin.master')

@section('pageTitle')
    Category
@endsection

@section('pageDropDown')
    Add Category
@endsection

@section('body')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Create New Category</h2>
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
                <form action="{{route('category.create')}}" method="POST">
                    @csrf
                    <p class="text-success">{{Session::get('message')}}</p>
                    <div class="row">
                    <div class="col-md-6">
                        <label for="">Category Name</label>
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
