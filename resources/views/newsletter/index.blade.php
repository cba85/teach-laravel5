<form action="{{ route('newsletter.create') }}" method="post">
    <input type="text" name="email" id="email">
    <button type="submit">Submit</button>
    {{ csrf_field() }}
</form>
