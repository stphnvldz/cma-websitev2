@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST OF TENANTS</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @section('content')
    <div class="d-flex justify-content-end">
        <form class="d-flex" role="search">
            <input type="text" class="mt-2 mx-2" id="search" name="search" style="width: 400px; height: 40px;" placeholder="Search">
            <button class="btn btn-outline-success me-2 mt-2" type="submit">Sort</button>
        </form>
    </div>

    <table class="table table-hover table-striped" id="rentstall">
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
    <div class="modal fade" id="billModal" tabindex="-1" aria-labelledby="billModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="cash-modal">Bill Tenant</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-center row">
                <div class="mb-3 row text-center">
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="fullname" class="form-control" id="fullname"  readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact" class="form-control" id="contact"readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Email</label>
                      <div class="col-sm-9">
                          <input type="text" name="email" class="form-control" id="email"readonly>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Total Amount</label>
                        <div class="col-sm-9">
                            <input type="text" name="amount" class="form-control" id="amount"readonly>
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Notice</label>
                        <div class="col-sm-9">
                          <input type="text" name="notice" class="form-control" id="notice">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Description</label>
                        <div class="col-sm-9">
                          <input type="text" name="description" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="date" class="form-control" id="date">
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </div>
      </div>

</body>
</html>
@endsection