@extends('layouts.web', ['activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<section class="ads py-5">
  <div class="container d-flex flex-column justify-content-center align-items-center">
    <img src="{{asset('web/img/ad1.jpg')}}" alt="" class="w-50">
    <!-- <img src="{{asset('web/img/ad2.png')}}" alt="" class="w-75"> -->
  </div>
</section>

<!-- Category Section  -->
<section class="category-section">
  <div class="container">
    <h3>What do you want to search for?</h3>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 mb-xs-30">
        <div class="card">
          <div class="card-body">
            <h4 class="text-info">Electronic - Appliances</h4>
            <hr>
            <ul class="list-unstyled row m-0">
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-body">
            <h4 class="text-info">Video Games & Consoles</h4>
            <hr>
            <ul class="list-unstyled row m-0">
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
              <li class="mr-2 mb-2"><button class="btn btn-outline-dark btn-sm">Console</button></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Category Section  -->

<!-- Recent Ads Section -->
<section class="recent-ad-section py-5">
  <div class="container">
    <h3>Recent Ads</h3>

    <div class="row">
      <div class="col-12 col-md-4 col-lg-4 mb-4">
        <img class="w-100 rounded-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG28MLBvbQF5mNP1d5ZUREPW4Qlxu2luONxA&usqp=CAU" alt="">
        <div class="card rounded">
          <div class="card-body p-2">
            <span class="price-tag">AED 1,200</span>
            <p class="ad-title-tag m-0">PS4 Slim 1 TB for sale</p>
            <div class="address-tag row justify-content-between m-0">
              <p class="m-0"><small>Abu Dhabi, Baniyos</small></p>
              <p class="m-0"><small>18/12/2020</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-4">
        <img class="w-100 rounded-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG28MLBvbQF5mNP1d5ZUREPW4Qlxu2luONxA&usqp=CAU" alt="">
        <div class="card rounded">
          <div class="card-body p-2">
            <span class="price-tag">AED 1,200</span>
            <p class="ad-title-tag m-0">PS4 Slim 1 TB for sale</p>
            <div class="address-tag row justify-content-between m-0">
              <p class="m-0"><small>Abu Dhabi, Baniyos</small></p>
              <p class="m-0"><small>18/12/2020</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-4">
        <img class="w-100 rounded-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG28MLBvbQF5mNP1d5ZUREPW4Qlxu2luONxA&usqp=CAU" alt="">
        <div class="card rounded">
          <div class="card-body p-2">
            <span class="price-tag">AED 1,200</span>
            <p class="ad-title-tag m-0">PS4 Slim 1 TB for sale</p>
            <div class="address-tag row justify-content-between m-0">
              <p class="m-0"><small>Abu Dhabi, Baniyos</small></p>
              <p class="m-0"><small>18/12/2020</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-4">
        <img class="w-100 rounded-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG28MLBvbQF5mNP1d5ZUREPW4Qlxu2luONxA&usqp=CAU" alt="">
        <div class="card rounded">
          <div class="card-body p-2">
            <span class="price-tag">AED 1,200</span>
            <p class="ad-title-tag m-0">PS4 Slim 1 TB for sale</p>
            <div class="address-tag row justify-content-between m-0">
              <p class="m-0"><small>Abu Dhabi, Baniyos</small></p>
              <p class="m-0"><small>18/12/2020</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4">
        <img class="w-100 rounded-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG28MLBvbQF5mNP1d5ZUREPW4Qlxu2luONxA&usqp=CAU" alt="">
        <div class="card rounded">
          <div class="card-body p-2">
            <span class="price-tag">AED 1,200</span>
            <p class="ad-title-tag m-0">PS4 Slim 1 TB for sale</p>
            <div class="address-tag row justify-content-between m-0">
              <p class="m-0"><small>Abu Dhabi, Baniyos</small></p>
              <p class="m-0"><small>18/12/2020</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Recent Ads Section -->
@endsection
