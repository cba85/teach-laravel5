<h4>{{ $post->title }}</h4>
<p>{{ $post->created_at->diffForHumans() }}</p>

<p>{{ $post->body }}</p>
