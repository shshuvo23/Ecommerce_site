@extends('admin.master')

@section('pageTitle')
    Category
@endsection

@section('pageDropDown')
    Edit Category
@endsection

@section('body')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Category</h2>
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
                <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="text-success">{{Session::get('message')}}</p>
                    <div class="row">
                    <div class="col-md-6">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" value="{{$category->name}}" placeholder="name" name="name">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Category Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{asset($category->image)}}" alt="" height="100" width="150">
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
