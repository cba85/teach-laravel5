@if ($posts->count())
    @foreach($posts as $post)
        <h4>{{ $post->title }}</h4>
        <p>{{ str_limit($post->body, 100) }}</p>
    @endforeach
@else
    <p>No posts</p>
@endif
