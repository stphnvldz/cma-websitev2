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
    <div class="container">
        <div class="row justify-content-end">
          <div class="col-auto">
            <button type="button" class="btn btn-outline-success me-2 mt-2" data-bs-toggle="modal" data-bs-target="#AddReq" data-bs-whatever="@AddReq">Add Requirements</button>
          </div>
        </div>
        <div class="row justify-content-center mt-2">
          <div class="col-12 text-center">
            <label for="colFormLabelLg" class="col-form-label col-form-label-lg" style="font-weight: bold;">ADD REQUIREMENTS</label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="table-responsive">
              <table class="table table-hover table-striped" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">Requirements</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($req))
                  @foreach ($req as $reqs)
                  <tr>
                    <td>{{ $reqs->requirements }}</td>
                    <td>{{ $reqs->notes }}</td>
                    <td>
                      {{--<div class="btn-group" role="group" aria-label="Basic example">
                                      <a class="btn btn-success btn-sm dcc_edit" href="#" data-id="{{$reqs->id}}"
                                          data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>--}}
                      <form method="POST" action="{{ route('delete-row', $reqs->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash fa-xs"></i></button>
                      </form>
                      {{--</div>--}}
                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    {{--modal for add requirements--}}
    <div class="modal fade" id="AddReq" tabindex="-1" aria-labelledby="AddReqLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addLostmodal">Add Requirements</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/reqadd" method="post">
              @csrf
              <div class="modal-body">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                      <label for="inputName4" class="form-label" style="font-size: 20px; font-weight: bold;">Update List of Requirement</label>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                      <div class="mb-3">
                        <label for="requirements" class="form-label" style="font-size: 15px; font-weight: bold;">Requirements</label>
                        <input type="requirement" name="requirements" class="form-control" id="requirements" style="height: 100px;" placeholder="Please input Requirements">
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                      <div class="mb-3">
                        <label for="notes" class="form-label" style="font-size: 15px; font-weight: bold;">Notes</label>
                        <input type="event" name="notes" class="form-control" id="notes" style="height: 100px;" placeholder="">
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

    {{--modal for edit requirements
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLostmodal">Edit Requirements</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/reqedit" method="post" id="editform">
                @csrf
                    <div class="modal-body">
                        <div class="d-flex justify-content-center row">
                            <div class="col-6 text-center">
                                {{--<input type="hidden" name="id" class="form-control" id="id" value="{{ $data->id }}">--}}
                                {{--<label for="inputName4" class="col-sm-9 col-form-label align-self-center" style="font-size: 20px; font-weight: bold;">Update List of Requirement</label>
                                <div class="mb-3 mt-3 row text-center">
                                    <label for="inputName4" class="col-sm-9 col-form-label align-self-center" style="font-size: 15px; font-weight: bold;">Requirements</label>
                                    <div class="col-sm-9">
                                        <input type="requirement" name="requirements" class="form-control" id="requirements" style="height: 100px; width: 550px">
                                    </div>
                                </div>
                                <div class="mb-3 row text-center">
                                    <label for="inputName4" class="col-sm-9 col-form-label align-self-center" style="font-size: 15px; font-weight: bold;">Notes</label>
                                    <div class="col-sm-9">
                                        <input type="event" name="notes" class="form-control" id="notes" style="height: 100px; width: 550px" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="store" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>--}}

    
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection