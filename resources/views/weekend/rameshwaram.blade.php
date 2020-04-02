@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="/css/place.css">
</head>
<body>
@include('layouts.nav')

  <section>
    <img src="https://static.toiimg.com/photo/71048356.cms.cms" alt="">
  </section>

  <section id="data">
    <div class="container">
        <h1 class="title text-center">Rameshwaram</h1>
        <p>
            Rameswaram (also spelt as Ramesvaram, Rameshwaram) is a town and municipality in the Ramanathapuram district of the Indian state of Tamil Nadu. It is on Pamban Island separated from mainland India by the Pamban channel and is about 40 kilometres from Mannar Island, Sri Lanka. It is in the Gulf of Mannar, at the tip of the Indian peninsula. Pamban Island, also known as Rameswaram Island, is connected to mainland India by the Pamban Bridge. Rameswaram is the terminus of the railway line from Chennai and Madurai. Together with Varanasi, it is considered to be one of the holiest places in India to Hindus, and part of the Char Dham pilgrimage.
          <br><br>
            It is written in the Ramayana that the Divine King Rama built a bridge with Hanuman's help from here across the sea to Lanka to rescue his wife Sita from her abductor Ravana. The Ramanathaswamy Temple, dedicated to the Vedic god Shiva, is at the centre of the town and is closely associated with Rama. The temple and the town are considered a holy pilgrimage site for Shaivas and Vaishnavas.
            <br><br>
            Rameswaram is the closest point from which to reach Sri Lanka from India, and geological evidence suggests that the Rama Sethu was a former land connection between India and Sri Lanka[citation needed]. The town has been in the news over the Sethusamudram Shipping Canal Project, Kachchatheevu, Sri Lankan Tamil refugees and capturing local fishermen for alleged cross-border activities by Sri Lankan Forces. Rameswaram is administered by a municipality established in 1994. The town covers an area of 53 km2 (20 sq mi) and had a population of 44,856 as of 2011. Tourism and fishery employ the majority of workforce in Rameswaram.
        </p>
        <a href="/book" type="submit" id="bt" class="btn">Book Now</a>
    </div>
  </section>

  @include('layouts.footer')
@endsection