@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill Reports</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="extensions/print/bootstrap-table-print.js"></script>

</head>
<body>
    @section('content')

<div class="d-flex justify-content-end">
    <input type="text" class="mt-2 mx-2" id="search" name="search" style="width: 400px; height: 40px;"placeholder="Search">
    <button type="button" class="btn btn-outline-success me-2 mt-2" style="height: 40px;" type="submit">Sort</button>
</div>
<div class="payment-table">
    <table class="table table-hover table-striped" id="printTable">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Type of Payment</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scopr="col"><a class="printPage" href="#">Print</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bill as $bills)
                    <tr>
                        <td>{{ $bills->fullname }}</td>
                        <td>{{ $bills->selectedStallTextbox }}</td>
                        <td>{{ $bills->payment }}</td>
                        <td>{{ $bills->amount }}</td>
                        <td>{{ DateTime::createFromFormat('Y-m-d', $bills->date_from)->format('d M Y') . ' to ' . DateTime::createFromFormat('Y-m-d', $bills->date_to)->format('d M Y')  }}</td>
                        <td>{{ $bills->status == 1 ? 'Paid' : 'Unpaid'}}</td>
                        <td><div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/paid_process?id={{$bills->id}}">Paid</a></li>
                                <li><a class="dropdown-item" href="/unpaid_process?id={{$bills->id}}">Unpaid</a></li>
                            </ul>
                          </div>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
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