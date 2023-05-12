@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Announcement</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
@section('content')

<div class="d-flex justify-content-end">
  <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#AddAnnouncement" data-bs-whatever="@AddAnnouncement">Add Announcement</button>
</div>
<div class="d-flex justify-content-center">
  <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Create Announcement</label>
</div>

<table class="table table-hover table-striped" style="margin-left: 0px" id="datatable">
  <thead>
      <tr>
          <th scope="col">Event</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
      @if(isset($ann))
          @foreach ($ann as $anns)
              <tr>
                  <td>{{ $anns->eventname }}</td>
                  <td>{{ $anns->description }}</td>
                  <td>
                    <form method="POST" action="{{ route('delete-ann', $anns->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash fa-xs"></i></button>
                    </form>
                  </td>
              </tr>
          @endforeach
      @endif
  </tbody>
</table>

{{--modal for add annoucement--}}
<div class="modal fade" id="AddAnnouncement" tabindex="-1" aria-labelledby="AddAnnouncementLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="addLostmodal">Add Announcement</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/announcementadd" method="post">
          @csrf
              <div class="modal-body">
                  <div class="d-flex justify-content-center row">
                      <div class="col-6 text-center">
                          <div class="mb-3 mt-3 row text-center">
                              <label for="inputName4" class="col-sm-9 col-form-label align-self-center" style="font-size: 15px; font-weight: bold;">Event Name</label>
                              <div class="col-sm-9">
                                  <input type="text" name="eventname" class="form-control" id="eventname" >
                              </div>
                          </div>
                          <div class="mb-3 row text-center">
                              <label for="inputName4" class="col-sm-9 col-form-label align-self-center" style="font-size: 15px; font-weight: bold;">Description</label>
                              <div class="col-sm-9">
                                  <input type="text" name="description" class="form-control" id="description">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>    
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="store" class="btn btn-primary">Upload</button>
              </div>
          </form>
      </div>
  </div>
</div>



    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

@endsection