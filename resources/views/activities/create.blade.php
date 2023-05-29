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
                        <h6 class="m-0 font-weight-bold text-white">Create Activities</h6>
                        <div class="justify-content-end">
                            <a href="{{ route('activities.index') }}" class="btn btn-success btn-sm justify-content-end"  data-bs-toggle="modal" data-bs-target="#drivers"> Back</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')

                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
