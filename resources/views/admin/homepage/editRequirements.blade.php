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
<form action="reqadd" method="post">
@csrf
    <div class="container px-4 mt-4" style="font-size: 20px; float: left; margin-right: 20px; margin-left: 200px; width:800px;height:480px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
        <p style="font-weight: bold; ">Update List of Requirement</p>
    
        <label for="inputDescription" class="col-sm-3 col-form-label align-self-center"></label>
        <p style="font-size: 15px; font-weight: bold;">Requirements</p>
            <div class="col-sm-9">
                <input type="requirement" name="requirements" class="form-control" id="requirements" style="height: 100px;" placeholder="Please input Requirements">
            </div>
            <label for="inputDescription" class="col-sm-3 col-form-label align-self-center"></label>
            <p style="font-size: 15px; font-weight: bold;">Notes</p>
                <div class="col-sm-9">
                    <input type="event" name="notes" class="form-control" id="notes" style="height: 100px;" placeholder="">
                </div>
    
        <div style="position: relative;">
            <button type="store" class="btn btn-primary" style="position: absolute; top: 50px; right: 80px;">Upload</button>
            <button type="button" class="btn btn-secondary" style="position: absolute; top: 50px; right: 0;">Cancel</button>
        </div>
    </div>
</form>
    

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection