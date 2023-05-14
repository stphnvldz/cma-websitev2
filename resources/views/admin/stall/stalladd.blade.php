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
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <label for="inputFloor" class="form-label">Floor</label>
              <select id="floornumber" name="floornumber" class="form-select">
                <option value="">Choose Floor</option>
                @foreach($floors as $id => $floornumber)
                  <option value="{{ $floornumber }}">{{ $floornumber }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="inputStallNumber" class="form-label">Stall Number</label>
              <input type="text" name="stallnumber" class="form-control" id="stallnumber" placeholder="floor#(1)-stall#(001)">
            </div>
            <div class="text-center">
              <button type="store" class="btn btn-primary">Save</button>
            </div>
          </div>
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