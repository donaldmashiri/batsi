@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

            <!-- First Notification Column -->
{{--            @if($activities && $activities->count() > 0)--}}
                @foreach ($activities as $task)
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div style="background-color: brown" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-white">Notification 1</h6>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body bg-light">
                                <div class="card-body">
                                    <h3 class="card-title">Task: {{ $task->customer_names }}</h3>
                                    <p class="card-text">Origin: {{ $task->origin_address }}</p>
                                    <p class="card-text">Destination: {{ $task->destination_address }}</p>

                                    <h4 class="card-subtitle mb-2">Activities:</h4>
                                    <ul class="list-group">
                                        @foreach ($task->activities as $activity)
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Mass:</strong> {{ $activity->mass }}
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <strong>Time:</strong> {{ $activity->time }}
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <strong>Distance:</strong> {{ $activity->distance }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <strong>Status:</strong> {{ $activity->status }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--            @else--}}
{{--                <div class="col-12">--}}
{{--                    <div class="alert alert-info" role="alert">--}}
{{--                        No pending activities found.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}



        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- SweetAlert Popups -->


    @if($activities->count() < 1)
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            // Example SweetAlert popup
            swal({
                title: "Notifications!",
                text: "You Got No Pending Deliveries",
                icon: "info",
            });
        </script>
    @elseif(($activities->count() > 0))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            // Example SweetAlert popup
            swal({
                title: "Notifications!",
                text: "You Got Task and Activities Not Finished",
                icon: "success",
            });
        </script>
    @endif

@endsection
