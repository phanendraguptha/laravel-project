@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="./css/signin.css">
</head>
<body>
@include('layouts.nav')
<div class="signincontainer">
    <div class="form">
    <h1 class="text-center">SignUp</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="">Username</label>

                <div class="">
                    <input id="input" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">Email address</label>

                <div class="">
                    <input id="input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">Password</label>

                <div class="">
                    <input id="input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">Confirm password</label>

                <div class="">
                    <input id="input" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <button type="submit" id="bt" class="btn btn-block" onclick="validate()">SignUp</button>
        </form>
    </div>
    <img class="img" src="https://images.pexels.com/photos/392586/pexels-photo-392586.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="665px" width="461px" alt="1">
</div>
@endsection
