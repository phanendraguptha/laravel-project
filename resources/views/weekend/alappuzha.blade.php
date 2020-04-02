@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="/css/place.css">
</head>
<body>
@include('layouts.nav')

  <section>
    <img src="https://images.pexels.com/photos/2422557/pexels-photo-2422557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
  </section>

  <section id="data">
    <div class="container">
        <h1 class="title text-center">Alappuzha</h1>
        <p>Alappuzha also known by its former name Alleppey, is the administrative headquarters of Alappuzha District in the Indian State of Kerala. Alappuzha is a city and a municipality in Kerala with an urban population of 174,164 and ranks third among the districts in literacy rate in the State of Kerala. In 2016, the Centre for Science and Environment rated Alappuzha as the cleanest town in India. Alappuzha is considered to be the oldest planned city in this region and the lighthouse built on the coast of the city is the first of its kind along the Laccadive Sea coast.
          <br><br>
        The city is situated 28 km from Changanacherry, 46 km from Kottayam, 53 km from Kochi, 129.4 km from Thrissur and 155 km north of Trivandrum. A town with canals, backwaters, beaches, and lagoons, Alappuzha was described by Lord Curzon as the "Venice of the East." Hence, it is known as the "Venetian Capital" of Kerala. In Alappuzha, Malayalam is the most spoken language.
        <br><br>
        It is an important tourist destination in India.The Backwaters of Alappuzha are the most popular tourist attraction in Kerala. A houseboat cruise in these backwaters can be booked. It connects Kumarakom and Cochin to the North and Quilon to the South. Apart from houseboat services, the Kerala State Water Transport Department provides government boat services within the district.
        <br><br>
        it is also the access point for the annual Nehru Trophy Boat Race, held on the Punnamada Lake, near Alappuzha, on the second Saturday of August every year. This is the most competitive and popular of the boat races in India. The mullackal chirap is also one of the attractions of Alapuzha which is the festive season held for ten days every year in December.
        <br><br>
        Other attractions in Alappuzha are Alappuzha Beach, offering a views of the Laccadive Sea, Pathiramanal , Ambalappuzha Sri Krishna Temple, St. Andrew's Basilica, Arthunkal, Mannarasala Temple, Chettikulangara Devi Temple, Haripad Sree Subrahmanya Swamy temple, Krishnapuram Palace, Thakazhy Sree Dharma Sastha Temple, Mullakkal Temple, Padanilam Parabrahma Temple, Edathua Church, Alappuzha CSI Christ Church (oldest Anglican church in Central Kerala) and Champakulam Valia Palli.
          </p>
      <a href="/book" type="submit" id="bt" class="btn">Book Now</a>
    </div>
  </section>

  @include('layouts.footer')
@endsection