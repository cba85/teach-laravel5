@extends('templates.bootstrap')

@section('content')
    @if ($posts->count())
        @foreach ($posts as $post)
            <h4>{{ $post->title }}</h4>
        @endforeach

        {{ $posts->render() }}
    @else
        <p>No post.</p>
    @endif
</body>
</html>
@endsection
