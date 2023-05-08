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
  <div class="row p-3">
      <div class="d-flex justify-content-center row">
          <div class="text-center col-6">
              <div class="mb-4 row">
                  <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Full Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="fullname" class="form-control" id="fullname">
                  </div>
              </div>
              <div class="mb-4 row">
                  <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Stall Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="stallnumber" class="form-control" id="stallnumber">
                  </div>
              </div>
              <div class="mb-4 row">
                  <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Contact Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="contact" class="form-control" id="contact">
                  </div>
              </div>
              <div class="mb-4 row">
                <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Type of Payment</label>
                <div class="col-sm-8">
                  <input type="text" name="type" class="form-control" id="type">
                </div>
              </div>
              <div class="mb-4 row">
                <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Amount</label>
                <div class="col-sm-8">
                  <input type="text" name="amount" class="form-control" id="amount">
                </div>
              </div>
              <div class="mb-2 row">
                  <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Date From</label>
                  <div class="col-sm-8">
                    <input type="date" name="datefrom" class="form-control" id="datefrom">
                  </div>
              </div>
              <div class="mb-2 row">
                <label for="inputPayment4" class="col-sm-4 col-form-label align-self-center">Date To</label>
                <div class="col-sm-8">
                  <input type="date" name="dateto" class="form-control" id="dateto">
                </div>
              </div>
          </div>
      </div>
  </div>
  <div class="d-flex justify-content-center">
      <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Mode of Payment</label>
  </div>

  <div class="d-flex justify-content-center">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="payment" id="gcashRadio" value="gcash">
        <label class="form-check-label" for="gcashRadio"> Gcash</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="payment" id="codPaymentRadio" value="cash">
        <label class="form-check-label" for="codPaymentRadio">Cash</label>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="col-12 md-2 mt-2 mx-4 mb-3 d-flex justify-content-center">
        {{--<button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#confirm">Confirm</button>--}}
        <button type="button" class="btn btn-primary me-3" id="confirm-btn">Confirm</button>
        <button type="button" class="btn btn-primary">Clear</button>
    </div>
  </div>

  <div class="modal fade" id="gcash-modal" tabindex="-1" aria-labelledby="gcash-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="gcash-modal">Gcash Payment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center row">
            <div class="mb-3 row text-center">
              <div class="d-flex justify-content-center row">
                <img src="/assets/img/cmaqr.jpg" alt="" style="width:200px;height:150px;">
              </div>
              <p2>09123456789</p2>
              <h5>CMA TREASURY</h5>
            </div>
            <div class="mb-3 row">
              <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Type the reference no.</label>
              <div class="col-sm-9">
                <input type="text" name="refnumber" class="form-control" id="refnumber"  required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Upload Screenshot of Payment</label>
              <div class="col-sm-9">
                <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px;">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="store" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="codPayment-modal" tabindex="-1" aria-labelledby="codPayment-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="codPayment-modal-h1">Cash Payment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center row">
            <div class="mb-3 row text-center">
              <h5>Please visit the cashier in CMA Treasury office.</h5>
              <h6>Godbless!</h6>
              <input class="d-flex justify-content-center form-control" name="image" type="hidden" id="image" value="cash">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="store" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="status" class="form-control" id="status" value="Pending">
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
