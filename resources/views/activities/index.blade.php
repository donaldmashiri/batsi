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
{{--                        <div class="justify-content-end">--}}
{{--                            <a href="{{ route('activities.create') }}" class="btn btn-success btn-sm justify-content-end" > Create Activity</a>--}}
{{--                        </div>--}}
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')
                        @if($tasks->count() > 0)
                            <table class="table table-bordered table-sm">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Depot</th>
                                    <th scope="col">Shipping Date</th>
                                    <th scope="col">Shipping Status</th>
                                    <th scope="col">Origin Address</th>
                                    <th scope="col">Destination Address</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <th>{{ $task->id}}</th>
                                        <th>
                                            <ul class="list-group">
                                                <li class="list-group-item">{{ $task->customer_names}}</li>
                                                <li class="list-group-item">{{ $task->customer_phone}}</li>
                                            </ul>
                                        </th>
                                        <th>{{ $task->depot}}</th>
                                        <th>{{ $task->shipment_date}}</th>
                                        <th>{{ $task->shipment_status}}</th>
                                        <th>{{ $task->origin_address}}</th>
                                        <th>{{ $task->destination_address}}</th>
                                        <th>{{ $task->created_at}}</th>
                                        <th>
                                            <a href="{{ route('activities.show', $task->id)}}" class="btn btn-primary btn-sm">Start Task</a>
                                        </th>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class='text-center alert alert-danger'>Not Assigned Yet</h3>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
