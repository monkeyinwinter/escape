
<p><a href="{{URL::route('region.regionIndex')}}">retour</a></p>

<h1>{{ $region-> region}}</h1>




@foreach ($region-> departements as $departement)

<h4>{{ $departement-> departement }}</h4>


@endforeach
