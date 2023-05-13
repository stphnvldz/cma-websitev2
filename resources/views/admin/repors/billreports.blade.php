@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill Reports</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="extensions/print/bootstrap-table-print.js"></script> --}}
</head>
<body>
    @section('content')

    <div class="datatable-container p-3">
        <table id="example" class="table table-hover table-striped nowrap display" style="width:100%">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Rental Fee Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bill as $bills)
                    <tr>
                        <td>{{ $bills-> id }}</td>
                        <td>{{ $bills->fullname }}</td>
                        <td>{{ $bills->selectedStallTextbox }}</td>
                        <td>{{ $bills->payment }}</td>
                        <td>{{ $bills->amount }}</td>
                        <td>{{ DateTime::createFromFormat('Y-m-d', $bills->date_from)->format('d M Y') . ' to ' . DateTime::createFromFormat('Y-m-d', $bills->date_to)->format('d M Y')  }}</td>
                        <td>{{ $bills->status}}</td>
                        <td><div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/paid_process?id={{$bills->id}}">Paid</a></li>
                                <li><a class="dropdown-item" href="/unpaid_process?id={{$bills->id}}">Unpaid</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>

        $('document').ready(function() {
            // DataTable
            var table = $('#example').DataTable({
                // dom: 'lfrtip',
                initComplete: function() {
                    // Apply the search
                    this.api()
                        .columns()
                        .every(function() {
                            var that = this;
                            $('input', this.body()).on('keyup change clear', function() {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });

                    $('#example_filter').addClass('pt-3');
                },
                buttons: [
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5,6] //Your Column value those you want
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5,6] //Your Column value those you want
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5,6] //Your Column value those you want
                        },
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5,6] //Your Column value those you want
                        },
                    }
                ],
                dom: 'lBfrtip',
                responsive: true,
                paging: false,
                scrollX: true,
                select: true,
                lengthChange: false,

            });
        });
        </script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/DataTables/jquery.dataTables.min.js"></script>
    <script src="assets/js/DataTables/datatables.min.js"></script>

</body>
</html>
@endsection
