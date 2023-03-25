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
    <div class="d-flex justify-content-center row p-5">
        <div class="container px-4 text-center mt-2 mx-5 mb-1" style="height:300px;width:1050px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
          <div class="d-flex justify-content-center row p-3 mt-5">
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputFloorNumber" class="col-sm-3 col-form-label align-self-center">Floor Number</label>
                <div class="col-sm-9 mb-2">
                    <input type="floornumber" name="floornumber" class="form-control" id="floornumber">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputFloorDes" class="col-sm-3 col-form-label align-self-center">Description</label>
                <div class="col-sm-9">
                    <input type="floordes" name="floordes" class="form-control" id="floordes">
                </div>
              </div>
            </div>
            <div class ="text-center col-12 md-2 mt-2 mx-4">
              <button type="submit" class="btn btn-primary" style="font-size: 16px; padding: 10px 30px;">Save</button>
            </div>
          </div>
        </div>
    </div>
</form>


<script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection

