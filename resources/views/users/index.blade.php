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
                        <h6 class="m-0 font-weight-bold text-white">All Drivers</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')
                        @if($users->count() > 0)
                            <table class="table table-bordered table-sm">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col">license#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone#</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $driver)
                                    <tr>
                                        <th>{{ $driver->license_no }}</th>
                                        <th>{{ $driver->name }}</th>
                                        <th>{{ $driver->email }}</th>
                                        <th>{{ $driver->phone_no }}</th>
                                        <th>{{ $driver->created_at }}</th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class='text-center alert alert-danger'>No Drivers Available</h3>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
