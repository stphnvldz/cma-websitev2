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

</head>
<body>
    @section('content')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Date</th>
                <th scope="col">Mode of Payment</th>
                <th scope="col">Status</th>
                
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection