@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@section('content')

{{--<div class="d-flex justify-content-end">
    <form class="d-flex" role="search">
        <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#Select">Select Tenant</button>
        <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#Add" data-bs-whatever="@Add">Add New Tenant</button>
    </form>
</div>

{{--modal for selecting tenant
<div class="modal fade" id="Select" tabindex="-1" aria-labelledby="Select" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Select">SELECT TENANT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-hover mt-2">
          <thead>
              <tr>
                  <th scope="col">Full Name</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Email Address</th>
                  <th scope="col"><input type="text" id="search" name="search" style="width: 300px" placeholder="Search"></th>
              </tr>
          </thead>
          <tbody>
            {{--@if(isset($tenants))
              @foreach ($tenants as $tenant)
                <tr>
                    <td>{{ $tenant->fullname }}</td>
                    <td>{{ $tenant->contact }}</td>
                    <td>{{ $tenant->emailadd }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Tenant Actions">
                            <a href="/select?id={{ $tenant->id }}" type="button" class="btn btn-primary">Select</a>
                        </div>
                    </td>
                </tr>
              @endforeach
            @endif--}}
          {{--</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{--modal for add new tenant
<div class="modal fade" id="Add" tabindex="-1" aria-labelledby="Add" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Add">ADD NEW TENANT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="/tenantadd" method="post" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
            <div class="d-flex justify-content-center row">
              <div class="col-6">
                <div class="mb-3 row">
                  <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
                  <div class="col-sm-9">
                    <input type="fullname" name="fullname"class="form-control" id="fullname" placeholder="Please input your fullname">
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
                    <input type="address" name="address" class="form-control" id="address" style="height: 100px;" placeholder="Please input your complete address">
                </div>
                <div class="mb-3 row">
                  <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Contact No.</label>
                  <div class="col-sm-9">
                    <input type="contact" name="contact" class="form-control" id="contact" placeholder="Please input your contact number">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Email Address</label>
                  <div class="col-sm-9">
                    <input type="emailadd" name="emailadd" class="form-control" id="emailadd" placeholder="example@example.com">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="formFile" class="col-sm-3 col-form-label align-self-center">Upload Photo</label>
                  <div class="col-sm-9 d-flex align-items-center"> 
                    <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="store" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>


{{--textbox for fullname adn contact. dito mapupunta yung na select na tenant sa modal
<div class="mb-3 mt-5 mx-2 row">
    <div class="col-sm-6">
      <input type="hidden" name="id" id="id" {{--value="{{ isset($data->id) ? $data->id : '' }}"--}}
        {{--<label for="inputName4" class="col-form-label align-self-center">Full Name</label>
        <input type="fullname" name="fullname" class="form-control" id="fullname" placeholder="" readonly>
    </div>
    <div class="col-sm-6">
        <label for="inputName4" class="col-form-label align-self-center">Contact Number</label>
        <input type="contact" name="contact" class="form-control" id="contact" placeholder="" readonly>
    </div>
</div>--}}

{{--<div class="d-flex justify-content-center row p-5">
    <div class="container px-4 text-center mt-2 ml-2 " style="height:300px;width:5000px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">--}}
        

            <div class="d-flex justify-content-center row p-3">
              <div class="col-6">
                <div class="mb-3 row">
                  <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="fullnamet"class="form-control" id="fullnamet" placeholder="Enter full name">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputBirthday4" class="col-sm-3 col-form-label align-self-center">Date of Birth</label>
                  <div class="col-sm-9">
                    <input type="text" name="dateofbirtht" class="form-control" id="dateofbirtht" placeholder="MM/DD/YYYY">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Address</label>
                  <div class="col-sm-9">
                    <input type="text" name="addresst" class="form-control" id="addresst" style="height: 100px;" placeholder="Enter complete address">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Contact No.</label>
                  <div class="col-sm-9">
                    <input type="text" name="contactt" class="form-control" id="contactt" placeholder="Enter contact number">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Email Address</label>
                  <div class="col-sm-9">
                    <input type="text" name="emailaddt" class="form-control" id="emailaddt" placeholder="example@example.com">
                  </div>
                </div>
                {{--<div class="mb-3 row">
                  <label for="formFile" class="col-sm-3 col-form-label align-self-center">Upload Photo</label>
                  <div class="col-sm-9 d-flex align-items-center"> 
                    <input class="d-flex justify-content-center form-control" name="imaget" type="file" id="imaget" style="height: 38px;">
                  </div>
                </div>--}}
              </div>
              <div class="col-6">
                <div class="mb-3 row">
                  <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Stall Type</label>
                  <div class="col-sm-9">
                      <select id="stalltypet" name="stalltypet" class="form-select">
                          <option selected>Choose...</option>
                          <option>Regular</option>
                          <option>Temporary</option>
                      </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Stall Name</label>
                  <div class="col-sm-9">
                      <input type="text" name="stallnamet" class="form-control" id="stallnamet">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Type of Payment</label>
                  <div class="col-sm-9">
                      <select id="paymentt" name="paymentt" class="form-select">
                          <option selected>Choose...</option>
                          <option value="Daily">Daily</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Amount of Stall</label>
                    <div class="col-sm-9">
                        <input type="text" name="amountt" class="form-control" id="amountt">
                    </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Floor No.</label>
                  <div class="col-sm-9">
                    <select id="floorNumberDropdown" name="floornumber" class="form-select">
                      <option value="">Select Floor Number</option>
                      @if(isset($floors))
                          @foreach($floors as $floor)
                              <option value="{{ $floor->id }}">{{ $floor->floornumber }}</option>
                          @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Stall No.</label>
                  <div class="col-sm-9">
                    <select id="stallNumberDropdown" name="stallnumber" class="form-select">
                      <option value="">Select Stall Number</option>
                    </select>
                  </div>
                </div>
                <div class ="text-center col-12 md-2 mt-2 mx-4">
                    <button type="button" class="btn btn-primary" name="selectButton" id="selectButton" style="font-size: 16px; padding: 10px 30px;">Select</button>
                </div>
                <div class="mb-3 mt-3 row">
                  <label for="inputName" class="col-sm-3 col-form-label align-self-center">Selected Stall</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="selectedStallTextboxt" id="selectedStallTextboxt" readonly>
                  </div>
                </div>
                <div class="mb-3 mt-3 row">
                  <label for="inputName" class="col-sm-3 col-form-label align-self-center">Total Amount of Stall</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="totalamountt" id="totalamountt" readonly>
                  </div>
                </div>
              </div>
            </div>
          


    {{--</div>
</div>--}}

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#process"  style="font-size: 16px; padding: 10px 30px;">Process</button>
</div>
<div class="modal fade" id="process" tabindex="-1" aria-labelledby="process" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Rent Stall Process</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/rentadd" method="post" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
        <div id="modalBody"></div>
        <div class="row">
          <div class="mb-3 row">
              <p1>Please upload a photo and check if details are correct.</p1>
          </div>
          <div class="col-6">
              {{--<div class ="mb-3 row">
                <img src="" id="image" style="max-width: 100%; max-height: 200px;"/>
              </div>--}}
              <div class="mb-3 row">
                  <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
                  <div class="col-sm-9">
                      <input type="text" name="fullname"class="form-control" id="fullname" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputBirthday4" class="col-sm-3 col-form-label align-self-center">Date of Birth</label>
                  <div class="col-sm-9">
                      <input type="text" name="dateofbirth" class="form-control" id="dateofbirth" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Address</label>
                  <div class="col-sm-9">
                      <input type="text" name="address" class="form-control" id="address" style="height: 100px;" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Contact No.</label>
                  <div class="col-sm-9">
                      <input type="text" name="contact" class="form-control" id="contact" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Email Address</label>
                  <div class="col-sm-9">
                      <input type="text" name="emailadd" class="form-control" id="emailadd" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="formFile" class="col-sm-3 col-form-label align-self-center">Upload a Photo</label>
                  <div class="col-sm-9 d-flex align-items-center"> 
                      <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px;">
                      {{--<img src="" id="image" style="max-width: 100%; max-height: 200px;"/><br><br>--}}
                  </div>
              </div>
          </div>
          <div class="col 6">
              <div class="mb-3 row">
                  <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Stall Type</label>
                  <div class="col-sm-9">
                      <input type="text" name="stalltype" class="form-control" id="stalltype" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Stall Name</label>
                  <div class="col-sm-9">
                      <input type="text" name="stallname" class="form-control" id="stallname" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Type of Payment</label>
                  <div class="col-sm-9">
                      <input type="text" name="payment" class="form-control" id="payment" readonly>
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Amount of Stall</label>
                  <div class="col-sm-9">
                      <input type="text" name="amount" class="form-control" id="amount" readonly>
                  </div>
              </div>
              <div class="mb-3 mt-3 row">
                  <label for="inputName" class="col-sm-3 col-form-label align-self-center">Selected Stall</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="selectedStallTextbox" id="selectedStallTextbox" readonly>
                  </div>
              </div>
              <div class="mb-3 mt-3 row">
                  <label for="inputName" class="col-sm-3 col-form-label align-self-center">Total Amount of Stall</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="totalamount" id="totalamount" readonly>
                  </div>
              </div>
          </div>
        </div>
        {{--<div class="d-flex justify-content-center row">
          <div class="mb-3 row">
            <p1>Please check if details are correct.</p1>
          </div>
          <div class="mb-3 row">
            <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
            <div class="col-sm-9">
              <input type="fullname" name="fullname"class="form-control" id="fullname" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputBirthday4" class="col-sm-3 col-form-label align-self-center">Contact</label>
            <div class="col-sm-9">
              <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth"readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Stall Type</label>
            <div class="col-sm-9">
              <input type="address" name="address" class="form-control" id="address" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Stall Name</label>
            <div class="col-sm-9">
              <input type="contact" name="contact" class="form-control" id="contact"readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Type of Payment</label>
            <div class="col-sm-9">
              <input type="emailadd" name="emailadd" class="form-control" id="emailadd" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Amount of Stall</label>
            <div class="col-sm-9">
              <input type="emailadd" name="emailadd" class="form-control" id="emailadd"readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Selected Stall</label>
            <div class="col-sm-9">
              <input type="emailadd" name="emailadd" class="form-control" id="emailadd"readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputEmail4" class="col-sm-3 col-form-label align-self-center">Total Amount of Stall</label>
            <div class="col-sm-9">
              <input type="emailadd" name="emailadd" class="form-control" id="emailadd"readonly>
            </div>
          </div>
        </div>--}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="store" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#process').on('shown.bs.modal', function () {
      var fullname = $('#fullnamet').val();
      var dateofbirth = $('#dateofbirtht').val();
      var address = $('#addresst').val();
      var contact = $('#contactt').val();
      var emailadd = $('#emailaddt').val();
      //var image = $('#imaget').val();
      //var image = $("#imaget").prop('files')[0];
      var stalltype = $('#stalltypet').val();
      var stallname = $('#stallnamet').val();
      var payment = $('#paymentt').val();
      var amount = $('#amountt').val();
      var selectedStallTextbox = $('#selectedStallTextboxt').val();
      var totalamount = $('#totalamountt').val();
      $('#fullname').val(fullname)
      $('#dateofbirth').val(dateofbirth);
      $('#address').val(address);
      $('#contact').val(contact);
      $('#emailadd').val(emailadd);
      //$('#image').val(image);
      //$("#image").prop('files', image)
      $('#stalltype').val(stalltype);
      $('#stallname').val(stallname);
      $('#payment').val(payment);
      $('#amount').val(amount);
      $('#selectedStallTextbox').val(selectedStallTextbox);
      $('#totalamount').val(totalamount);

    })

      //Display selected image in modal
      //$("#imaget").change(function () {
      //  var file = this.files[0];
      //  var reader = new FileReader();
      //  reader.onload = function (e) {
      //      $("#image").attr("src", e.target.result);
      //  }
      //  reader.readAsDataURL(file);
      //});
  });
</script>
        
        {{--jQuery code to display the data in the modal
        <script>
          $(document).ready(function() {
              // Fetch tenants data via AJAX
              $.get('/show-tenant', function(data) {
                  // Populate table with tenants data
                  $.each(data, function(index, tenant) {
                    var row = $('<tr>');
                    row.append('<td>' + tenant.fullname + '</td>');
                    row.append('<td>' + tenant.contact + '</td>');
                    row.append('<td>' + tenant.emailadd + '</td>');
                    var selectButton = $('<button type="button" class="btn btn-primary select-tenant">Select</button>');
                    selectButton.attr('data-tenant-id', tenant.id); // Add data-tenant-id attribute
                    row.append($('<td>').append(selectButton));
                    $('#Select tbody').append(row);
                  });
      
                  // Search filter for the table
                  $('#search').on('keyup', function() {
                      var value = $(this).val().toLowerCase();
                      $('#Select tbody tr').filter(function() {
                          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                      });
                  });

                  // Handle click events on "Select" buttons
                  $('.select-tenant').on('click', function() {
                    var tenantId = $(this).data('tenant-id');
                    var fullname = $(this).closest('tr').find('td:nth-child(1)').text();
                    var contact = $(this).closest('tr').find('td:nth-child(2)').text();
                    $('#fullname').val(fullname);
                    $('#contact').val(contact);
                    $('#Select').modal('hide');
                  });
              });
          });
        </script>--}}

        {{--floor number and stall numebr--}}
        <script>
          
          // Get the total amount of stall textbox element
          var totalAmountTextbox = document.getElementById('totalamountt');

        // Get the floor number dropdown element
            var floorNumberDropdown = document.getElementById('floorNumberDropdown');

            // Get the stall number dropdown element
            var stallNumberDropdown = document.getElementById('stallNumberDropdown');

            // Get the "Select" button element
            var selectButton = document.getElementById('selectButton');

            // Get the selected stall number(s) textbox element
            var selectedStallTextbox = document.getElementById('selectedStallTextboxt');

             // Get the total amount of stall textbox element
            var totalAmount = document.getElementById('amountt');

            @if(isset($stallNumbers))
            // Create an object to store the stall numbers for each floor
            var stallNumbers = {!! json_encode($stallNumbers) !!};

            // Add an event listener to the floor number dropdown
            floorNumberDropdown.addEventListener('change', function() {
                // Clear the stall number dropdown options
                stallNumberDropdown.innerHTML = '<option value="">Select Stall Number</option>';

                // Get the selected floor number value
                var floorNumberId = this.value;
                
                // Check if stallNumbers variable is set
                
                    // Get the stall numbers for the selected floor number from the stallNumbers object
                    var floorStallNumbers = stallNumbers[floorNumberId];

                    // Loop through the retrieved stall numbers and add them as options in the stall number dropdown
                    if (floorStallNumbers) {
                        floorStallNumbers.forEach(function(stallNumber) {
                            var option = document.createElement('option');
                            option.value = stallNumber;
                            option.text = stallNumber;
                            stallNumberDropdown.add(option);
                        });
                    }
                @endif
            });

            
            // Create an array to store the selected stall numbers
            var selectedStallNumbers = [];

            // Create an array to store the selected stall numbers
            var selectedStallNumbers = [];

            // Add an event listener to the select button
            selectButton.addEventListener('click', function() {
                // Get the selected stall number value
                var stallNumberValue = stallNumberDropdown.value;

                // Check if the selected stall number value is not already in the selectedStallNumbers array
                if (!selectedStallNumbers.includes(stallNumberValue)) {
                    // Add the selected stall number value to the selectedStallNumbers array
                    selectedStallNumbers.push(stallNumberValue);

                    // Check if the length of selectedStallNumbers array is less than or equal to 2
                    if (selectedStallNumbers.length > 2) {
                        alert('You can only select a maximum of two stalls.');
                        // Disable the floor number dropdown and stall number dropdown
                        floorNumberDropdown.disabled = true;
                        stallNumberDropdown.disabled = true;
                        return;
                    } else {
                        // Update the selected stall number textbox value
                        selectedStallTextbox.value = selectedStallNumbers.join(', ');
                        
                        // Calculate the total amount based on the number of selected stalls and the selected payment option
                        totalAmountTextbox.value = amount.value  * selectedStallNumbers.length;
                        }
                }
            });
        </script>

        {{--type of payment
        <script>
            const paymentSelect = document.querySelector('#paymentt');
            const amount = document.querySelector('#amountt');
            
            paymentSelect.addEventListener('change', (event) => {
            const paymentOption = event.target.value;
            const tenant = {
                Daily: 400,
                Monthly: 1500,
            };

            amount.value = tenant[paymentOption];
            });
        </script>--}}
  
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