@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenant</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
@section('content')
<div class="d-flex justify-content-center mt-2 mx-auto">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TENANT</label>
</div>

    <div class ="d-flex justify-content-center row">
        <div class="col-md-3 mt-4 mx-4">
          <label for="inputName4" class="form-label">Full Name</label>
          <input type="fullname" name="fullname"class="form-control" id="fullname" readonly value="{{ $data->fullname }}">
        </div>

        <div class="col-md-3 mt-4 mx-4">
          <label for="inputBirthday4" class="form-label">Date of Birth</label>
          <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth"  value="{{ $data->dateofbirth }}" readonly>
        </div>

        <div class="col-6 mt-2 mx-3">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="address" name="address" class="form-control" id="address" style="height: 100px;" value="{{ $data->address }}" readonly>
        </div>
      </div>
    
      <div class ="d-flex justify-content-center row">
        <div class="col-md-3 mt-4 mx-4">
          <label for="inputcontact4" class="form-label">Contact No.</label>
          <input type="contact" name="contact" class="form-control" id="contact"  value="{{ $data->contact }}"readonly>
        </div>

        <div class="col-md-3 mt-4 mx-4">
          <label for="inputEmail4" class="form-label">Email Address</label>
          <input type="emailadd" name="emailadd" class="form-control" id="emailadd" value="{{ $data->emailadd }}" readonly>
        </div>
      </div>  
      
      <div class ="d-flex justify-content-center row">
        <div class="col-md-3 mt-4 mx-4">
          <label for="stallnum" class="form-label">Stall Number</label>
          <input type="text" name="stallnum" class="form-control" id="stallnum" value="{{ $data->stallnum }}" readonly>
        </div>

        <div class="col-md-3 mt-4 mx-4">
          <label for="inputstallname4" class="form-label">Stall Name</label>
          <input type="stallname" name="stallname" class="form-control" id="stallname" value="{{ $data->stallname }}" readonly>
        </div>
      </div>
      
      <div class ="d-flex justify-content-center row">
        <div class="col-md-2 mt-4 mx-4">
          <label for="inputstalltype" class="form-label">Stall Type</label>
          <input id="stalltype" name="stalltype" class="form-control" value="{{ $data->stalltype }}" readonly>
        </div>

        <div class="col-md-2 mt-4 ml-4">
          <label for="inputpayment" class="form-label">Choice of Payment</label>
          <input id="payment" name="payment" class="form-control" value="{{ $data->payment }}" readonly>
        </div>

        <div class="col-md-2 mt-4 mx-4">
          <label for="inputstallprice" class="form-label">Stall Price</label>
          <input type="text" id="stallprice" name="stallprice" class="form-control" id="stallprice" value="{{ $data->stallprice }}" readonly>
        </div>
    
        <div class="col-6 mt-4 mx-auto">
          <img src="data:image/jpeg;base64,{{ base64_encode($image) }}" alt="Image">
        {{--  <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px;">--}}
        </div>

        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" id="edit">Edit Information</a>
        </div>

        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary" id="save">Save</a>
        </div>

        <script>
            // Get the edit button element
            var editButton = document.getElementById("edit");
            
            // Get the input elements
            var fullnameInput = document.getElementById("fullname");
            var dateofbirthInput = document.getElementById("dateofbirth");
            var addressInput = document.getElementById("address");
            var contactInput = document.getElementById("contact");
            var emailaddInput = document.getElementById("emailadd");
            var stallnumInput = document.getElementById("stallnum");
            var stallnameInput = document.getElementById("stallname");
            var stalltypeInput = document.getElementById("stalltype");
            var paymentInput = document.getElementById("payment");
            // Add an event listener to the edit button
            editButton.addEventListener("click", function() {
            // Enable the input fields
            fullnameInput.removeAttribute("readonly");
            dateofbirthInput.removeAttribute("readonly");
            addressInput.removeAttribute("readonly");
            contactInput.removeAttribute("readonly");
            emailaddInput.removeAttribute("readonly");
            stallnumInput.removeAttribute("readonly");
            stallnameInput.removeAttribute("readonly");
            stalltypeInput.removeAttribute("readonly");
            paymentInput.removeAttribute("readonly");
            });
          </script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection