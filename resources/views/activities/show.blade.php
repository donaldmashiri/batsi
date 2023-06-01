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
                        <h6 class="m-0 font-weight-bold text-white">Activities in Progress</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card header">Task </div>
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
{{--                                        @if($activity->count() > 0)--}}

                                            <table class="table table-bordered table-sm">
                                                <thead class="">
                                                <tr>
                                                    <th scope="col">ref#</th>
                                                    <th>ACT00{{ $activity->id}}</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Mass (KG)</th>
                                                    <th>{{ $activity->mass}}</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th>{{ $activity->time}}</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Distance KM</th>
                                                    <th>{{ $activity->km}}KM</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Cost</th>
                                                    <th>{{ $activity->cost}}KM</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Status</th>
                                                    <th>{{ $activity->status}}</th>
                                                </tr>
                                                </thead>
                                            </table>

{{--                                        @else--}}


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
{{--                                        @endif--}}

                                        <div class="card-body">
                                            <h6>Change Progress Status</h6>
                                            <a href="" class="btn btn-success">Delivered</a>
                                            <a href="" class="btn btn-danger">Not Delivered</a>
                                        </div>



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
