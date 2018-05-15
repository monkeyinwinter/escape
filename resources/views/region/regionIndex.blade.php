<h1>title</h1>

@foreach ($regions as $region)

<h2>
    <a href='{{ URL ::route('region.regionView', $region->region) }}'>
    {{ $region->region }}
    </a>
</h2>


@endforeach
