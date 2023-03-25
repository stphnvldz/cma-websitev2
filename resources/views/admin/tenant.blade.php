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
<div class="d-flex justify-content-center mt-2 mx-auto p-2">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TENANT PROFILING</label>
</div>

<form action="/tenant/add" method="post" enctype="multipart/form-data">
  @csrf

  <div class="d-flex justify-content-center row">
    <div class="col-6">
      <div class="mb-3 row">
        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
        <div class="col-sm-9">
          <input type="fullname" name="fullname"class="form-control" id="fullname" placeholder="Ethan D. Batumbakal">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputBirthday4" class="col-sm-3 col-form-label align-self-center">Date of Birth</label>
        <div class="col-sm-9">
          <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="MM/DD/YYYY">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Address</label>
        <div class="col-sm-9">
          <input type="address" name="address" class="form-control" id="address" style="height: 100px;" placeholder="123 BTSTXTENHASVT Street">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Contact No.</label>
        <div class="col-sm-9">
          <input type="contact" name="contact" class="form-control" id="contact" placeholder="09123456789">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Email Address</label>
        <div class="col-sm-9">
          <input type="emailadd" name="emailadd" class="form-control" id="emailadd" placeholder="example@example.com">
        </div>
      </div>
      {{--<div class="mb-3 row">
        <label for="stallnum" class="col-sm-3 col-form-label align-self-center">Stall Number</label>
        <div class="col-sm-9">
          <input type="text" name="stallnum" class="form-control" id="stallnum" readonly value="{{ request('selectedStalls')}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputstallname4" class="col-sm-3 col-form-label align-self-center">Stall Name</label>
        <div class="col-sm-9">  
          <input type="stallname" name="stallname" class="form-control" id="stallname" placeholder="Babuyan ni Ethan">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputstalltype" class="col-sm-3 col-form-label align-self-center">Stall Type</label>
        <div class="col-sm-9"> 
          <select id="inputstalltype" name="stalltype" class="form-select">
            <option selected>Choose...</option>
            <option>Regular</option>
            <option>Temporary</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputpayment" class="col-sm-3 col-form-label align-self-center">Choice of Payment</label>
        <div class="col-sm-9 d-flex align-items-center"> 
          <select id="inputpayment" name="payment" class="form-select">
            <option selected>Choose...</option>
            <option value="Daily">Daily</option>
            <option value="Monthly">Monthly</option>
          </select>
        </div>
    </div>
    <div class="mb-3 row">
      <label for="inputstallprice" class="col-sm-3 col-form-label align-self-center">Stall Price</label>
      <div class="col-sm-9"> 
        <input type="text" name="stallprice" class="form-control" id="stallprice" readonly>
      </div>
    </div>--}}
    <div class="mb-3 row">
      <label for="formFile" class="col-sm-3 col-form-label align-self-center">Upload Photo Here</label>
      <div class="col-sm-9 d-flex align-items-center"> 
        <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px;">
      </div>
    </div>

    <div class ="text-center col-12 md-2 mt-2 mx-4">
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
          Daily: 400,
          Monthly: 1500,
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
