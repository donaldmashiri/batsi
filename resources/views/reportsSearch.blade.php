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
                        class="card-header bg-gradient-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Search</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    @foreach ($tasks as $task)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <form action="{{ route('search') }}" method="POST">
                                                    @csrf
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="search" class="form-control" placeholder="Search...">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit">Search</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div id="taskFilter">
                                                    <div class="card-header">{{ $task->user->name }}</div>
                                                    <div class="card-body">
                                                        <h3 class="card-title">Task: {{ $task->customer_names }}</h3>
                                                        <p class="card-text">Origin: {{ $task->origin_address }}</p>
                                                        <p class="card-text">Destination: {{ $task->destination_address }}</p>

                                                        <h4 class="card-subtitle mb-2">Activities:</h4>
                                                        <ul class="list-group">
                                                            @foreach ($task->activities as $activity)
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <strong>Mass (KG):</strong> {{ $activity->mass }}
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <strong>Time:</strong> {{ $activity->time }}
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <strong>Distance (KM):</strong> {{ $activity->km }}
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

                                                <script>
                                                    function filterTable() {
                                                        var userId = document.getElementById('filterUserId').value.toLowerCase();
                                                        var plateNumber = document.getElementById('filterPlateNumber').value.toLowerCase();
                                                        var status = document.getElementById('filterStatus').value.toLowerCase();
                                                        var table = document.getElementById('videoDetectionTable');
                                                        var rows = table.getElementsByTagName('tr');

                                                        for (var i = 0; i < rows.length; i++) {
                                                            var userIdCell = rows[i].getElementsByTagName('td')[0];
                                                            var plateNumberCell = rows[i].getElementsByTagName('td')[1];
                                                            var statusCell = rows[i].getElementsByTagName('td')[3];

                                                            if (userIdCell && plateNumberCell && statusCell) {
                                                                var userIdValue = userIdCell.textContent || userIdCell.innerText;
                                                                var plateNumberValue = plateNumberCell.textContent || plateNumberCell.innerText;
                                                                var statusValue = statusCell.textContent || statusCell.innerText;

                                                                if ((userIdValue.toLowerCase().indexOf(userId) > -1 || userId === '') &&
                                                                    (plateNumberValue.toLowerCase().indexOf(plateNumber) > -1 || plateNumber === '') &&
                                                                    (statusValue.toLowerCase() === status || status === '')) {
                                                                    rows[i].style.display = '';
                                                                } else {
                                                                    rows[i].style.display = 'none';
                                                                }
                                                            }
                                                        }
                                                    }
                                                </script>



                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->


@endsection
