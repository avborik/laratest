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
        <form action="/posts" method="POST">
            <div class="form-group">
                <label for="title_form">Title</label>
                <input type="text" class="form-control" id="title_form"
                 name="title_form" placeholder="Enter the title">
            </div>
            <div class="form-group">
                <label for="body_form">Body</label>
                <textarea class="form-control" id="content_form" name="body_form" 
                rows="3"></textarea>
            </div>
            {{-- {{csrf_field()}} --}}
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
        </form>
        <div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@stop