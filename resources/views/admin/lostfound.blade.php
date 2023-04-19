@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@section('content')
<div>
<button style="margin-left: 1040px;" type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#AddLost" data-bs-whatever="@AddLost">Add New Lost</button>
</div>
<div class="d-flex justify-content-center mt-2 mx-auto p-2">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">LOST AND FOUND</label>
</div>

<table class="table table-hover table-striped" style="margin-left: 20px">
  <thead>
      <tr>
          <th scope="col">Full Name</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Email Address</th>
      </tr>
  </thead>
</table>


{{--modal for Lost and found--}}
<div class="modal fade" id="AddLost" tabindex="-1" aria-labelledby="AddLost" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addLostmodal">ADD NEW LOST</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="/Lostadd" method="post" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
            <div class="d-flex justify-content-center row">
              <div class="col-6">
                <div class="mb-3 row">
                  <label for="inputItem" class="col-sm-3 col-form-label align-self-center">Item</label>
                  <div class="col-sm-9">
                    <input type="itemName" name="itemName"class="form-control" id="itemName" placeholder="Name of Item">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputLostDate" class="col-sm-3 col-form-label align-self-center">Date of Lost</label>
                  <div class="col-sm-9">
                    <input type="dateoflost" name="dateoflost" class="form-control" id="dateoflost" placeholder="MM/DD/YYYY">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputDescription" class="col-sm-3 col-form-label align-self-center">Description</label>
                  <div class="col-sm-9">
                    <input type="description" name="description" class="form-control" id="description" style="height: 100px;" placeholder="123 BTSTXTENHASVT Street">
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
      
      <script src="assets/js/bootstrap.js"></script>
  
  </body>
  </html>
  
  @endsection
  