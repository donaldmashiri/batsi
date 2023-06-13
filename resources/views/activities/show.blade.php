@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-gradient-secondary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Activities in Progress</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card header m-1 font-weight-bolder text-info">Task Started </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-sm">
                                            <thead class="bg-light">
                                            <tr>
                                                <th scope="col">ref#</th>
                                                <th>TSK00{{ $task->id}}</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Customer Details</th>
                                                <th>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">{{ $task->customer_names}}</li>
                                                        <li class="list-group-item">{{ $task->customer_phone}}</li>
                                                    </ul>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Depot</th>
                                                <th>{{ $task->depot}}</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Shipping Date</th>
                                                <th>{{ $task->shipment_date}}</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Shipping Status</th>
                                                <th>{{ $task->shipment_status}}</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Origin Address</th>
                                                <th>{{ $task->origin_address}}</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Destination Address</th>
                                                <th>{{ $task->destination_address}}</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">Driver Progress</div>
                                    <div class="card-body">
                                        @if($activityCount >  0)
                                            <ul class="list-group">
                                                <li class="list-group-item">Activity#: 00AT{{ $activity->id }}</li>
                                                <li class="list-group-item">Mass: {{ $activity->mass }}</li>
                                                <li class="list-group-item">Time: {{ $activity->time }}</li>
                                                <li class="list-group-item">Distance: {{ $activity->km }}</li>
                                                <li class="list-group-item">Cost: {{ $activity->cost }}</li>
                                                <li class="list-group-item text-info">Status: {{ $activity->status }}</li>
                                            </ul>
                                            <div class="card-body">
                                                <h6>Change Progress Status</h6>
                                                <form action="{{ route('activities.update', $activity->id) }}" method="POST" id="statusForm">
                                                    @csrf
                                                    @method('PUT')
                                                    <button onclick="showAlert()"  class="btn btn-success" name="status" value="Delivered" type="submit">Delivered</button>
                                                    @if ($activity->status !== 'Delivered')
                                                        <button onclick="showDAlert()" class="btn btn-danger" name="status" value="Not Delivered" type="submit">Not Delivered</button>
                                                    @endif

                                                    @if($activity->status === 'Not Delivered')

                                                        @if ($activity->reason !== null)
                                                            <ul class="list-group mt-3">
                                                                <li class="list-group-item font-weight-bolder">Reason: {{ $activity->reason }}</li>
                                                            </ul>
                                                        @endif

                                                            @if ($activity->reason === null)
                                                                <div class="form-group">
                                                                    <input type="text" name="reason" class="form-control" placeholder="Reason: ">

                                                                    <button type="submit" name="status" name="status" value="Not Delivered"  class="btn btn-primary">Submit</button>
                                                                </div>
                                                            @endif
                                                    @endif

                                                </form>



                                            </div>


                                            <script>
                                                // Display a basic SweetAlert alert
                                                function showAlert() {
                                                    Swal.fire('Success', 'Package Successfully Delivered', 'success');
                                                }

                                                function showDAlert() {
                                                    Swal.fire('Not Delivered', 'Not Delivered', 'error');
                                                }

                                            </script>



                                        @else
                                            <form action="{{ route('activities.store') }}" method="post">
                                                @csrf

                                                <input type="hidden" value="{{ $task->id }}" name="task_id">
                                                <div class="form-group">
                                                    <label for="mass" class="col-form-label text-md-end">{{ __('Mass (KG)') }}</label>

                                                    <input id="mass" type="text" class="form-control @error('mass') is-invalid @enderror" name="mass" value="{{ old('mass') }}" required autocomplete="mass" autofocus>
                                                    @error('mass')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="time" class="col-form-label text-md-end">{{ __('Time of Departure') }}</label>

                                                    <input id="time" type="text" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>
                                                    @error('time')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>

                                            </form>
                                        @endif






                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
