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
                        <h6 class="m-0 font-weight-bold text-white">Create Tasks</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                       <h4 class="font-weight-bolder"> Account Balance: $5000 </h4>
                        @include('partials.errors')
                        <form action="{{ route('tasks.store') }}" method="post">
                            @csrf
                            <div class="row">
                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-header">Shipping Details</div>
                                      <div class="card-body">
                                          <div class="form-group">
                                              <label for="shipment_date" class="col-form-label text-md-end">{{ __('Shipping Date') }}</label>

                                              <input id="shipment_date" type="date" class="form-control @error('shipment_date') is-invalid @enderror" name="shipment_date" value="{{ old('shipment_date') }}" required autocomplete="shipment_date" autofocus>
                                              @error('shipment_date')
                                              <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                              @enderror
                                          </div>

                                          <div class="form-group">
                                              <label for="shipment_status" class="col-form-label text-md-end">{{ __('Shipment status') }}</label>

                                              <input id="shipment_status" type="text" class="form-control @error('shipment_status') is-invalid @enderror" name="shipment_status" value="{{ old('shipment_status') }}" required autocomplete="shipment_status" autofocus>
                                              @error('shipment_status')
                                              <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                              @enderror
                                          </div>

                                          <div class="form-group">
                                              <label for="origin_address" class="ol-form-label text-md-end">{{ __('Origin Address') }}</label>

                                              <textarea name="origin_address" id="origin_address" class="form-control @error('origin_address') is-invalid @enderror"  value="{{ old('origin_address') }}" required autocomplete="origin_address" autofocus cols="5" rows="3"></textarea>
                                              @error('origin_address')
                                              <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                              @enderror
                                          </div>

                                          <div class="form-group">
                                              <label for="destination_address" class="col-form-label text-md-end">{{ __('Destination Address') }}</label>

                                              <textarea name="destination_address" id="destination_address" class="form-control @error('destination_address') is-invalid @enderror"  value="{{ old('destination_address') }}" required autocomplete="destination_address" autofocus cols="5" rows="3"></textarea>
                                              @error('destination_address')
                                              <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                              @enderror
                                          </div>
                                      </div>
                                  </div>
                              </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">Depot</div>
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="driver_id" class="col-form-label text-md-end">{{ __('Select Driver') }}</label>
                                                <select name="driver_id" id="driver_id" class="form-control @error('driver_id') is-invalid @enderror"  value="{{ old('driver_id') }}">
                                                    @foreach($drivers as $driver)
                                                        <option value="">Select Driver</option>
                                                        <option value=" {{ $driver->id }}"> {{ $driver->name }}</option>
                                                    @endforeach

                                                </select>
                                                @error('driver_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="depot" class="col-form-label text-md-end">{{ __('Select Depot') }}</label>
                                                <select name="depot" id="depot" class="form-control @error('depot') is-invalid @enderror"  value="{{ old('depot') }}">
                                                    <option value="Larger">Larger</option>
                                                    <option value="Super">Super</option>
                                                    <option value="Chibuku">Chibuku</option>
                                                </select>
                                                @error('depot')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="customer_names" class="col-md-4 col-form-label text-md-end">{{ __('Customer Names') }}</label>
                                                <input id="customer_names" type="text" class="form-control @error('customer_names') is-invalid @enderror" name="customer_names" value="{{ old('customer_names') }}" required autocomplete="customer_names" autofocus>
                                                @error('customer_names')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="customer_phone" class="col-form-label text-md-end">{{ __('Customer Phone') }}</label>
                                                <input id="customer_phone" type="text" class="form-control @error('customer_phone') is-invalid @enderror" name="customer_phone" value="{{ old('customer_name') }}" required autocomplete="customer_phone" autofocus>
                                                @error('customer_phone')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



   <script>
       flatpickr('#shipment_date', {
           enableTime:true
       })
   </script>

@endsection
