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

<div class="d-flex justify-content-end">
    <form class="d-flex" role="search">
        <input id="searchInput" class="form-control me-2 mt-2" style="width: 500px" type="search" placeholder="Search" aria-label="Search">
        <button id="searchButton" class="btn btn-outline-success me-2 mt-2" onclick="filterTable()" type="button">Search</button>
        <button class="btn btn-outline-success me-2 mt-2" type="submit" href="/tenant">Add New Tenant</button>
    </form>
</div>

<div class="mb-3 mt-5 mx-2 row">
    <div class="col-sm-6">
        <label for="inputName4" class="col-form-label align-self-center">Full Name</label>
        <input type="fullname" name="fullname" class="form-control" id="fullname" placeholder="">
    </div>
    <div class="col-sm-6">
        <label for="inputName4" class="col-form-label align-self-center">Contact Number</label>
        <input type="contact" name="contact" class="form-control" id="contact" placeholder="">
    </div>
</div>


<div class="d-flex justify-content-center row p-5">
    <div class="container px-4 text-center mt-2 ml-2 " style="height:300px;width:5000px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
        
        <div class="mb-3 mt-3 row">
            <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Stall Type</label>
            <div class="col-sm-3">
                <select id="stalltype" name="stalltype" class="form-select">
                    <option selected>Choose...</option>
                    <option>Regular</option>
                    <option>Temporary</option>
                </select>
            </div>
            <label for="inputStallAmount" class="col-sm-2 col-form-label align-self-center">Stall Name</label>
            <div class="col-sm-3">
                <input type="stallname" name="stallname" class="form-control" id="stallname">
            </div>
        </div>

        <div class="mb-3 mt-3 row">
            <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Type of Payment</label>
            <div class="col-sm-3">
                <select id="payment" name="payment" class="form-select">
                    <option selected>Choose...</option>
                    <option>Monthly</option>
                    <option>Daily</option>
                </select>
            </div>
            <label for="inputStallAmount" class="col-sm-2 col-form-label align-self-center">Amount of Stall</label>
            <div class="col-sm-3">
                <input type="amount" name="amount" class="form-control" id="amount">
            </div>
        </div>

        <div class="mb-3 mt-3 row">
            <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Floor No.</label>
            <div class="col-sm-3">
                <select id="floornumber" name="floornumber" class="form-select">
                </select>
            </div>

            <label for="inputFloor" class="col-sm-2 col-form-label align-self-center">Stall No.</label>
            <div class="col-sm-3">
                <select id="stallnumber" name="stallnumber" class="form-select">
                </select>
            </div>
        </div>

            <div class ="text-center col-12 md-2 mt-2 mx-4">
                <button type="store" class="btn btn-primary" style="font-size: 16px; padding: 10px 30px;">Select</button>
            </div>

            <div class="mb-3 mt-3 row">
                <div class="col-sm-3">
                  <label for="inputName" class="form-label">Selected Stall</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="selectedstall" id="selectedstall">
                </div>
              </div>
    </div>
</div>

<div class="d-flex justify-content-end">

    <button class="btn btn-primary me-2 mt-2 mx-auto" type="submit" href="/tenant"  style="font-size: 16px; padding: 10px 30px;">Process</button>
</div>

<script src="assets/js/bootstrap.js"></script>
</body>
</html>

@endsection