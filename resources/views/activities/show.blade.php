@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-gradient-secondary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Activities</h6>
                        <div class="justify-content-end">
                            <a href="" class="btn btn-success btn-sm justify-content-end"  data-bs-toggle="modal" data-bs-target="#drivers"> Create Activity</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card header"></div>
                                    <div class="card-body">
                                        <table>
                                            <thead class="bg-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th>{{ $activity->shipment_date }}</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">bb</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
