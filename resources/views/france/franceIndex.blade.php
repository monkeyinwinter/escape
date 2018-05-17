<h1>title</h1>

@foreach ($posts as $post)

    <h2>
        <a href='{{ URL ::route('france.franceView', $post->name) }}'>
            {{ $post->name }}
        </a>
    </h2>


@endforeach