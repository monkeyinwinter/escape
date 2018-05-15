<h1>title</h1>

@foreach ($posts as $post)

<h2>
    <a href='{{ URL ::route('posts.view', $post->region) }}'>
        {{ $post->region }}
    </a>
</h2>


<h2>{{ $post->slug }}</h2>

@endforeach