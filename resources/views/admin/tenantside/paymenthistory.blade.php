@extends('layouts.tenant-master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment History</title>
</head>
<body>
    @section('content')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Stall Number</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Rental Fee Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Date From</th>
                <th scope="col">Date To</th>
                <th scope="col">Mode of Payment</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($payment))
            @foreach($payment as $payments)
            <tr>
                <td>{{ $payments->stallnumber }}</td>
                <td>{{ $payments->contact }}</td>
                <td>{{ $payments->type }}</td>
                <td>{{ $payments->amount }}</td>
                <td>{{ $payments->datefrom }}</td>
                <td>{{ $payments->dateto }}</td>
                <td>{{ $payments->payment }}</td>
                <td>{{ $payments->status }}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</body>
</html>
@endsection