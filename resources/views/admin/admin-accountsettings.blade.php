@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
@section('content')

    <div class="d-flex justify-content-center row p-3">
        <h1>Admin Account</h1>
        <div class="col-6">
            <div class="mb-3 row">
                <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Name</label>
                <div class="col-sm-9">
                <input type="text" name="name"class="form-control" id="name" value="{{ $admin->name }}"readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputBirthday4" class="col-sm-3 col-form-label align-self-center">Email</label>
                <div class="col-sm-9">
                <input type="text" name="email" class="form-control" id="email" value="{{ $admin->email }}"readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAddress" class="col-sm-3 col-form-label align-self-center">Password</label>
                <div class="col-sm-9">
                    <input type="text" name="password" class="form-control" id="password" value="{{ $admin->password }}" readonly>
                </div>
            </div>
        </div>
    </div>
<form method="POST" action="/admin-pass" enctype="multipart/form-data">
@csrf
    <div class="d-flex justify-content-center row p-3">
        <div class="col-6">
            <div class="mb-3 row">
                <label for="" class="col-sm-3 col-form-label align-self-center">New Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="password" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-3 col-form-label align-self-center">Confirm Password</label>
                <div class="col-sm-9">
                    <input type="password" name="confirmPassword" class="form-control" id="password" value="" >
                </div>
            </div>
            <div class ="text-center col-12 md-2 mt-2 mx-4">
                <button type="store" class="btn btn-success" id="save">Save</button>
            </div>
        </div>
    </div>
</form>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection