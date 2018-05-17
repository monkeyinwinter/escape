<h1><a href="{{URL::route('choix_site.choix_region')}}">France</a></h1>

<p><a href="{{URL::route('choix_site.choix_departement', ['region'=>$region->region])}}">retour</a></p>


<h1>{{ $departement-> departement}}</h1>

@foreach ($departement-> spots as $spot)

<h4>{{ $spot->spot }}</h4>


@endforeach
