@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST OF TENANTS</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
    @section('content')
    
    <div class="d-flex justify-content-end">
        <form class="d-flex" role="search">
            <input id="searchInput" class="form-control me-2 mt-2" style="width: 500px" type="search" placeholder="Search" aria-label="Search">
            <button id="searchButton" class="btn btn-outline-success me-2 mt-2" onclick="filterTable()" type="button">Search</button>
            <button class="btn btn-outline-success me-2 mt-2" type="submit">Sort</button>
        </form>
    </div>

    <table class="table table-hover table-striped" id="tenantTable">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach($tenants as $tenant)
            <tr>
              <td>{{ $tenant->fullname }}</td>
              <td>{{ $tenant->contact }}</td>
              <td>{{ $tenant->emailadd }}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Tenant Actions">
                  <a href="#" data-tenant-id="{{ $tenant->id }}" type="button" class="btn btn-primary unaccounted-button">Unaccounted</a>
                  <a href="/viewtenant?id={{ $tenant->id }}" type="button" class="btn btn-secondary">View</a>
                  <a href="/archivetenant?id={{ $tenant->id }}" data-row-id="{{ $tenant->id }}" type="button" class="btn btn-danger archive-button">Archive</a>
                  <button type="button" class="btn btn-success bill-button" data-bs-toggle="modal" data-bs-target="#billModal" data-row-id="{{ $tenant->id }}">Bill</button>
              </td>
            </tr>
          @endforeach

        </tbody>
    </table>
    
    <!-- Modal Dialog -->
    <div class="modal fade" id="billModal" tabindex="-1" aria-labelledby="billModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="cash-modal">Bill Tenant</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-center row">
                <div class="mb-3 row text-center">
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="fullname" class="form-control" id="fullname"  readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact" class="form-control" id="contact"readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Notice</label>
                        <div class="col-sm-9">
                          <input type="text" name="notice" class="form-control" id="notice">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Description</label>
                        <div class="col-sm-9">
                          <input type="text" name="description" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName4" class="col-sm-3 col-form-label align-self-center">Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="date" class="form-control" id="date">
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          $('.unaccounted-button').click(function(event) {
            event.preventDefault();
            var tenantId = $(this).data('tenant-id');
            $.ajax({
              url: '/mark-as-unaccounted/' + tenantId,
              type: 'POST',
              success: function(response) {
                $('#tenant-' + tenantId).remove();
                $('#unaccountedTable tbody').append(response);
              }
            });
          });
        });
        </script>

      {{--<script>
        $(document).ready(function() {
          // Hide the row with the ID passed in the URL
          $("#tenantTable tr[data-row-id='" + {{ request('id') }} + "']").hide("fast");
        });
      </script>--}}

      <!--<script>
        $(document).ready(function() {
          $(".unaccounted-button").click(function () {
            // Get the row ID of the clicked button
            var rowId = $(this).data('row-id');
      
            // Hide the row
            $("#tenantTable tr[data-row-id='" + rowId + "']").hide("fast");
      
            // Redirect to the unaccounted blade
            window.location.href = "/unaccounted?id=" + rowId;
          });
        });
      </script>-->

    <script>
        $('.bill-button').click(function() {
        console.log('Bill button clicked');
        // Show the modal dialog
        $('#billModal').modal('show');

        // Get the tenant information from the button and update the modal content
        const tenantId = $(this).data('row-id');
        const tenantName = $(this).closest('tr').find('td:nth-child(1)').text();
        const tenantEmail = $(this).closest('tr').find('td:nth-child(3)').text();

        $('#billModal .modal-body p').text(`You are about to bill ${tenantName} (ID: ${tenantId}, Email: ${tenantEmail}).`);
    });
    </script>  
        <script>
          // Search filter for the table
          $('#search').on('keyup', function() {
                      var value = $(this).val().toLowerCase();
                      $('#Select tbody tr').filter(function() {
                          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                      });
                  });
          </script>
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>
@endsection