@extends('admin.master')
@section('pageTitle')
    Brand
@endsection

@section('pageDropDown')
    Manage Brand
@endsection

@section('body')
    <div class="box_header m-0">
        <div class="main-title">
            <h3 class="m-0"></h3>
        </div>
    </div>
    </div>
    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header">
                <h4>Brand List</h4>
                <div class="box_right d-flex lms_block">
                    <div class="serach_field_2">
                        <div class="search_inner">
                            <form Active="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search content here...">
                                </div>
                                <button type="submit"> <i class="ti-search"></i> </button>
                            </form>
                        </div>
                    </div>
                    <div class="add_button ms-2">
                        <a href="{{ route('brand.add') }}" data-bs-toggle="modal" data-bs-target="#addcategory"
                            class="btn_1">Add New</a>
                    </div>
                </div>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($brands as $brand)
                            <tr>
                                <th scope="row"><a href="#" class="question_content">{{ $loop->iteration }}</a>
                                </th>
                                <td class="fw-bold">{{ $brand->name }}</td>
                                <td>
                                <div class="col-md-6">
                                        <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="badge rounded-pill bg-secondary">Edit</a>
                                        <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="badge rounded-pill bg-danger">Delete</a>
                                </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
