@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found</title>
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
{{--@if(isset($lostfound))
<input type="hidden" name="id" value="{{ $lostfound->id }}">
  <div class="row p-5">
    <div class="text-center col-6">
      <div class="d-flex flex-column align-items-center">
        <img src="/public/img/{{ $data->image }}" alt="Image" class="photo2b2 mt-5 mb-3">
        <input class="text-center form-control" name="image" type="file" id="image" style="height: 38px; width: 20rem;" disabled>
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3 row">
        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Item</label>
        <div class="col-sm-9">
          <input type="itemName" name="itemName" class="form-control" id="itemName" disabled value="{{ $lostfound->itemName }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputBirthday" class="col-sm-3 col-form-label align-self-center">Date of Lost</label>
        <div class="col-sm-9">
          <input type="dateoflost" name="dateoflost" class="form-control" id="dateoflost" disabled value="{{ $lostfound->dateoflost }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Description</label>
        <div class="col-sm-9">
          <input type="description" name="description" class="form-control" id="description" style="height: 100px;"  value="{{ $lostfounf->description }}" disabled>
        </div>
      </div>
      @endif--}}

      <form action="/lostfound/update" method="post" enctype="multipart/form-data">
        @csrf
          <input type="hidden" name="id" value="{{ $data->id }}">
          <div class="row p-5">
            <div class="col-6">
              <div class="d-flex flex-column align-items-center">
                <img src="/public/img/{{ $data->image }}" alt="Image" class="photo2b2 mt-5 mb-3">
                <input class="text-center form-control" name="image" type="file" id="image" style="height: 38px; width: 20rem;" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputName4" class="col-sm-4 col-form-label align-self-center">Item Name</label>
                <div class="col-sm-10">
                  <input type="text" name="itemname" class="form-control" id="itemName" style="width: 560px" disabled value="{{ $data->itemname }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputDateoflost" class="col-sm-4 col-form-label align-self-center">Date of Lost</label>
                <div class="col-sm-10">
                  <input type="dateoflost" name="dateoflost" class="form-control" id="dateoflost" style="width: 560px" disabled value="{{ $data->dateoflost }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputDescription" class="col-sm-4 col-form-label align-self-center">Description</label>
                <div class="col-sm-10">
                  <input type="description" name="description" class="form-control" id="description" style="width: 560px" value="{{ $data->description }}" disabled>
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-10">
                  <select id="status" name="status" class="form-select"disabled>
                    <option>Status</option>
                    <option>Lost</option>
                    <option>Found</option>
                  </select>
                </div>
              </div>
              </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <div class="text-center md-2 mx-2">
                <button type="button" class="btn btn-primary" id="edit">Edit Information</button>
              </div>
              <div class="text-center md-2 mx-2">
                <button type="submit" name="save" id="saveB" class="btn btn-primary"disabled>Save</button>
              </div>
            </div>
          </div>
        </form>

          <script>
            // Get the edit button element
            var editButton = document.getElementById("edit");
                    
            // Get the input elements
            var itemInput = document.getElementById("itemName");
            var imageInput = document.getElementById("image");
            var dateoflostInput = document.getElementById("dateoflost");
            var descriptionInput = document.getElementById("description");
            var statusOption = document.getElementById("status");
            var saveButton = document.getElementById("saveB");
            // Add an event listener to the edit button
            editButton.addEventListener("click", function() {
              // Enable the input fields
              imageInput.removeAttribute("disabled");
              itemInput.removeAttribute("disabled");
              dateoflostInput.removeAttribute("disabled");
              descriptionInput.removeAttribute("disabled");
              statusOption.removeAttribute("disabled");
              saveButton.removeAttribute("disabled");
            });
            </script>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection