@extends('layouts.admin')
@section('admin')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">


                <div class="card-body">

                    <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Min Amount</th>
                                    <th scope="col">Max Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($gateway as $payg)
                                    <tr>
                                        <th scope="row">{{$payg->gateway_name}}</th>
                                        <td>{{$payg->gateway_number}}</td>
                                        <td>{{$payg->min_price}}</td>
                                        <td>{{$payg->max_price}}</td>
                                        <td>
                                            @if ($payg->is_active == 1)
                                                Active
                                            @elseif($payg->is_active == 2)
                                                In-Active
                                            @else
                                                Not Set
                                            @endif
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editgateway{{$payg->id}}">Edit</button>
                                        </td>
                                    </tr>


                                    <div class="modal fade" id="editgateway{{$payg->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Update Payment Gateway</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{route('admin.payment.gateway.update')}}" method="post">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Gateway Name</label>
                                                        <input type="text" class="form-control gateway_name" name="gateway_name" value="{{$payg->gateway_name}}">
                                                        <input type="hidden" class="form-control edit_main_cat_id" name="gateway_edit" value="{{$payg->id}}">
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Gateway Number</label>
                                                        <input type="text" class="form-control gateway_number" name="gateway_number" value="{{$payg->gateway_number}}">
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Gateway Note</label>
                                                        <textarea type="text" class="form-control edit_cat_name" name="gateway_note" >{!! $payg->gateway_note !!}</textarea>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Gateway Min Amount</label>
                                                        <input type="text" class="form-control edit_cat_name" name="min_price" value="{{$payg->min_price}}">
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Gateway Max Amount</label>
                                                        <input type="text" class="form-control edit_cat_name" name="max_price" value="{{$payg->max_price}}">
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control update_country edit_country_id" name="is_active">
                                                            <option value="0">select any</option>
                                                            <option value="1" {{$payg->is_active == 1 ? 'selected' : ''}}>Active</option>
                                                            <option value="2" {{$payg->is_active == 2 ? 'selected' : ''}}>In-Active</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" id="updateMainCatSave">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->


        <!-- end col -->
    </div>
@endsection
