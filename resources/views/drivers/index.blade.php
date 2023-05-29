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
                        <h6 class="m-0 font-weight-bold text-white">Drivers</h6>
                        <div class="justify-content-end">
                            <a href="" class="btn btn-success btn-sm justify-content-end"  data-bs-toggle="modal" data-bs-target="#drivers"> Add New Driver</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')
                        @if($drivers->count() > 0)
                            <table class="table table-bordered table-sm">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col">license#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone#</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($drivers as $driver)
                                    <tr>
                                        <th>{{ $driver->license_number }}</th>
                                        <th>{{ $driver->name }}</th>
                                        <th>{{ $driver->email }}</th>
                                        <th>{{ $driver->phone_number }}</th>
                                        <th>{{ $driver->address }}</th>
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


        <!-- Modal -->
        <div class="modal fade" id="drivers" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-secondary text-white">
                        <h5 class="modal-title " id="staticBackdropLabel">Add Driver</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('drivers.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Names') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="license_number" class="col-md-4 col-form-label text-md-end">{{ __('License Number') }}</label>
                                <div class="col-md-6">
                                    <input id="license_number" type="text" class="form-control @error('license_number') is-invalid @enderror" name="license_number" value="{{ old('license_number') }}" required autocomplete="license_number" autofocus>
                                    @error('license_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>


@endsection
