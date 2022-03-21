@extends('layouts.admin')
@section('admin')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Region & Country List</h4>
                <div class="table-responsive">
                    <table class="table mb-0" id="allcountry">

                        <thead class="table-light">
                        <tr>
                            <th>Country Name</th>
                            <th>Region Name</th>
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


            let getAllRegion = () =>{
                $('#allcountry').DataTable().destroy();
                $('#allcountry').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "{{ route('admin.region.country.get') }}",
                    columns: [
                        { data: 'region', name: 'region',class: 'text-center' },
                        { data: 'country_name', name: 'country_name',class: 'text-center' },
                    ]
                });
            };

            getAllRegion();

        })
    </script>
@endsection
