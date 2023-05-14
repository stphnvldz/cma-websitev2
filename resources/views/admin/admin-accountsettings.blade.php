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

<div class="container">
    <div class="row justify-content-center p-3">
      <div class="col-lg-6">
        <h1 class="text-center">Admin Account</h1>
        <div class="mb-3">
          <label for="inputName4" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{ $admin->name }}" readonly>
        </div>
        <div class="mb-3">
          <label for="inputBirthday4" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" id="email" value="{{ $admin->email }}" readonly>
        </div>
        <div class="mb-3">
          <label for="inputAddress" class="form-label">Password</label>
          <input type="text" name="password" class="form-control" id="password" value="{{ $admin->password }}" readonly>
        </div>
      </div>
    </div>
    <form method="POST" action="/admin-pass" enctype="multipart/form-data">
      @csrf
      <div class="row justify-content-center p-3">
        <div class="col-lg-6">
          <div class="mb-3">
            <label for="" class="form-label">New Password</label>
            <input type="password" name="password" class="form-control" id="password" value="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" id="password" value="">
          </div>
          <div class="text-center">
            <button type="store" class="btn btn-success" id="save">Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection