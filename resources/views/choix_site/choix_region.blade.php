<h1>France</h1>

@foreach ($regions as $region)

<h2>
    <a href='{{ URL ::route('choix_site.choix_departement', $region->region) }}'>
    {{ $region->region }}
    </a>
</h2>


@endforeach
