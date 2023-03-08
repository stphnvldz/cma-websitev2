@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TENANTS</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>

    @section('content')
<div class="d-flex justify-content-center mt-2 mx-auto">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TENANT PROFILING</label>
</div>

  <div class ="d-flex justify-content-center row">
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputName4" class="form-label">Full Name</label>
      <input type="fullname" name="fullname"class="form-control" id="fullname" readonly>
    </div>
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputBirthday4" class="form-label">Date of Birth</label>
      <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth" readonly>
    </div>
    <div class="col-6 mt-2 mx-3">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="address" name="address" class="form-control" id="address" style="height: 100px;" readonly>
    </div>
  </div>


  <div class ="d-flex justify-content-center row">
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputcontact4" class="form-label">Contact No.</label>
      <input type="contact" name="contact" class="form-control" id="contact" readonly>
    </div>
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputEmail4" class="form-label">Email Address</label>
      <input type="emailadd" name="emailadd" class="form-control" id="emailadd" readonly>
    </div>
  </div>  
  

  <div class ="d-flex justify-content-center row">
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputstallnumt4" class="form-label">Stall Number</label>
      <input type="stallnum" name="stallnum" class="form-control" id="stallnum" readonly>
    </div>
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputstallname4" class="form-label">Stall Name</label>
      <input type="stallname" name="stallname" class="form-control" id="stallname" readonly>
    </div>
  </div>
  
  <div class ="d-flex justify-content-center row">
    <div class="col-md-2 mt-4 mx-4">
        <label for="inputstallprice" class="form-label">Stall Type</label>
        <input type="text" name="stallprice" class="form-control" id="stallprice" readonly>
      </div>
    <div class="col-md-2 mt-4 mx-4">
        <label for="inputstallprice" class="form-label">Choice of Payment</label>
        <input type="text" name="stallprice" class="form-control" id="stallprice" readonly>
      </div>
    <div class="col-md-2 mt-4 mx-4">
      <label for="inputstallprice" class="form-label">Stall Price</label>
      <input type="text" name="stallprice" class="form-control" id="stallprice" readonly>
    </div>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection