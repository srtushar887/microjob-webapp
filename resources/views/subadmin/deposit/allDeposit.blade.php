@extends('layouts.subadmins')
@section('subadmin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">All Deposit</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Deposit List</h4>
                <div class="table-responsive">
                    <table class="table mb-0" id="alldeposit">

                        <thead class="table-light">
                        <tr>
                            <th>User Email</th>
                            <th>Gateway</th>
                            <th>Sender No.</th>
                            <th>Transaction No.</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>





    <div class="modal fade" id="editdepositmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Update Deposit Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('subadmin.deposit.status.change')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category Name</label>
                            <select class="form-control" name="status">
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                            <input type="hidden" class="form-control edit_dep_id" name="edit_dep_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="deletedepositmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Deposit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('subadmin.deposit.delete')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>are you sure to delete this deposit ?</label>
                            <input type="hidden" class="form-control delete_dep_id" name="delete_dep_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="deleteMainCat">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection

@section('js')
    <script>

        function deletedeposit(id) {
            $('.delete_dep_id').val(id);
        }

        function editdepsoit(id)
        {
            $('.edit_dep_id').val(id);
        }


        $(document).ready(function () {


            let getAllDeposit = () =>{
                $('#alldeposit').DataTable().destroy();
                $('#alldeposit').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "{{ route('subadmin.all.deposit.get') }}",
                    columns: [
                        { data: 'user.email', name: 'user.email',class: 'text-center' },
                        {
                            data:'gateway_id',class: 'text-center',
                            render:function (data) {
                                if(data == 1){
                                    return 'Bkash';
                                }else if(data == 2){
                                    return 'Rocket';
                                }else {
                                    return 'not set'
                                }
                            }
                        },
                        { data: 'sender_number', name: 'sender_number',class: 'text-center' },
                        { data: 'transaction_number', name: 'transaction_number',class: 'text-center' },
                        { data: 'amount', name: 'amount',class: 'text-center' },
                        {
                            data:'status',class: 'text-center',
                            render:function (data) {
                                if(data == 0){
                                    return 'Pending';
                                }else if(data == 1){
                                    return 'Completed';
                                }else if(data == 2){
                                    return 'Rejected';
                                }else {
                                    return 'not set'
                                }
                            }
                        },
                        { data: 'created_at', name: 'created_at',class: 'text-center' },
                        {data: 'action', name: 'action', orderable: false, searchable: false,class: 'text-center'},
                    ]
                });
            };

            getAllDeposit();



        })
    </script>
@endsection
