@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Archive Tenants</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @section('content')

        @if (Session::has('message'))
            <div class='p-3'>
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                <div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-striped" id="rentstall">
              <thead>
                <tr>
                  <th scope="col">Full Name</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Selected Stall Number</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($rent))
                    @foreach ($rent as $rents)
                        <tr>
                            <td>{{ $rents->fullname }}</td>
                            <td>{{ $rents->contact }}</td>
                            <td>{{ $rents->emailadd }}</td>
                            <td>{{$rents->selectedStallTextbox}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>


    </body>



    </html>
@endsection
