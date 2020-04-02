@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="/css/place.css">
</head>
<body>
@include('layouts.nav')

  <section>
    <img src="https://ak5.picdn.net/shutterstock/videos/8398045/thumb/1.jpg" alt="">
  </section>

  <section id="data">
    <div class="container">
        <h1 class="title text-center">Madurai</h1>
        <p>
            Madurai is a major city in the Indian state of Tamil Nadu. It is the cultural capital of Tamil Nadu and the administrative headquarters of Madurai District, the third largest city in Tamil Nadu and 44th most populated city in India. Located on the banks of River Vaigai, Madurai has been a major settlement for two millennia.
          <br><br>
            Madurai is closely associated with the Tamil language, and the third Tamil Sangam, a major congregation of Tamil scholars said to have been held in the city. The recorded history of the city goes back to the 3rd century BCE, being mentioned by Megasthenes, the Greek ambassador to the Maurya empire, and Kautilya, a minister of the Mauryan emperor Chandragupta Maurya. Signs of human settlements and Roman trade links dating back to 300 BC are evident from excavations by Archeological Survey of India in Manalur. The city is believed to be of significant antiquity and has been ruled, at different times, by the Pandyas, Cholas, Madurai Sultanate, Vijayanagar Empire, Madurai Nayaks, Carnatic kingdom, and the British East India Company British Raj.
            <br><br>
            The city has a number of historical monuments, with the Meenakshi Amman Temple and the Tirumalai Nayak Palace being the most prominent. Madurai is an important industrial and educational hub in South Tamil Nadu. The city is home to various automobile, rubber, chemical and granite manufacturing industries.
            <br><br>
            Madurai has important government educational institutes such as the Madurai Medical College, Homeopathic Medical College, Madurai Law College, Agricultural College and Research Institute. Madurai city is administered by a municipal corporation established in 1971 as per the Municipal Corporation Act. The city covers an area of 147.97 km2 and had a population of 1,561,129 in 2011. The city is also the seat of a bench of the Madras High Court. The Madurai Bench has been functioning since 2004.
        </p>
        <a href="/book" type="submit" id="bt" class="btn">Book Now</a>
    </div>
  </section>

  @include('layouts.footer')
@endsection
