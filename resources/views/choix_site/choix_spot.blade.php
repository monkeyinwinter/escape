<p><a href="{{URL::route('choix_site.choix_departement', ['region'=>$region->region])}}">retour</a></p>

<h1><a href="{{URL::route('choix_site.choix_region')}}">France</a></h1>

<h2><a href="{{URL::route('choix_site.choix_departement', ['region'=>$region->region])}}">{{ $region-> region}}</a></h2>


<h1>{{ $departement-> departement}}</h1>


{!! Form::open() !!}
    {!! Form::label('nouveauspot', 'Nouveaux spot') !!}
    {!! Form::text('nouveauspot') !!}
    {!! Form::submit('Envoyer !') !!}
{!! Form::close() !!}


@foreach ($departement-> spots as $spot)

<h4>{{ $spot->spot }}</h4>


@endforeach


@forelse ($departement-> spots as $spot)

@empty
    <p>Aucun Spots associé</p>
@endforelse
