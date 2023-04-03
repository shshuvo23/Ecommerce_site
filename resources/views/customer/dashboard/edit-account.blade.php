@extends('customer.master')

@section('pageTitle')
    Dasboard
@endsection

@section('pageDropDown')
    Edit Account
@endsection


@section('body')
    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="modal-content cs_modal">
                        <div class="modal-header theme_bg_1 justify-content-center">
                            <h5 class="modal-title text_white">Edit account</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('customer.account-update', ['customerid' => $customer->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$customer->name}}">
                                </div>
                                <div class="">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$customer->email}}" readonly>
                                </div>
                                <div class="">
                                    <label for="">Old Password</label>
                                    <input type="password" class="form-control" value="{{$customer->password}}" readonly>
                                </div>
                                <div class="">
                                    <label for="">New Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="">
                                    <label for="">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <img src="{{asset($customer->image)}}" alt="" height="50" width="50">
                                </div>
                                <div class="py-3">
                                    <button type="submit" class="btn btn-primary">Save change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
