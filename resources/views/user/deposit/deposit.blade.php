@extends('layouts.user')
@section('user')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">


                <div class="card-body">

                    <div class="live-preview">
                        <form class="row g-3" action="{{route('user.deposit.save')}}" method="post">
                            @csrf
                            <div class="col-md-12">
                                <label for="validationDefault01" class="form-label">Deposit Type</label>
                                <select class="form-control" name="deposit_type">
                                    <option value="0">select any</option>
                                </select>

{{--                                @foreach($gateways as $gateway)--}}
{{--                                    <option value="{{$gateway->id}}">{{$gateway->gateway_name}}</option>--}}
{{--                                @endforeach--}}
                            </div>

                            <div class="col-xl-12">
                                <div class="card details_info">
                                    <div class="card-body">
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <p class="gateway_note"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">Amount</label>
                                <input type="text" class="form-control" name="amount">
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">USD Rate</label>
                                <input type="text" class="form-control" name="usd_rate" >
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">Transaction Number</label>
                                <input type="text" class="form-control" name="transaction_number">
                            </div>





                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
