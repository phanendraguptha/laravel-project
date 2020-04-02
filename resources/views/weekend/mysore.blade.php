@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="/css/place.css">
</head>
<body>
@include('layouts.nav')

  <section>
    <img src="https://images7.alphacoders.com/593/593192.jpg" alt="">
  </section>

  <section id="data">
    <div class="container">
        <h1 class="title text-center">Mysore</h1>
        <p>
            Mysore officially Mysuru, is a city in the southern part of the state of Karnataka, India.
          <br><br>
            Mysore is located in the foothills of the Chamundi Hills about 145.2 km (90 mi) towards the southwest of Bangalore and spread across an area of 152 km2 (59 sq mi). Mysore City Corporation is responsible for the civic administration of the city, which is also the headquarters of the Mysore district and the Mysore division.
            <br><br>
            It served as the capital city of the Kingdom of Mysore for nearly six centuries from 1399 until 1956. The Kingdom was ruled by the Wadiyar dynasty, with a brief period of interregnum in the 1760s and 70s when Hyder Ali and Tipu Sultan were in power. The Wadiyars were patrons of art and culture and contributed significantly to the cultural and economic growth of the city and the state. The cultural ambiance and achievements of Mysore earned it the sobriquet Cultural Capital of Karnataka.
            <br><br>
            Mysore is noted for its heritage structures and palaces, including the Mysore Palace, and for the festivities that take place during the Dasara festival when the city receives many tourists from around the world. It lends its name to various art forms and culture, such as Mysore Dasara, Mysore Painting; the sweet dish Mysore Pak, Mysore Masala Dosa; brands such as Mysore Sandal Soap, Mysore Ink; and styles and cosmetics such as Mysore Peta (a traditional silk turban) and the Mysore Silk sarees. Tourism is the major industry alongside the traditional industries. Mysore's inter-city public transportation includes rail, bus and flights.
        </p>
        <a href="/book" type="submit" id="bt" class="btn">Book Now</a>
    </div>
  </section>

  @include('layouts.footer')
@endsection
