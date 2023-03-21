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

    <style type="text/css">
      .photo2b2{
        max-width: 200px;
        min-height: 200px;
        object-fit:cover;
        border-radius: 10px;
      }
    
    </style>
</head>
<body>
@section('content')

<form action="/tenant/update" method="post" enctype="multipart/form-data">
@csrf

  <input type="hidden" name="id" value="{{ $data->id }}">
  <div class="row p-5">
    <div class="text-center col-6">
      <div class="d-flex flex-column align-items-center">
        <img src="/public/img/{{ $data->image }}" alt="Image" class="photo2b2 mt-5 mb-3">
        <input class="text-center form-control" name="image" type="file" id="image" style="height: 38px; width: 20rem;">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3 row">
        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
        <div class="col-sm-9">
          <input type="fullname" name="fullname" class="form-control" id="fullname" disabled value="{{ $data->fullname }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputBirthday" class="col-sm-3 col-form-label align-self-center">Date of Birth</label>
        <div class="col-sm-9">
          <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth" disabled value="{{ $data->dateofbirth }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Address</label>
        <div class="col-sm-9">
          <input type="address" name="address" class="form-control" id="address" style="height: 100px;"  value="{{ $data->address }}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Contact No.</label>
        <div class="col-sm-9">
          <input type="contact" name="contact" id="contact" class="form-control" value="{{ $data->contact }}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Email Address</label>
        <div class="col-sm-9">
          <input type="emailadd" name="emailadd" id="emailadd" class="form-control" value="{{ $data->emailadd }}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="stallnum" class="col-sm-3 col-form-label align-self-center">Stall Number</label>
        <div class="col-sm-9">
          <input type="text" name="stallnum" class="form-control" id="stallnum" value="{{ $data->stallnum }}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="stallname" class="col-sm-3 col-form-label align-self-center">Stall Name</label>
        <div class="col-sm-9">
          <input id="stallname" name="stallname" class="form-control" value="{{ $data->stallname }}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="stalltype" class="col-sm-3 col-form-label align-self-center">Stall Type</label>
        <div class="col-sm-9">
          <select id="stalltype" name="stalltype" class="form-control" disabled>
            <option value="Regular" {{ $data->stalltype == 'Regular' ? 'selected' : '' }}>Regular</option>
            <option value="Temporary" {{ $data->stalltype == 'Temporary' ? 'selected' : '' }}>Temporary</option>
        </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="payment" class="col-sm-3 col-form-label align-self-center">Choice of Payment</label>
        <div class="col-sm-9 d-flex align-items-center">
          <input id="payment" name="payment" class="form-control" value="{{ $data->payment }}" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="stallprice" class="col-sm-3 col-form-label align-self-center">Stall Price</label>
        <div class="col-sm-9">
          <input id="stallprice" name="stallprice" class="form-control" value="{{ $data->stallprice }}" readonly>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <div class="text-center md-2 mx-2">
      <button type="button" class="btn btn-primary" id="edit">Edit Information</button>
    </div>
    <div class="text-center md-2 mx-2">
      <button type="submit" id="save"class="btn btn-primary"disabled>Save</button>
    </div>
  </div>
</form>
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
    var saveButton = document.getElementById("save");
    // Add an event listener to the edit button
    editButton.addEventListener("click", function() {
      // Enable the input fields
      fullnameInput.removeAttribute("disabled");
      dateofbirthInput.removeAttribute("disabled");
      addressInput.removeAttribute("disabled");
      contactInput.removeAttribute("disabled");
      emailaddInput.removeAttribute("disabled");
      stallnumInput.removeAttribute("disabled");
      stallnameInput.removeAttribute("disabled");
      stalltypeInput.removeAttribute("disabled");
      saveButton.removeAttribute("disabled");
    });
    </script>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection