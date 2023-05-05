@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST OF TENANTS</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
    @section('content')
    <div class="d-flex justify-content-end">
        <form class="d-flex" role="search">
            <input type="text" class="mt-2 mx-2" id="search" name="search" style="width: 400px; height: 40px;" placeholder="Search">
            <button class="btn btn-outline-success me-2 mt-2" type="submit">Sort</button>
        </form>
    </div>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
            </tr>
        </thead>
        <tbody>
        @if(isset($rent))
            @foreach($rent as $rents)
            <tr>
                <td>{{ $rents->fullname }}</td>
                <td>{{ $rents->contact }}</td>
                <td>{{ $rents->emailadd }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Tenant Actions">
                        <button id="unaccountedButton-{{ $rents->id }}" type="button" class="btn btn-primary unaccounted-button">Unaccounted</button>
                        <a href="/viewtenant?id={{ $rents->id }}" type="button" class="btn btn-secondary">View</a>
                        <a href="/archivetenant?id={{ $rents->id }}" data-row-id="{{ $rents->id }}" type="button" class="btn btn-danger archive-button">Archive</a>
                        <button type="button" class="btn btn-success bill-button" data-bs-toggle="modal" data-bs-target="#billModal" data-row-id="{{ $rents->id }}">Bill</button>
                    </div>
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</body>
</html>
@endsection