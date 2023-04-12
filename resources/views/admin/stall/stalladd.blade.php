@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stall Add</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@section('content')

<form action="/stalladd" method="post">
  @csrf
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-sm" role="alert">
      {{ session('success') }}
        <button type="button" class="close bg-transparent border-0" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="text-success">&times;</span>
        </button>
    </div>
  @endif
  {{--<input type="hidden" name="floor_id" id="floor_id" value="{{ $floors->id }}">--}}
  <div class="d-flex justify-content-center row p-5">
    <div class="container px-4 text-center mt-2 mx-5" style="height:300px;width:1000px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
      <div class="d-flex justify-content-center row p-3 mt-5">
        <div class="col-6">
          <div class="mb-3 row">
            <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Floor</label>
            <div class="col-sm-9">
              <select id="floornumber" name="floornumber" class="form-select">
                <option value="">Choose Floor</option>
                @foreach($floors as $id => $floornumber)
                  <option value="{{ $floornumber }}">{{ $floornumber }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputStallNumber" class="col-sm-3 col-form-label align-self-center">Stall Number</label>
            <div class="col-sm-9">
                <input type="stallnumber" name="stallnumber" class="form-control" id="stallnumber" placeholder="floor#(1)-stall#(001)">
            </div>
          </div>
        </div>
        <div class ="text-center col-12 md-2 mt-2 mx-4">
          <button type="store" class="btn btn-primary" style="font-size: 16px; padding: 10px 20px;">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
    {{--selected floor value to calculate the new stall number
    <script>
      const floorSelect = document.querySelector('#floornumber');
      const stallNumberInput = document.querySelector('#stallnumber');
      const newStallNumber = '{{ $newStallNumber }}';

    floorSelect.addEventListener('change', () => {
        const floor = floorSelect.value;
        const newStall = `${newStallNumber}-${floor}`;
        stallNumberInput.value = newStall.padStart(5, '0');
    });
    </script>--}}
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

@endsection