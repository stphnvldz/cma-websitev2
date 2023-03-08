@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Profiling</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@section('content')
<div class="d-flex justify-content-center mt-2 mx-auto">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TENANT PROFILING</label>
</div>

<form action="/tenant/add" method="post" enctype="multipart/form-data">
  @csrf
  <div class ="d-flex justify-content-center row">
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputName4" class="form-label">Full Name</label>
      <input type="fullname" name="fullname"class="form-control" id="fullname" placeholder="Ethan D. Batumbakal">
    </div>
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputBirthday4" class="form-label">Date of Birth</label>
      <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="MM/DD/YYYY">
    </div>
    <div class="col-6 mt-2 mx-3">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="address" name="address" class="form-control" id="address" placeholder="1234 Main St" style="height: 100px;">
    </div>
  </div>


  <div class ="d-flex justify-content-center row">
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputcontact4" class="form-label">Contact No.</label>
      <input type="contact" name="contact" class="form-control" id="contact" placeholder="09123456789">
    </div>
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputEmail4" class="form-label">Email Address</label>
      <input type="emailadd" name="emailadd" class="form-control" id="emailadd" placeholder="example@example.com">
    </div>
  </div>  
  

  <div class ="d-flex justify-content-center row">
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputstallnumt4" class="form-label">Stall Number</label>
      <input type="stallnum" name="stallnum" class="form-control" id="stallnum" placeholder="Please Type Stall Number">
    </div>
    <div class="col-md-3 mt-4 mx-4">
      <label for="inputstallname4" class="form-label">Stall Name</label>
      <input type="stallname" name="stallname" class="form-control" id="stallname" placeholder="Babuyan ni Ethan">
    </div>
  </div>
  
  <div class ="d-flex justify-content-center row">
    <div class="col-md-2 mt-4 mx-4">
      <label for="inputstalltype" class="form-label">Stall Type</label>
      <select id="inputstalltype" name="stalltype" class="form-select">
        <option selected>Choose...</option>
        <option>Regular</option>
        <option>Temporary</option>
      </select>
    </div>
    <div class="col-md-2 mt-4 ml-4">
      <label for="inputpayment" class="form-label">Choice of Payment</label>
      <select id="inputpayment" name="payment" class="form-select">
        <option value="" selected>Choose...</option>
        <option value="daily">Daily</option>
        <option value="monthly">Monthly</option>
      </select>
    </div>
    <div class="col-md-2 mt-4 mx-4">
      <label for="inputstallprice" class="form-label">Stall Price</label>
      <input type="text" name="stallprice" class="form-control" id="stallprice" readonly>
    </div>

    <div class="col-6 mt-4 mx-auto">
      <label for="formFile" class="form-label">Upload Photo Here</label>
      <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px;">
    </div>
    <div class ="text-center col-12 md-2 mt-4 mx-4">
      <button type="store" class="btn btn-primary">Submit</button>
    </div>
</form> 
    
{{--choice of payment tas mag bibigay ng value sa textbox ng stallprice--}}
    <script>
      const paymentSelect = document.querySelector('#inputpayment');
      const stallPriceInput = document.querySelector('#stallprice');
      
      paymentSelect.addEventListener('change', (event) => {
        const paymentOption = event.target.value;
        const tenant = {
          daily: 400,
          monthly: 1500,
        };

        stallPriceInput.value = tenant[paymentOption];
      });
    </script>

{{--pag upload ng image sa database--}}
  <script>
    function previewImage() {
      var preview = document.getElementById('preview');
      var image = document.querySelector('input[name=image]').files[0];
      var reader = new FileReader();
    
      reader.onloadend = function() {
        preview.src = reader.result;
        preview.style.display = 'block';
      }
    
      if (image) {
        reader.readAsDataURL(image);
      } else {
        preview.src = "";
        preview.style.display = 'none';
      }
    }
    </script>
    
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>

@endsection