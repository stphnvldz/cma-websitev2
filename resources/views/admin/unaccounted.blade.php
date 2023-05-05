@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unaccounted Tenants</title>
</head>
<body>
    @section('content')
    
    <table class="table table-hover table-striped" id="unaccountedTable">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection