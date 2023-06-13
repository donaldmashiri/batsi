@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
                <div id="print" class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div style="background-color: brown"
                         class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Delivery Note</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body bg-light">

                        <div class="card">
                            @foreach($tasks as $task)
                            <div class="card-header">Task 00{{$task->id}}</div>
                            <div class="card-body">
                               <div class="row">
                                   <div class="col-md-8">
                                       <table class="table table-bordered table-striped">
                                           <thead>
                                           <tr>
                                               <th>Customer Name : </th>
                                               <th>Customer Phone</th>
                                           </tr>
                                           <tr>

                                               <td>{{ $task->customer_names }}</td>
                                               <td>{{ $task->customer_phone }}</td>
                                           </tr>
                                           </thead>
                                       </table>
                                   </div>

                                   <div class="col-md-4">
                                       <table class="table table-bordered table-striped">
                                           <thead>
                                           <tr>
                                               <th>Destination Address : </th>
                                               <th>Drivers Name</th>
                                           </tr>
                                           <tr>

                                               <td>{{ $task->destination_address }}</td>
                                               <td class="font-weight-bolder text-info">{{ $task->user->name }}</td>
                                           </tr>
                                           </thead>
                                       </table>
                                   </div>

                                   <div class="col-md-6">
                                       <table class="table table-bordered table-striped">
                                           <thead>
                                           <tr>
                                               <th>Depot</th>
                                               <td>
                                                   <strong>{{$task->depot}} </strong>
                                                   @if($task->depot == "Super")
                                                       (Red Masese)
                                                   @elseif($task->depot == "Chibuku")
                                                       (Red Masese)
                                                   @else
                                                       (White Masese)
                                                   @endif
                                               </td>
                                           </tr>
                                           <tr>
                                               <th>Shipping Date</th>
                                               <td>{{ $task->shipment_date }}</td>
                                           </tr>
                                           <tr>
                                               <th>Origin Address</th>
                                               <td>{{ $task->origin_address }}</td>
                                           </tr>
                                           <tr>
                                               <th>Date Created</th>
                                               <td>{{ $task->created_at }}</td>
                                           </tr>
                                           </thead>
                                       </table>
                                   </div>



                                   <div class="col-md-6">
                                       @foreach ($task->activities as $activity)
                                           <table class="table table-bordered table-striped">
                                               <thead>
                                               <tr>
                                                   <th>Mass</th>
                                                   <td>{{ $activity->mass }}</td>
                                               </tr>
                                               <tr>
                                                   <th>Kilometers</th>
                                                   <td>{{ $activity->km }}</td>
                                               </tr>
                                               <tr>
                                                   <th>Cost</th>
                                                   <td>{{ $activity->cost }}</td>
                                               </tr>
                                               <tr>
                                                   <th>Status</th>
                                                   <td>{{ $activity->status }}</td>
                                               </tr>
                                               <tr>
                                                   <th>Time & Date of Delivery</th>
                                                   <td>{{ $task->updated_at }}</td>
                                               </tr>
                                               <tr>
                                                   <th>Company Contact Details</th>
                                                   <td>
                                                       <ul class="list-group">
                                                           <li class="list-group-item">WilShar Logistics</li>
                                                           <li class="list-group-item">info@wilshar.com</li>
                                                           <li class="list-group-item">07627172838</li>
                                                       </ul>
                                                   </td>
                                               </tr>

                                               </thead>
                                           </table>
                                       @endforeach
                                   </div>

                               </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="m-3">
                            <button type="submit" class="btn btn-danger float-right"><i class="fa fa-print"></i> Print</button>
                        </div>

                        <script>
                            // Get the print button element
                            var printButton = document.querySelector('.btn-danger');

                            // Add a click event listener to the print button
                            printButton.addEventListener('click', function() {
                                // Get the div element to print
                                var printDiv = document.getElementById('print');

                                // Create a new window for printing
                                var printWindow = window.open('', '_blank');

                                // Write the content of the printDiv to the new window
                                printWindow.document.write(printDiv.innerHTML);

                                // Close the document writing
                                printWindow.document.close();

                                // Trigger the print dialog for the new window
                                printWindow.print();
                            });

                        </script>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->


@endsection
