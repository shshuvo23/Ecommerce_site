@extends('customer.master')

@section('pageTitle')
    Dasboard
@endsection

@section('pageDropDown')
    Account Details
@endsection


@section('body')
    {{-- <div class="col-lg-12" style="text-align: center;">
        <div class="col-lg-8 center" style=" display: inline-block;">
            <div class="card_box box_shadow position-relative mb_30 green_bg    ">
                <div class="white_box_tittle green_bg    ">
                    <div class="main-title2 ">
                        <div class="row">
                            <div class="col-lg-4 py-3">
                                <div class="row py-3">
                                    <div class="col-lg-12 py-3">
                                        <h4 style="text-align: left;">Name:{{ $customer->name }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8" style="text-align: right;">
                                <img src="{{ asset($customer->image) }}" alt="" height="200" width="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_body">
                    <table>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number:</th>
                            <td>{{ $customer->mobile }}</td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td>{{ $customer->address }}</td>
                        </tr>

                        <tr>
                            <th>Nid Number:</th>
                            <td>{{ $customer->nid }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="modal-content cs_modal">
                        <div class="modal-header theme_bg_1 justify-content-center">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 style="text-align: left; color: rgb(118, 209, 126)">{{ $customer->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8" style="text-align: right;">
                                    <img src="{{ asset($customer->image) }}" alt="" height="100" width="200">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $customer->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number:</th>
                                    <td>{{ $customer->mobile }}</td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td>{{ $customer->address }}</td>
                                </tr>

                                <tr>
                                    <th>Nid Number:</th>
                                    <td>{{ $customer->nid }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
