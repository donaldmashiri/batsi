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
                        <h6 class="m-0 font-weight-bold text-white">Create Activities</h6>
                        <div class="justify-content-end">
                            <a href="" class="btn btn-success btn-sm justify-content-end"  data-bs-toggle="modal" data-bs-target="#import">Import Excel File</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">

                        @include('partials.errors')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="step1-tab" data-toggle="pill" href="#step1" role="tab" aria-controls="step1" aria-selected="true">Shipment</a>
                                    <a class="nav-link" id="step2-tab" data-toggle="pill" href="#step2" role="tab" aria-controls="step2" aria-selected="false">Product</a>
                                    <a class="nav-link" id="step3-tab" data-toggle="pill" href="#step3" role="tab" aria-controls="step3" aria-selected="false">Driver</a>
                                    <a class="nav-link" id="step3-tab" data-toggle="pill" href="#step4" role="tab" aria-controls="step4" aria-selected="false">Customer</a>
                                </div>
                            </div>
                            <div class="col-md-9 border border-left-info">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active mt-1" id="step1" role="tabpanel" aria-labelledby="step1-tab">
                                        <h1>Shipment Details</h1>
                                        <div>
                                                <div class="row mb-3">
                                                    <label for="shipment_date" class="col-md-4 col-form-label text-md-end">{{ __('Shipping Date') }}</label>
                                                    <div class="col-md-6">
                                                        <input id="shipment_date" type="text" class="form-control @error('shipment_date') is-invalid @enderror" name="shipment_date" value="{{ old('shipment_date') }}" required autocomplete="shipment_date" autofocus>
                                                        @error('shipment_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="shipment_status" class="col-md-4 col-form-label text-md-end">{{ __('Shipment status') }}</label>
                                                    <div class="col-md-6">
                                                        <input id="shipment_status" type="text" class="form-control @error('shipment_status') is-invalid @enderror" name="shipment_status" value="{{ old('shipment_status') }}" required autocomplete="shipment_status" autofocus>
                                                        @error('shipment_status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="origin_address" class="col-md-4 col-form-label text-md-end">{{ __('Origin Address') }}</label>
                                                    <div class="col-md-6">
                                                        <textarea name="origin_address" id="origin_address" class="form-control @error('origin_address') is-invalid @enderror"  value="{{ old('origin_address') }}" required autocomplete="origin_address" autofocus cols="5" rows="3"></textarea>
                                                        @error('origin_address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="destination_address" class="col-md-4 col-form-label text-md-end">{{ __('Destination Address') }}</label>
                                                    <div class="col-md-6">
                                                        <textarea name="destination_address" id="destination_address" class="form-control @error('destination_address') is-invalid @enderror"  value="{{ old('destination_address') }}" required autocomplete="destination_address" autofocus cols="5" rows="3"></textarea>
                                                        @error('destination_address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

{{--                                               <div class="justify-content-end float-end">--}}
{{--                                                   <button class="btn btn-primary next-btn" data-toggle="pill" href="#step2">Next</button>--}}
{{--                                               </div>--}}
                                        </div>
                                    </div>

{{--                                    Products--}}
                                    <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
                                        <h4>Product Details</h4>
                                        <div>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <td>Masese</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Description</th>
                                                    <td>Masese traditional African beer was first brewed in Zimbabwe in 1962</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Date of Manufacturing</th>
                                                    <td>12/12/2023</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Expiring Date</th>
                                                    <td>12/12/2023</td>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>

                                    {{--                                    Products--}}

                                    <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
                                        <h4>Driver Picked</h4>
                                        <div>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">license#</th>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <td>Basti Chibuku</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Email</th>
                                                    <td>Masese traditional African beer was first brewed in Zimbabwe in 1962</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Address</th>
                                                    <td>Gweru</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Phone Number</th>
                                                    <td>123456</td>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>

                                    {{--                                    Products--}}

                                    <div class="tab-pane fade" id="step4" role="tabpanel" aria-labelledby="step4-tab">
                                        <h4>Customer</h4>
                                        <div>
                                            <div class="row mb-3">
                                                <label for="customer_name" class="col-md-4 col-form-label text-md-end">{{ __('Customer Names') }}</label>
                                                <div class="col-md-6">
                                                    <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}" required autocomplete="customer_name" autofocus>
                                                    @error('customer_name')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="customer_name" class="col-md-4 col-form-label text-md-end">{{ __('Customer Phone') }}</label>
                                                <div class="col-md-6">
                                                    <input id="customer_phone" type="number" class="form-control @error('customer_phone') is-invalid @enderror" name="customer_phone" value="{{ old('customer_name') }}" required autocomplete="customer_phone" autofocus>
                                                    @error('customer_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Submit') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <script>
                            // Add event listeners to the Next and Previous buttons
                            const nextBtns = document.querySelectorAll('.next-btn');
                            const prevBtns = document.querySelectorAll('.prev-btn');

                            nextBtns.forEach(btn => {
                                btn.addEventListener('click', () => {
                                    const activeLink = document.querySelector('.nav-pills .nav-link.active');
                                    const nextLink = activeLink.nextElementSibling;

                                    if (nextLink) {
                                        activeLink.classList.remove('active');
                                        nextLink.classList.add('active');
                                    }
                                });
                            });

                            prevBtns.forEach(btn => {
                                btn.addEventListener('click', () => {
                                    const activeLink = document.querySelector('.nav-pills .nav-link.active');
                                    const prevLink = activeLink.previousElementSibling;

                                    if (prevLink) {
                                        activeLink.classList.remove('active');
                                        prevLink.classList.add('active');
                                    }
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>

        </div>

    </div>



    <!-- Excel -->
    <div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Import Excel File</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('activities.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Upload Excel File</label>
                                    <input type="file" name="file" class="form-control" minlength="3" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection
