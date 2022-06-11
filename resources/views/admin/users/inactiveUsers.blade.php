@extends('layouts.admin')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">In-Active Users</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users List</h4>
                <div class="table-responsive">
                    <table class="table mb-0" id="allwithdraw">

                        <thead class="table-light">
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Account Type</th>
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

@endsection

@section('js')
    <script>

        $(document).ready(function () {


            let getAllUsers = () => {
                $('#allwithdraw').DataTable().destroy();
                $('#allwithdraw').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "{{ route('admin.inactive.users.get') }}",
                    columns: [
                        {data: 'name', name: 'name', class: 'text-center'},
                        {data: 'email', name: 'email', class: 'text-center'},
                        {data: 'phone_number', name: 'phone_number', class: 'text-center'},
                        {
                            data: 'account_status', class: 'text-center',
                            render: function (data) {
                                if (data == 1) {
                                    return 'In-Active';
                                } else if (data == 2) {
                                    return 'Active';
                                } else if (data == 3) {
                                    return 'Blocked';
                                } else {
                                    return 'not set'
                                }
                            }
                        },
                        {data: 'created_at', name: 'created_at', class: 'text-center'},
                        {data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center'},
                    ]
                });
            };

            getAllUsers();


        })
    </script>
@endsection
