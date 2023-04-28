@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @section('content')
    <div class="container px-4 mt-4" style="font-size: 20px; float: left; margin-right: 20px; margin-left: 200px; width:800px;height:480px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
    <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Carousel Image</label>
    <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px; width: 550px;">
    <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px; width: 550px;  margin-top: 20px;">
    <input class="d-flex justify-content-center form-control" name="image" type="file" id="image" style="height: 38px; width: 550px;  margin-top: 20px;">
    <button type="button" class="btn btn-primary" style="position: absolute; top: 50px; right: 80px; margin-right: 200px; margin-top: 20px;">Update</button>
    </div>


     <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection