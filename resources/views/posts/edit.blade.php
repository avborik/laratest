@extends('layout.app')
{{-- @push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
{{-- <div>
    other content
</div>
@endpush --}}

@section('appContent')
    <div>
        <br><br>
    <form action="/posts/{{ $post->id }}" method="POST">

        @method('PATCH')
        @csrf

            <div class="form-group">
                <label for="title_form">Title</label>
                <input type="text" class="form-control" id="title_form"
                 name="title_form" placeholder="Enter the title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="body_form">Body</label>
                <textarea class="form-control" id="content_form" name="body_form" 
                rows="3">{{ $post->body }}</textarea>
            </div>

            {{-- {{csrf_field()}} --}}
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <form method="POST" action="/posts/{{ $post->id }}">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Delete post</button>
        </form>
    </div>
@stop