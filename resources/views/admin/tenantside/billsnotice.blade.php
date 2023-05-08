@extends('layouts.tenant-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bills Notice</title>
</head>
<body>
    @section('content')

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Amount</th>
                <th scope="col">Notice</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->amount }}</td>
                        <td>{{ $result->notice }}</td>
                        <td>{{ $result->description }}</td>
                        <td>{{ DateTime::createFromFormat('Y-m-d', $result->date_from)->format('M Y') . ' to ' . DateTime::createFromFormat('Y-m-d', $result->date_to)->format('M Y')  }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection
