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

    <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Full Name</th>
            <th scope="col">Stall Name</th>
            <th scope="col">Stall Number</th>
            <th scope="col">Stall Type</th>
          </tr>
        </thead>
        <tbody>
        <script>
            // get the tenant data from the server
            let tenants = {!! json_encode($tenants) !!};

            // loop through the tenants and display the data in the table
            for (let i = 0; i < tenants.length; i++) {
                let tenant = tenants[i];
                document.write('<tr>');
                document.write('<td>' + tenant.fullname +'</td>');
                document.write('<td>' + tenant.stallname + '</td>');
                document.write('<td>' + tenant.stallnum +'</td>');
                document.write('<td>' + tenant.stalltype + '</td>');
                document.write('<td>');
                document.write('<div class="btn-group" role="group" aria-label="Tenant Actions">');
                document.write('<a href="/edittenant" type="button" class="btn btn-primary" onclick="editTenant(' + tenant.id + ')">Edit</button>');
                document.write('<a href="/viewtenant" type="button" class="btn btn-secondary" onclick="viewTenant(' + tenant.id + ')">View</button>');
                document.write('<a href="/archivetenant" type="button" class="btn btn-danger" onclick="archiveTenant(' + tenant.id + ')">Archive</button>');
                document.write('</td>');
                document.write('</tr>');
            }
        </script>
        </tbody>
      </table>
        
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection