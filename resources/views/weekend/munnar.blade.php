@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="/css/place.css">
</head>
<body>
@include('layouts.nav')

  <section>
    <img src="https://www.abadhotels.com/wp-content/uploads/Resorts-in-Munnar.jpg" alt="">
  </section>

  <section id="data">
    <div class="container">
        <h1 class="title text-center">Munnar</h1>
        <p>Munnar is a town and hill station located in the Idukki district of the southwestern Indian state of Kerala. Munnar is situated at around 1,600 metres (5,200 ft) above mean sea level,[2] in the Western Ghats mountain range. Munnar is also called the "Kashmir of South India" and is a popular honeymoon destination.
          <br><br>
            The tradition that Col Arthur Wellesley, later to be the Duke of Wellington, leading a British detachment from Vandiperiyar to Bodinayakanur, then over the High Range and into the Coimbatore plains to cut off Tippu Sultan's retreat from Travancore, was the first Englishman in the High Range appears to be belied by the dates involved. If the story is a dozen years too early for Wellesley, it is quite possible that some other officer in General Meadow's Army may have had that distinction. Unfortunately, no record of that pioneering mountain crossing has been traced. What is available is a record of the surveying of this terrain in 1816-17 by Lt Benjamin Swayne Ward, son of Col Francis Swayne Ward to whom we owe many of the early views of Madras and South India Now available in lithprints.<br><br>
            Their first major camp was at a flat promontory at 6000 feet. And this was ever afterwards to be known as Top Station. Moving north, they saw to their south the Cardamom Hills, a slope 45 miles long and 30 wide from the heights above Bodi stretching into Travancore. To their north there appeared to be grasslands on high rock peaks. And in front of them, "an outstanding mountain, shaped like an elephant’s head". On 8 November, they established camp at the confluence of three rivers, which they judged to be the centre of the district, and from Munnar ("Moonar – three rivers), as it came to be known, they surveyed the area, discovered the ancient village of Neramangalam in ruins but surmised that it might well have been from here that ivory and peacock feathers, pepper and cardamom, sandalwood and other timber went to the lands to the West across the Arabian Sea".
        </p>
        <a href="/book" type="submit" id="bt" class="btn">Book Now</a>
    </div>
  </section>

  @include('layouts.footer')
@endsection
