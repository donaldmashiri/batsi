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
                        <h6 class="m-0 font-weight-bold text-white">Reports</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Users</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $usersTotal }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Tasks</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tasksTotal }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-caravan fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Activities
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $activitiesTotal }}</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
{{--                            <div class="col-xl-2 col-md-3 mb-4">--}}
{{--                                <div class="card border-left-danger shadow h-100 py-2">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row no-gutters align-items-center">--}}
{{--                                            <div class="col mr-2">--}}
{{--                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">--}}
{{--                                                    Completed Taks</div>--}}
{{--                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <i class="fas fa-camera fa-2x text-gray-300"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-xl-2 col-md-3 mb-4">--}}
{{--                                <div class="card border-left-dark shadow h-100 py-2">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row no-gutters align-items-center">--}}
{{--                                            <div class="col mr-2">--}}
{{--                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">--}}
{{--                                                    Total Distance Covered</div>--}}
{{--                                                <div class="h5 mb-0 font-weight-bold text-gray-800">180KM</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <i class="fas fa-video fa-2x text-gray-300"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <div class="card">
                            <div class="card-body">

                               <div class="row">
                                   @foreach ($tasks as $task)
                                   <div class="col-md-4">
                                       <div class="card">

                                               <div class="input-group mb-3">
                                                   <input type="text" id="statusFilter" class="form-control" placeholder="Filter by Status">
                                                   <input type="text" id="customerNameFilter" class="form-control" placeholder="Filter by Customer Name">
                                                   <div class="input-group-append">
                                                       <button class="btn btn-primary" onclick="applyFilters()">Apply Filters</button>
                                                   </div>
                                               </div>

                                               <script>
                                                   function applyFilters() {
                                                       var statusFilterValue = document.getElementById('statusFilter').value.toLowerCase();
                                                       var customerNameFilterValue = document.getElementById('customerNameFilter').value.toLowerCase();

                                                       var tasks = document.getElementById('taskFilter').getElementsByClassName('card-body');

                                                       for (var i = 0; i < tasks.length; i++) {
                                                           var task = tasks[i];

                                                           var taskStatus = task.querySelector('.card-subtitle').innerText.toLowerCase();
                                                           var customerName = task.querySelector('.card-title').innerText.toLowerCase();

                                                           if (
                                                               taskStatus.includes(statusFilterValue) &&
                                                               customerName.includes(customerNameFilterValue)
                                                           ) {
                                                               task.style.display = 'block';
                                                           } else {
                                                               task.style.display = 'none';
                                                           }
                                                       }
                                                   }
                                               </script>

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
                                               {{ $tasks->links() }}
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
