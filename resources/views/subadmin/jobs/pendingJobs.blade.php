@extends('layouts.subadmins')
@section('subadmin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Pending Jobs</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pending Jobs List</h4>
                <div class="table-responsive">
                    <table class="table mb-0" id="alljobs">

                        <thead class="table-light">
                        <tr>
                            <th>User</th>
                            <th>Job Title</th>
                            <th>Job Amount</th>
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



@endsection

@section('js')
    <script>



        $(document).ready(function () {


            let getAllJobs = () =>{
                $('#alljobs').DataTable().destroy();
                $('#alljobs').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "{{ route('admin.pending.jobs.get') }}",
                    columns: [
                        { data: 'user.name', name: 'user.name',class: 'text-center' },
                        { data: 'job_title', name: 'job_title',class: 'text-center' },
                        { data: 'est_job_cost', name: 'est_job_cost',class: 'text-center' },
                        {
                            data:'job_status',class: 'text-center',
                            render:function (data) {
                                if(data == 1){
                                    return 'Pending';
                                }else if(data == 2){
                                    return 'Approved';
                                }else if(data == 3){
                                    return 'Pushed';
                                }else if(data == 4){
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

            getAllJobs();



        })
    </script>
@endsection
