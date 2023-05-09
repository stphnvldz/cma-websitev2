@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Reports</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="extensions/print/bootstrap-table-print.js"></script>

</head>
<body>
    @section('content')
<div class="payment-table">
    <table class="table table-hover table-striped" id="printTable">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Type of Payment</th>
                <th scope="col">Amount</th>
                <th scope="col">Date From</th>
                <th scope="col">Date To</th>
                <th scope="col">Mode of Payment</th>
                <th scope="col">Status</th>
                <th scopr="col"><a class="printPage" href="#">Print</a></th>
            </tr>
        </thead>
        <tbody>
            @if(isset($payment))
            @foreach($payment as $payments)
            <tr>
                <td>{{ $payments->fullname }}</td>
                <td>{{ $payments->stallnumber }}</td>
                <td>{{ $payments->type }}</td>
                <td>{{ $payments->amount }}</td>
                <td>{{ $payments->datefrom }}</td>
                <td>{{ $payments->dateto }}</td>
                <td>{{ $payments->payment }}</td>
                <td>{{ $payments->status }}</td>
                <td><button type="button" class="btn btn-success view-button" data-bs-toggle="modal" data-bs-target="#viewModal" data-row-id="{{ $payments->id }}">View</button></td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="view-modal">View Tenant Payment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center row">
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                {{--<input type="hidden" name="id" value="{{ $data->id }}">--}}
                                <img src="/public/img/{{--{{ $data->image }}--}}" alt="Image" class="photo2b2 mt-5 mb-3">
                            </div>
                            <div class="mb-3 row">
                                <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Fullname</label>
                                <div class="col-sm-9">
                                    <input type="text" name="fullname" class="form-control" id="fullname" {{--value="{{ $data->fullname }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Stall Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="stallnumber" class="form-control" id="stallnumber" {{--value="{{ $data->stallnumber }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputcontact4" class="col-sm-3 col-form-label align-self-center">Contact No.</label>
                                <div class="col-sm-9">
                                <input type="contact" name="contact" id="contact" class="form-control" {{--value="{{ $data->contact }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Type of Payment</label>
                                <div class="col-sm-9">
                                    <input type="text" name="type" class="form-control" id="type" {{--value="{{ $data->type }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Amount of Stall</label>
                                <div class="col-sm-9">
                                    <input type="text" name="amount" class="form-control" id="amount" {{--value="{{ $data->amount }}"--}} disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 row">
                                <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Date From</label>
                                <div class="col-sm-9">
                                    <input type="text" name="datefrom" class="form-control" id="datefrom" {{--value="{{ $data->datefrom }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputStallAmount" class="col-sm-3 col-form-label align-self-center">Date To</label>
                                <div class="col-sm-9">
                                    <input type="text" name="dateto" class="form-control" id="dateto" {{--value="{{ $data->dateto }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 mt-3 row">
                                <label for="inputName" class="col-sm-3 col-form-label align-self-center">Mode of Payment</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="payment" id="payment" {{--value="{{ $data->payment }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Reference no.</label>
                                <div class="col-sm-9">
                                    <input type="text" name="refnumber"class="form-control" id="refnumber" {{--value="{{ $data->refnumber }}"--}} disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFloor" class="col-sm-3 col-form-label align-self-center">Status</label>
                                <div class="col-sm-9">
                                    <select id="status" name="status" class="form-select" {{--value="{{ $data->status }}"--}}>
                                        <option selected value="Pending">Pending</option>
                                        <option value="Paid">Paid</option>
                                        <option value="">Kulang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="store" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('a.printPage').click(function(){
        window.print();
        return false;
        });
    </script>

    <script>
        $(document).ready(function() {
            function resetModal() {
                $("#fullname").val('');
                $("#stallnumber").val('');
                $("#contact").val('');
                $("#type").val('');
                $("#amount").val('');
                $("#datefrom").val('');
                $("#dateto").val('');
                $("#payment").val('');
                $("#image").val('');
                $("#refnumber").val('');
                $("#status").val('');
            }
        $('view-button').click(function() {
                resetModal();
                $("#fullname").val(this.dataset.fullname);
                $("#stallnumber").val(this.dataset.stallnumber);
                $("#contact").val(this.dataset.contact);
                $("#type").val(this.dataset.type);
                $("#amount").val(this.dataset.amount);
                $("#datefrom").val(this.dataset.datefrom);
                $("#dateto").val(this.dataset.dateto);
                $("#payment").val(this.dataset.payment);
                $("#image").val(this.dataset.image);
                $("#refnumber").val(this.dataset.refnumber);
                $("#status").val(this.dataset.status);
            });

        });
    </script>
    
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection