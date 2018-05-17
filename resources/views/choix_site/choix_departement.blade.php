
<h1><a href="{{URL::route('choix_site.choix_region')}}">France</a></h1>

<p><a href="{{URL::route('choix_site.choix_region')}}">retour</a></p>

<h1>{{ $region->region}}</h1>

@foreach ($region-> departements as $departement)
<h4>
      <a href="{{ URL::route('choix_site.choix_spot', ['region'=>$region->region, 'departement'=>$departement->departement]) }}">
        {{ $departement-> departement }}
      </a>

</h4>
@endforeach
