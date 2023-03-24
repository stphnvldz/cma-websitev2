@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stall Add</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@section('content')


<div class="d-flex justify-content-center row p-5">
  <div class="container px-4 text-center mt-2 mx-5" style="height:300px;width:1000px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
    <div class="d-flex justify-content-center row p-4 mt-3">
      <div class="col-6">
        <div class="mb-3 row">
          <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Floor</label>
          <div class="col-sm-9">
            <select id="inputfloorNo" name="floorNo" class="form-select">
              <option selected>Choose...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputStallNumber" class="col-sm-3 col-form-label align-self-center">Stall Number</label>
          <div class="col-sm-9">
              <input type="stallnumber" name="stallnumber" class="form-control" id="stallnumber">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Stall Amount</label>
          <div class="col-sm-9">
              <input type="stallamount" name="stallamount" class="form-control" id="stallamount">
          </div>
        </div>
      </div>
      <div class ="text-center col-12 md-2 mt-2 mx-4">
        <button type="store" class="btn btn-primary" style="font-size: 16px; padding: 10px 30px;">Save</button>
      </div>
    </div>
  </div>
</div>

      
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

@endsection