@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archives</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
    @section('content')
    
    <table class="table table-hover table-striped" id="archives">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
            </tr>
        </thead>
        <tbody>
            {{--<script>
                let archivedTenants = {!! json_encode($archivedTenants) !!};

                for (let i = 0; i < archivedTenants.length; i++) {
                    let tenant = archivedTenants[i];
                    let row = '<tr>';
                    row += '<td>' + tenant.fullname + '</td>';
                    row += '<td>' + tenant.contact + '</td>';
                    row += '<td>' + tenant.emailadd + '</td>';
                    row += '</tr>';
                    $('#archives tbody').append(row);
                }
            </script>--}}
        </tbody>
    </table>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection