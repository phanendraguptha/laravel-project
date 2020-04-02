@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="./css/contactus.css">
</head>
<body>  
  
@include('layouts.nav')
  
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 id="h1" style="text-align: center;">Contact Us</h1>
          <form action="/contact" method="POST">
          @csrf
            <div class="form">
              <div class="form-group">
                <label for="">First Name</label>
                <input id="input" class="form-control" type="text" required name="firstname" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="">Last Name</label>
                <input id="input" class="form-control" type="text" required name="lastname" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input id="input" class="form-control" type="email" required name="email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="">Subject</label>
                <input id="input" class="form-control" type="text" required name="subject" placeholder="Enter Subject">
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <textarea id="input1" class="form-control" required name="description" rows="3"></textarea>
              </div>
              <input id="bt" type="submit">
            </div>
          </form>          
        </div>
      </div>
    </div>
  </section>
  
  @include('layouts.footer')
@endsection