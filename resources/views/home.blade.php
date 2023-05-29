@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header bg-secondary text-white">{{ __('User Profile') }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="col">User#</th>
                            <td> 00{{ Auth::user()->id }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Name</th>
                            <td> {{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Email</th>
                            <td> {{ Auth::user()->email }}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-secondary" href="/profile">Dashboard</a>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
