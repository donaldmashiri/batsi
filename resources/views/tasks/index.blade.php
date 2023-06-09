@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-gradient-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Task</h6>
                        <div class="justify-content-end">
                            <a href="{{ route('tasks.create') }}" class="btn btn-success btn-sm justify-content-end"> New Task</a>
                        </div>
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
                                    <th scope="col">Driver</th>
                                    <th scope="col">Depot</th>
                                    <th scope="col">Shipping Date</th>
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
                                        <th>{{ $task->user->name }}</th>
                                        <th>{{ $task->depot}}</th>
                                        <th>{{ $task->shipment_date}}</th>
                                        <th>{{ $task->origin_address}}</th>
                                        <th>{{ $task->destination_address}}</th>
                                        <th>{{ $task->created_at}}</th>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class='text-center alert alert-danger'>No Tasks Available</h3>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
