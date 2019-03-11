@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Bill of Sale</h3>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label><h5>Seller/Supplier</h5></label>
                            </div>

                            <form action="#" method="post" enctype="multipart/form-data">

                                @csrf
                                <input type="text" name="seller" class="form-control" placeholder="Seller">


                                <div class="form-group">
                                    <label><h5>Amount Of Sale</h5></label>
                                    <input type="text" name="amount" class="form-control" placeholder="amount">
                                </div>

                                {{--<div class="form-group">--}}
                                {{--<label><h5>Method of Payment</h5></label>--}}
                                {{--<input type="text" name="payment" class="form-control" placeholder="payment">--}}
                                {{--</div>--}}

                                <li class="form-line" data-type="control_radio" id="id_3">
                                    <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">
                                        <h5>Choose a Payment Method </h5></label>
                                    <div id="cid_3" class="form-input-wide">
                                        <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_3_0" name="q3_chooseA" value="PayPal"/>
              <label id="label_input_3_0" for="input_3_0"> PayPal </label>
            </span>
                                            <span class="form-radio-item" style="clear:right">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_3_1" name="q3_chooseA" value="Purchase Order"/>
              <label id="label_input_3_1" for="input_3_1"> Purchase Order </label>
            </span>
                                        </div>
                                    </div>
                                </li>


                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label><h5>Transaction Date</h5></label>
                                <input type="date" name="date">
                            </div>

                            <div class="form-group">
                                <label><h5>Buyer Information</h5></label>
                                <a href="#">info about buyer </a>
                            </div>

                            <div class="form-group">
                                <label><h5>Description of car being Sold</h5></label>
                                <a href="#">Car Description</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <hr>

        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                @include('buycar.agreement')



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
