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
        <img src="{{ asset('/storage/images/'.$data->image)}}" alt="Image" class="photo2b2 mt-5 mb-3">
        <input class="text-center form-control" name="image" type="file" id="image" style="height: 38px; width: 20rem;" disabled>
      </div>
      <div class="mb-3 mt-2 row">
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
          <input type="address" name="address" class="form-control" id="address" value="{{ $data->address }}" disabled>
        </div>
      </div>
    </div>
    <div class="col-6">
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
        <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Tenant Type</label>
        <div class="col-sm-9">
            <input type="text" name="stalltype" class="form-control" id="stalltype" value="{{ $data->stalltype }}" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Stall Name</label>
        <div class="col-sm-9">
            <input type="text" name="stallname" class="form-control" id="stallname" value="{{ $data->stallname }}" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Rental Fee Type</label>
        <div class="col-sm-9">
            <input type="text" name="payment" class="form-control" id="payment" value="{{ $data->payment }}" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Stall Fee</label>
        <div class="col-sm-9">
            <input type="text" name="amount" class="form-control" id="amount" value="{{ $data->amount }}" disabled>
        </div>
    </div>
    <div class="mb-3 mt-3 row">
        <label for="inputName" class="col-sm-3 col-form-label align-self-center">Selected Stall</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="selectedStallTextbox" id="selectedStallTextbox"value="{{ $data->selectedStallTextbox }}" disabled>
        </div>
    </div>
    <div class="mb-3 mt-3 row">
        <label for="inputName" class="col-sm-3 col-form-label align-self-center">Total Stall Fee</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="totalamount" id="totalamount" value="{{ $data->totalamount }}" disabled>
        </div>
    </div>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <div class="text-center mx-2">
      <button type="button" class="btn btn-primary" id="edit">Edit Information</button>
    </div>
    <div class="text-center mx-2">
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
    var stalltypeInput = document.getElementById("stalltype");
    var stallnameInput = document.getElementById("stallname");
    var paymentInput = document.getElementById("payment");
    var amountInput = document.getElementById("amount");
    var selectedInput = document.getElementById("selectedStallTextbox");
    var totalamountInput = document.getElementById("totalamount");
    var imageInput = document.getElementById("image");
    var saveButton = document.getElementById("save");
    // Add an event listener to the edit button
    editButton.addEventListener("click", function() {
      // Enable the input fields
      fullnameInput.removeAttribute("disabled");
      dateofbirthInput.removeAttribute("disabled");
      addressInput.removeAttribute("disabled");
      contactInput.removeAttribute("disabled");
      emailaddInput.removeAttribute("disabled");
      stalltypeInput.removeAttribute("disabled");
      stallnameInput.removeAttribute("disabled");
      paymentInput.removeAttribute("disabled");
      amountInput.removeAttribute("disabled");
      selectedInput.removeAttribute("disabled");
      totalamountInput.removeAttribute("disabled");
      imageInput.removeAttribute("disabled");
      saveButton.removeAttribute("disabled");
    });
    </script>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection