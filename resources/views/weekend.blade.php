@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="./css/weekend.css">
</head>
<body>
@include('layouts.nav')
  <div id="img">
    <img src="https://images.pexels.com/photos/3178392/pexels-photo-3178392.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" srcset="">
    <div class="centered">
      <h3>Let us plan you a perfect holiday</h3>
      <form>
        <div class="form-group">
          <select class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <option value="none" selected disabled hidden>Select An Option</option>
            <option value="/weekend/munnar">Munnar</option>
            <option value="/weekend/alappuzha">Alappuzha</option>
            <option value="/weekend/ooty">Ooty</option>
            <option value="/weekend/hampi">Hampi</option>
            <option value="/weekend/mysore">Mysore</option>
            <option value="/weekend/madurai">Madurai</option>
            <option value="/weekend/rameshwaram">Rameshwaram</option>
            <option value="/weekend/tirupati">Tirupati</option>
          </select>
        </div>
      </form>
    </div>
  </div>

  <section id="destinations">
      <div class="container">
          <h1 class="title text-center">Destinations</h1>
          <div class="row" style="margin-top:15px;">
            <div class="col-md-4">
              <div class="card shadowHover mb-4" style="">
                <img src="https://images.pexels.com/photos/2968721/pexels-photo-2968721.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadowHover mb-4">
                <img src="https://images.pexels.com/photos/443446/pexels-photo-443446.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadowHover mb-4">
                <img src="https://images.pexels.com/photos/2994163/pexels-photo-2994163.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">              
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadowHover mb-4">
                <img src="https://images.pexels.com/photos/853199/pexels-photo-853199.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">              
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadowHover mb-4">
                <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">              
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadowHover mb-4">
                <img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">              
              </div>
            </div>
          </div>
      </div>
    </section>

    @include('layouts.footer')
@endsection