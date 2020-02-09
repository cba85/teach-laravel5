@extends('templates.bootstrap')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('mailing.create') }}" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-text text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            {{ csrf_field() }}
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
