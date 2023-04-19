@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Announcement</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>

<body>
@section('content')

<div class="container px-4 mt-4" style="font-size: 20px; float: left; margin-right: 20px; margin-left: 200px; width:800px;height:455px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
    <p style="font-weight: bold; ">Create your Announcement</p>

    <label for="inputEventname" class="col-sm-3 col-form-label align-self-center"></label>
    <p style="font-size: 15px; font-weight: bold;">Event Name</p>
    <div class="col-sm-9">
      <input type="description" name="description" class="form-control" id="description" placeholder="Please input Event Name">
    </div>
    <label for="inputDescription" class="col-sm-3 col-form-label align-self-center"></label>
    <p style="font-size: 15px; font-weight: bold;">Description</p>
        <div class="col-sm-9">
        <input type="event" name="event" class="form-control" id="event" style="height: 100px;" placeholder="Please input Event Description">
        </div>

    <div style="position: relative;">
  <button type="button" class="btn btn-primary" style="position: absolute; top: 50px; right: 80px;">Add Announcement</button>
  <button type="button" class="btn btn-secondary" style="position: absolute; top: 50px; right: 0;">Cancel</button>
</div>
</div>



    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

@endsection