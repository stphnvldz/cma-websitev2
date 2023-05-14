@extends('layouts.tenant-master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  @section('content')

  <div class="d-flex justify-content-center mt-2 mx-auto p-2">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Input Payment</label>
</div>

<form action="/payment-add" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                <input type="hidden" name="tenant_bills_id" id="id" value="{{ $data->id }}">

                <div class="mb-4">
                    <label for="inputPayment4" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" readonly value="{{ $data->fullname }}">
                </div>

                <div class="mb-4">
                    <label for="inputPayment4" class="form-label">Stall Number</label>
                    <input type="text" name="stallnumber" class="form-control" id="stallnumber" readonly value="{{ $data->selectedStallTextbox }}">
                </div>

                <div class="mb-4">
                    <label for="inputPayment4" class="form-label">Contact Number</label>
                    <input type="text" name="contact" class="form-control" id="contact" readonly value="{{ $data->contact }}">
                </div>

                <div class="mb-4">
                    <label for="inputPayment4" class="form-label">Rental Fee Type</label>
                    <input type="text" name="type" class="form-control" id="type" readonly value="{{ $data->payment }}">
                </div>

            </div>

            <div class="col-md-6">
                <div class="mb-4">
                    <label for="inputPayment4" class="form-label">Amount</label>
                    <input type="text" name="amount" class="form-control" id="amount" readonly value="{{ $data->amount }}">
                </div>

                <div class="mb-2">
                    <label for="inputPayment4" class="form-label">Date From</label>
                    <input type="text" name="datefrom" class="form-control" id="datefrom" readonly value="{{ $data->date_from }}">
                </div>

                <div class="mb-2">
                    <label for="inputPayment4" class="form-label">Date To</label>
                    <input type="text" name="dateto" class="form-control" id="dateto" readonly value="{{ $data->date_to }}">
                </div>
            </div>
        </div>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-6">
              <div class="form-group text-center">
                <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Mode of Payment</label>
              </div>
            </div>
          </div>
        
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8">
              <div class="form-group text-center">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="payment" id="gcashRadio" value="gcash">
                  <label class="form-check-label" for="gcashRadio"> Gcash</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="payment" id="codPaymentRadio" value="cash">
                  <label class="form-check-label" for="codPaymentRadio">Cash</label>
                </div>
              </div>
            </div>
          </div>
        
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8">
              <div class="form-group text-center">
                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-primary me-3" id="confirm-btn">Confirm</button>
                  <button type="button" class="btn btn-primary">Clear</button>
                </div>
              </div>
            </div>
          </div>
        </div>

<div class="modal fade" id="gcash-modal" tabindex="-1" aria-labelledby="gcash-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="gcash-modal">Gcash Payment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-sm-10 col-md-8">
            <div class="mb-3 text-center">
              <div class="row justify-content-center">
                <img src="/assets/img/cmaqr.jpg" alt="" class="img-fluid" style="max-width: 200px; height: auto;">
              </div>
              <p>09123456789</p>
              <h5>CMA TREASURY</h5>
            </div>
            <div class="mb-3">
              <label for="refnumber" class="col-form-label">Type the reference no.</label>
              <input type="text" name="refnumber" class="form-control" id="refnumber" required>
            </div>
            <div class="mb-3">
              <label for="image" class="col-form-label">Upload Screenshot of Payment</label>
              <input class="form-control" name="image" type="file" id="image" style="height: 38px;">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="codPayment-modal" tabindex="-1" aria-labelledby="codPayment-modal" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="codPayment-modal-h1">Cash Payment</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8">
          <div class="mb-3 text-center">
            <h5>Please visit the cashier in CMA Treasury office.</h5>
            <h6>Godbless!</h6>
            <input class="form-control" name="image" type="hidden" id="image" value="cash">
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Confirm</button>
    </div>
  </div>
</div>
</div>
</form>

      <!-- Script to show the appropriate modal dialog based on the selected radio button -->
      <script>
        $(document).ready(function() {
          $("#confirm-btn").click(function() {
            if ($("#gcashRadio").is(":checked")) {
              $("#gcash-modal").modal("show");
            } else if ($("#codPaymentRadio").is(":checked")) {
              $("#codPayment-modal").modal("show");
              $("#refnumber").val('cash')
            }
          });
        });
      </script>

<script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection
