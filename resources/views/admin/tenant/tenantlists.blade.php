@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST OF TENANTS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @section('content')

        @if (Session::has('message'))
            <div class='p-3'>
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                <div>
        @endif
        

        <div class="d-flex justify-content-end">
            <form class="d-flex" role="search">
                <input type="text" class="mt-2 mx-2" id="search" name="search" style="width: 400px; height: 40px;"placeholder="Search">
            </form>
        </div>


        <table class="table table-hover table-striped" id="rentstall">
            <div class="d-flex justify-content-center text-center row p-3">
                <h3>List of Tenants</h3>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Actions</th>
                    <th scope="col"><button type="button" class="btn btn-outline-success bill-button bill-btn" data-bs-toggle="modal"data-bs-target="#AllBillModal">All Bills</button></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($rent))
                    @foreach ($rent as $rents)
                        <tr>
                            <td>{{ $rents-> id }}</td>
                            <td>{{ $rents->fullname }}</td>
                            <td>{{ $rents->contact }}</td>
                            <td>{{ $rents->emailadd }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Tenant Actions">
                                    {{--<button id="unaccountedButton-{{ $rents->id }}" type="button"
                                        class="btn btn-primary unaccounted-button">Unaccounted</button>--}}
                                    <a href="/viewtenant?id={{ $rents->id }}" type="button"
                                        class="btn btn-secondary">View</a>
                                        <form action="tenantlists/archive" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name='id' value="{{ $rents->id }}">
                                            <button type="submit" class="btn btn-danger archive-button">Archive</button>
                                        </form>

                                    <button type="button" class="btn btn-success bill-button bill-btn"
                                        data-bs-toggle="modal" data-bs-target="#billModal" data-row-id="{{ $rents->id }}"
                                        data-fullName="{{ $rents->fullname }}" data-contact="{{ $rents->contact }}"
                                        data-emailadd="{{ $rents->emailadd }}" data-payment="{{ $rents->payment }}"
                                        data-totalamount="{{ $rents->totalamount }}"
                                        data-rentstall_id="{{ $rents->id }}">Bill</button>

                                        {{--<button id="dropdownButton" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
      
                                        </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="modal fade" id="billModal" tabindex="-1" aria-labelledby="billModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
                <form action="/tenantlists/postbill" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="cash-modal">Bill Tenant</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-center row">
                                <div class="mb-3 row text-center">
                                    <div class="mb-3 row">
                                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fullname" class="form-control" id="fullname" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4"
                                            class="col-sm-3 col-form-label align-self-center">Contact</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contact" class="form-control" id="contact" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4"
                                            class="col-sm-3 col-form-label align-self-center">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" id="email" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Type of
                                            Payment</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="payment" class="form-control" id="payment" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Total
                                            Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="amount" class="form-control" id="amount" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4"
                                            class="col-sm-3 col-form-label align-self-center">Notice</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="notice" class="form-control" id="notice">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4"
                                            class="col-sm-3 col-form-label align-self-center">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" class="form-control" id="description">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPayment4" class="col-sm-3 col-form-label align-self-center">Date
                                            From</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="datefrom" class="form-control" id="datefrom">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPayment4" class="col-sm-3 col-form-label align-self-center">Date
                                            To</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="dateto" class="form-control" id="dateto">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="rentstall_id" class="form-control" id="rentstall_id" readonly>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>




        <div class="modal fade" id="AllBillModal" tabindex="-1" aria-labelledby="AllBillModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
                <form action="/tenantlists/postallbill" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="cash-modal">Bill All Tenant</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-center row">
                                <div class="mb-3 row text-center">
                                    <div class="mb-3 row">
                                        <label for="inputName4"
                                            class="col-sm-3 col-form-label align-self-center">Notice</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="notice" class="form-control" id="notice">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputName4"
                                            class="col-sm-3 col-form-label align-self-center">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" class="form-control" id="description">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPayment4" class="col-sm-3 col-form-label align-self-center">Date
                                            From</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="datefrom" class="form-control" id="datefrom">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPayment4" class="col-sm-3 col-form-label align-self-center">Date
                                            To</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="dateto" class="form-control" id="dateto">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>

    </body>

    <script>
    // Search filter for the table
        $('#search').on('keyup', function() {
          var value = $(this).val().toLowerCase();
          $('#rentstall tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
    </script>

    <script>
        $(document).ready(function() {
            function resetModal() {
                $("#fullname").val('');
                $("#contact").val('');
                $("#email").val('');
                $("#payment").val('');
                $("#amount").val('');

                $("#notice").val('');
                $("#description").val('');
                $("#datefrom").val('');
                $("#dateto").val('');
                $("#rentstall_id").val(0);
                
            }

            $('.bill-btn').click(function() {
                resetModal();
                $("#rentstall_id").val(this.dataset.rentstall_id);
                $("#fullname").val(this.dataset.fullname);
                $("#contact").val(this.dataset.contact);
                $("#email").val(this.dataset.emailadd);
                $("#payment").val(this.dataset.payment);
                $("#amount").val(this.dataset.totalamount);
            });
        });

    </script>

    <script src="assets/js/bootstrap.js"></script>

    </html>
@endsection
