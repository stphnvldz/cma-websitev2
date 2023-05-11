@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requirements</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @section('content')
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#AddReq" data-bs-whatever="@AddReq">Add Requirements</button>
      </div>
      <div class="d-flex justify-content-center mt-2 mx-auto p-2">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ADD REQUIREMENTS</label>
      </div>
    <table class="table table-hover table-striped" style="margin-left: 0px">
        <thead>
            <tr>
                <th scope="col">Requirements</th>
                <th scope="col">Notes</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
      </table>

{{--modal for add requirements--}}
<div class="modal fade" id="AddReq" tabindex="-1" aria-labelledby="AddReqLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addLostmodal">ADD NEW LOST</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <form action="/reqadd" method="post">
          @csrf
            <div class="modal-body">
                <div class="d-flex justify-content-center row">
                    <div class="col-6 text-center">
                        <p style="font-weight: bold; ">Update List of Requirement</p>
                        <div class="mb-3 row">
                            <p style="font-size: 15px; font-weight: bold;">Requirements</p>
                            <div class="col-sm-9">
                                <input type="requirement" name="requirements" class="form-control" id="requirements" style="height: 100px; width: 550px" placeholder="Please input Requirements">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <p style="font-size: 15px; font-weight: bold;">Notes</p>
                            <div class="col-sm-9">
                                <input type="event" name="notes" class="form-control" id="notes" style="height: 100px;" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="store" class="btn btn-primary">Save</button>
            </div>
          </form>
      </div>
    </div>
  </div>
    

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection