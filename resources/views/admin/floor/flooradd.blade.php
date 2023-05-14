@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floor Add</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @section('content')

    <form action="/save-floor" method="post">
      @csrf
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show alert-sm" role="alert">
          {{ session('success') }}
          <button type="button" class="close bg-transparent border-0" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-success">&times;</span>
          </button>
        </div>
      @endif
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <label for="inputFloorNumber" class="form-label">Floor Number</label>
                  <input type="text" name="floornumber" class="form-control" id="floornumber">
                </div>
                <div class="mb-3">
                  <label for="inputFloorDes" class="form-label">Description</label>
                  <input type="text" name="floordes" class="form-control" id="floordes">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>


<script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection

