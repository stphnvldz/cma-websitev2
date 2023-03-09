@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stalls</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">

</head>
<body>

@section('content')


    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators pd-1">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-sltide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="max-height: 30rem">
        <div class="carousel-item active">
            <img src="assets/img/cma.jpg" style="width:1500px;height:600px; " >
        </div>
        <div class="carousel-item">
            <img src="assets/img/cma.jpg"  style="width:1500px;height:600px;">
        </div>
        <div class="carousel-item">
            <img src="assets/img/cma.jpg"  style="width:1500px;height:600px;">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

<form action="/tenants" method="post">
@csrf
    <div class="container px-4 text-center mt-2 mx-5" style="height:320px;border: 1px solid rgb(39, 38, 38);border-radius: 4px;">
        <div class="row gx-5">
        <div class="col">
        <div class="p-3">
            <p class="fw-bolder">FLOORS</p>
            <p class="fw-light">1st Floor<br>(Wet and Dry Market)</p>
            <p class="fw-light">2nd Floor<br>(Necessities)</p>
            <p class="fw-light">3rd Floor<br>(Others)</p>
        </div>
        </div>
        <div class="col">
            <div class="p-3">
            <p class="fw-bolder">STALLS</p>
            <div class="dropdown">
                <select id="stall-select1" onchange="updateStallDropdowns()">
                    <option selected></option>
                    <option value="Stall No. 101">Stall No. 101</option>
                    <option value="Stall No. 102">Stall No. 102</option>
                    <option value="Stall No. 103">Stall No. 103</option>
                    <option value="Stall No. 104">Stall No. 104</option>
                    <option value="Stall No. 105">Stall No. 105</option>
                    <option value="Stall No. 106">Stall No. 106</option>
                    <option value="Stall No. 107">Stall No. 107</option>
                    <option value="Stall No. 108">Stall No. 108</option>
                    <option value="Stall No. 109">Stall No. 109</option>
                    <option value="Stall No. 110">Stall No. 110</option>
                </select>
            </div>
            </div>

            <div class="p-4">
                <div class="dropdown">
                        <select id="stall-select2" onchange="updateStallDropdowns()">
                        <option selected></option>
                        <option value="Stall No. 201">Stall No. 201</option>
                        <option value="Stall No. 202">Stall No. 202</option>
                        <option value="Stall No. 203">Stall No. 203</option>
                        <option value="Stall No. 204">Stall No. 204</option>
                        <option value="Stall No. 205">Stall No. 205</option>
                        <option value="Stall No. 206">Stall No. 206</option>
                        <option value="Stall No. 207">Stall No. 207</option>
                        <option value="Stall No. 208">Stall No. 208</option>
                        <option value="Stall No. 209">Stall No. 209</option>
                        <option value="Stall No. 210">Stall No. 210</option>
                        </select>
                </div>
            </div>

                <div class="p-3">
                    <div class="dropdown">
                        <select id="stall-select3" onchange="updateStallDropdowns()">
                            <option selected></option>
                            <option value="Stall No. 301">Stall No. 301</option>
                            <option value="Stall No. 302">Stall No. 302</option>
                            <option value="Stall No. 303">Stall No. 303</option>
                            <option value="Stall No. 304">Stall No. 304</option>
                            <option value="Stall No. 305">Stall No. 305</option>
                            <option value="Stall No. 306">Stall No. 306</option>
                            <option value="Stall No. 307">Stall No. 307</option>
                            <option value="Stall No. 308">Stall No. 308</option>
                            <option value="Stall No. 309">Stall No. 309</option>
                            <option value="Stall No. 310">Stall No. 310</option>
                        </select>
                    </div>
                </div>
        </div>
        <script>
            function updateStallDropdowns() {
                var select1 = document.getElementById("stall-select1");
                var select2 = document.getElementById("stall-select2");
                var select3 = document.getElementById("stall-select3");
            
                if (select1.value && select2.value) {
                    select3.disabled = true;
                } 
                else if (select1.value && select3.value){
                    select2.disabled = true;
                }
                else if (select2.value && select3.value){
                    select1.disabled = true;
                }else {
                    select1.disabled = false;
                    select2.disabled = false;
                    select3.disabled = false;
                }
            }
          </script>
        </div>
        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
           <button type="submit" class="btn btn-primary" id="#proceed-btn">Proceed</a>
        </div>
    </div>
</form>

    @if(isset($selectedStalls))
        @include('admin.tenant', ['selectedStalls' => $selectedStalls])
    @endif

        <script src="assets/js/bootstrap.js"></script>
</body>
</html>
@endsection
