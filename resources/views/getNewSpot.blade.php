@extends('escapeTemplate')

@section('contenu')
    {!! Form::open(['url' => 'newspot']) !!}
        {!! Form::label('nouveauspot', 'Nouveaux spot') !!}
        {!! Form::text('nouveauspot') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection
