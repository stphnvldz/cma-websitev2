@extends('layouts.tenant-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMA Information</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @section('content')
    <div class="row d-flex align-items-center">
        <div class="col-auto mx-2">
            <img src="/assets/img/antipolo_seal.jpg" alt="" style="width:200px;height:200px;" class="align-middle">
        </div>
        <div class="col">
            <h1 class="align-middle">City Mall of Antipolo</h1>
        </div>
        <div class="row mx-2">
            <p1>City Mall of Antipolo, as this place is one of the biggest public markets in Antipolo City that can provide all the basic needs for its customer, it is located at Olalia Road, Cogeo, Antipolo City. The City Mall of Antipolo is ranked number 21 in the top-rated shopping center in Antipolo, they are also rank number 8 in the most reviewed shopping center in Antipolo.  It consists of 3 floors that contains wet and dry, groceries and other amenities. This public market is very useful for the citizens of Antipolo City because people can find almost all the things that they need in this place.</p1>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="container px-4 mt-4" style="font-size: 17px; float: left; margin-right: 5px; margin-left: 30px; width:550px;height:455px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
          <p style="font-weight: bold;">CITY HALL - ANNEX III
            SERVICES OFFERED:</p>
            <p>MEDICAL CONSULTATIONS</p>
            <p>DENTAL SERVICES</p>
            <p>DAYCARE SERVICE</p>
            <p>BIRTH CERTIFICATE
            - Application of New Born and Late Registration</p>
            <p>SENIOR CITIZENS
            - ID Applications, Issuance of Purchase Booklet
            <p>APPLICATION FOR PERSONS WITH DISABILITY (PWDs) ID</p>
              <p>APPLICATION FOR SOLO PARENT ID</p>
                <p>ASSISTANCE IN CRISIS SITUATION</p>
                  <p>REFERRAL TO PUBLIC EMPLOYMENT SERVICE OFFICE
            (PESO) FOR LOCAL AND OVERSEAS JOB HIRING</p>
        </div>
      </div>
      <div class="col">
        <img src="/assets/img/antipolo_hotline.jpg" alt="" style="width:500px;height:500px; class="align-middle">
      </div>
    </div>
    
      
</body>
</html>
@endsection