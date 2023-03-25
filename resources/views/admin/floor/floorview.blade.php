@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Floor View</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
@section('content')
    <table class="table table-striped table-hover mt-2">
        <thead>
            <tr>
                <th scope="col">Floor Number</th>
                <th scope="col">Floor Description</th>
            </tr>
        </thead>
        <tbody>
            <script>
                // get the floor data from the server
                let floor = {!! json_encode($floor) !!};

                // loop through the floors and display the data in the table
                for (let i = 0; i < floor.length; i++) {
                    let floors = floor[i];
                    document.write('<tr>');
                    document.write('<td>' + floors.floornumber +'</td>');
                    document.write('<td>' + floors.floordes + '</td>');
                    document.write('</tr>');
                }
            </script>
        </tbody>
    </table>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection