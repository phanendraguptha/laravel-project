@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="./css/signin.css">
</head>
<body>
@include('layouts.nav')
  <section>
    <div class="signincontainer">
      <div class="form" >
          <h1 class="text-center">Login</h1>
          <form>
            <div class="form-group">
              <label>Email address</label>
              <input id="input" type="email" class="form-control" required placeholder="Enter Email Or Phone Number">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label>Password</label>
              <input id="input" required type="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" id="bt" class="btn btn-block">Login</button>
          </form>
      </div>
      <img class="img" src="https://images.pexels.com/photos/392586/pexels-photo-392586.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="665px" width="461px" alt="1">
    </div>
  </section>
@endsection