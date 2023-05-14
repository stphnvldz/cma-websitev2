@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Reports</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="extensions/print/bootstrap-table-print.js"></script>

</head>
<body>
    @section('content')

    <div class="d-flex justify-content-end mt-2 mx-2">
        <input type="text" class="mx-2 col" id="search" name="search" placeholder="Search">
        <a class="printPage mt-3" href="#">Print</a>
    </div>
    
<<<<<<< HEAD
<div class="payment-table">
    <table class="table table-hover table-striped" id="rentstall">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Rental Fee Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Date From</th>
                <th scope="col">Date To</th>
                <th scope="col">Mode of Payment</th>
                <th scope="col">Reference Number</th>
                <th scope="col">Status</th>
                <th scopre="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($payment))
            @foreach($payment as $payments)
            <tr>
                <td>{{$payments->id}}</td>
                <td>{{ $payments->fullname }}</td>
                <td>{{ $payments->stallnumber }}</td>
                <td>{{ $payments->type }}</td>
                <td>{{ $payments->amount }}</td>
                <td>{{ $payments->datefrom }}</td>
                <td>{{ $payments->dateto }}</td>
                <td>{{ $payments->payment }}</td>
                <td>{{ $payments->refnumber }}</td>
                <td>{{ $payments->status }}</td>
                <td><button type="button" class="btn btn-success view-button" data-bs-toggle="modal" data-bs-target="#viewModal" data-row-id="{{ $payments->id }}">View</button></td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>

=======
    <div class="payment-table">
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="printTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Stall Number</th>
                        <th scope="col">Rental Fee Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date From</th>
                        <th scope="col">Date To</th>
                        <th scope="col">Mode of Payment</th>
                        <th scope="col">Reference Number</th>
                        <th scope="col">Status</th>
                        <th scopre="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($payment))
                    @foreach($payment as $payments)
                    <tr>
                        <td>{{$payments->id}}</td>
                        <td>{{ $payments->fullname }}</td>
                        <td>{{ $payments->stallnumber }}</td>
                        <td>{{ $payments->type }}</td>
                        <td>{{ $payments->amount }}</td>
                        <td>{{ $payments->datefrom }}</td>
                        <td>{{ $payments->dateto }}</td>
                        <td>{{ $payments->payment }}</td>
                        <td>{{ $payments->refnumber }}</td>
                        <td>{{ $payments->status }}</td>
                        <td><button type="button" class="btn btn-success view-button" data-bs-toggle="modal" data-bs-target="#viewModal" data-row-id="{{ $payments->id }}">View</button></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
>>>>>>> 7dccb7daf8b35ef30aecabbf3c5a1eb75e5e8926
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="view-modal">View Tenant Payment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center row">
                        <div class="text-center col-6">
                            <div class="mb-3 row">
                                <img src="/public/img/{{--{{ $payment->image}}--}}" alt="Image" class="photo2b2 mt-5 mb-3">
                            </div>
                            <div class="mb-3 row">
                                <form action="/payment-status/update" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-sm-10">
                                        <select id="status" name="status" class="form-select">
                                            <option>Status</option>
                                            <option>Pending</option>
                                            <option>Paid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="store" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Search filter for the table
            $('#search').on('keyup', function() {
              var value = $(this).val().toLowerCase();
              $('#rentstall tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
        </script>

    <script>
    $('a.printPage').click(function(){
        window.print();
        return false;
        });
    </script>
    
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection