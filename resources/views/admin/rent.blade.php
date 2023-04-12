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
        <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Select Tenant</button>
        <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Add New Tenant</button>
    </form>
</div>

{{--modal for selecting tenant
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addtenantmodal" >SELECT TENANT</h1>
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
                @if(isset($tenants))
                <script>
                  // get the tenant data from the server
                  let tenants = {!! json_encode($tenants) !!};
      
                  // loop through the tenants and display the data in the table
                  for (let i = 0; i < tenants.length; i++) {
                      let tenant = tenants[i];
                      document.write('<tr>');
                      document.write('<td>' + tenant.fullname +'</td>');
                      document.write('<td>' + tenant.contact + '</td>');
                      document.write('<td>' + tenant.emailadd + '</td>');
                      document.write('<td>');
                      document.write('<div class="btn-group" role="group" aria-label="Tenant Actions">');
                      document.write('<a href="/rent?id=' + tenant.id + '" class="btn btn-primary">Select</a>');
                      document.write('</td>');
                      document.write('</tr>');
                      //{{ route("viewTenantTable", ["id" => "' + tenant.id + '"]) }}
                  }
              </script>
              @endif
              </tbody>
          </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>--}}


{{--modal for add new tenant--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addtenantmodal">ADD NEW TENANT</h1>
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
</div>

{{--textbox for fullname adn contact. dito mapupunta yung na select na tenant sa modal--}}
<div class="mb-3 mt-5 mx-2 row">
    <div class="col-sm-6">
      <input type="hidden" name="id" id="id" {{--value="{{ isset($data->id) ? $data->id : '' }}"--}}>
        <label for="inputName4" class="col-form-label align-self-center">Full Name</label>
        <input type="fullname" name="fullname" class="form-control" id="fullname" placeholder="" readonly{{--value="{{ $data ? $data->fullname : '' }}"--}}>
    </div>
    <div class="col-sm-6">
        <label for="inputName4" class="col-form-label align-self-center">Contact Number</label>
        <input type="contact" name="contact" class="form-control" id="contact" placeholder="" readonly{{--value="{{ $data ? $data->contact : '' }}"--}}>
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
                <select id="inputpayment" name="payment" class="form-select">
                    <option selected>Choose...</option>
                    <option value="Daily">Daily</option>
                    <option value="Monthly">Monthly</option>
                  </select>
            </div>
            <label for="inputStallAmount" class="col-sm-2 col-form-label align-self-center">Amount of Stall</label>
            <div class="col-sm-3">
                <input type="amount" name="amount" class="form-control" id="amount" readonly>
            </div>
        </div>

        <div class="mb-3 mt-3 row">
            <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Floor No.</label>
            <div class="col-sm-3">
                <select id="floornumber" name="floornumber" class="form-select">
                    <option value="">Choose Floor</option>
                    @foreach($floors as $id => $floornumber)
                    <option value="{{ $floornumber }}">{{ $floornumber }}</option>
                  @endforeach
                  </select>
            </div>

            <label for="inputFloor" class="col-sm-2 col-form-label align-self-center">Stall No.</label>
            <div class="col-sm-3">
                <select id="stallnumber" name="stallnumber" class="form-select">
                  <option value="">Choose Stall</option>
                  {{--@foreach($stalls as $id => $stallnumber)
                    <option value="{{ $stallnumber }}">{{ $stallnumber }}</option>
                  @endforeach--}}
                </select>
            </div>
        </div>

            <div class ="text-center col-12 md-2 mt-2 mx-4">
                <button type="button" class="btn btn-primary" name="select" id="select-btn" style="font-size: 16px; padding: 10px 30px;">Select</button>
            </div>

            <div class="mb-3 mt-3 row">
                <div class="col-sm-3">
                  <label for="inputName" class="form-label">Selected Stall</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="selectedstall" id="selectedstall" readonly>
                </div>
              </div>
    </div>
</div>

<div class="d-flex justify-content-end">
    <button class="btn btn-primary me-2 mt-2 mx-auto" type="submit" href="/tenant"  style="font-size: 16px; padding: 10px 30px;">Process</button>
</div>

        {{--floor select and stall select
        <script>
        // Get the floornumber and stallnumber dropdowns
        var floornumberDropdown = document.getElementById('floornumber');
        var stallnumberDropdown = document.getElementById('stallnumber');
        
        // Add change event listener to floornumber dropdown
        floornumberDropdown.addEventListener('change', function() {
            // Clear the stallnumber dropdown
            stallnumberDropdown.innerHTML = '';
            
            // Get the selected floornumber value
            var floornumber = floornumberDropdown.value;
            
            // Generate stallnumber options based on the selected floornumber
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = 'Choose Stall';
            stallnumberDropdown.add(defaultOption);
            
            for (var i = 1; i <= 5; i++) {
                var option = document.createElement('option');
                var stallnumber = floornumber + '-' + ('00' + i).slice(-3);
                option.value = stallnumber;
                option.text = stallnumber;
                stallnumberDropdown.add(option);
                }
        });

        // Add click event listener to select button
        document.getElementById('select-btn').addEventListener('click', function() {
            // Get the selected stallnumber value
            var selectedStall = stallnumberDropdown.value;
            
            // Get the current value of the selected stall textbox
            var currentSelectedStall = document.getElementById('selectedstall').value;
            
            // Check if the selected stall is not already in the selected stall textbox
            if (selectedStall !== '' && currentSelectedStall.indexOf(selectedStall) === -1) {
                // Check if the number of selected stalls is less than 2
                if (currentSelectedStall.split(', ').length < 2) {
                    // Append the selected stall to the selected stall textbox
                    currentSelectedStall += (currentSelectedStall ? ', ' : '') + selectedStall;
                    
                    // Set the updated selected stall value to the selected stall textbox
                    document.getElementById('selectedstall').value = currentSelectedStall;
                } else {
                    // Show a message box with maximum stall limit reached
                    alert('Maximum of 2 stalls only');
                    
                    // Disable the floornumber and stallnumber dropdowns
                    floornumberDropdown.disabled = true;
                    stallnumberDropdown.disabled = true;
                }
            }
        });
        </script>--}}

        {{--type of payment--}}
        <script>
            const paymentSelect = document.querySelector('#inputpayment');
            const amount = document.querySelector('#amount');
            
            paymentSelect.addEventListener('change', (event) => {
            const paymentOption = event.target.value;
            const tenant = {
                Daily: 400,
                Monthly: 1500,
            };

            amount.value = tenant[paymentOption];
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