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
                            <a href="{{ route('activities.create') }}" class="btn btn-success btn-sm justify-content-end" > Create Activity</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')
                        @if($activities->count() > 0)
                            <table class="table table-bordered table-sm">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Shipment Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Origin Address</th>
                                    <th scope="col">Destination Address</th>
                                    <th scope="col">Driver</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <th>{{ $activity->id }}</th>
                                        <th>{{ $activity->shipment_date }}</th>
                                        <th>{{ $activity->shipment_status }}</th>
                                        <th>{{ $activity->origin_address }}</th>
                                        <th>{{ $activity->destination_address }}</th>
                                        <th>----</th>
                                        <th>{{ $activity->customer_name }}</th>
                                        <th>{{ $activity->customer_phone }}</th>
                                        <th>{{ $activity->created_at }}</th>
                                        <th>
                                            <a href="" class="btn btn-danger btn-sm">Generate driver</a>
                                            <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info btn-sm">View</a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class='text-center alert alert-danger'>No Activity Available</h3>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
