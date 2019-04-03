@extends('layouts.app')
@section('content')
<div class="container">
    <br><br>
    <form action="/posts" method="POST">
        @csrf
        <div class="form_group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form_group">
                <label for="body">Text</label>
                <textarea id="article-ckeditor" name="body" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit">Submit</button>
    </form>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('#article-ckeditor').ckeditor();
        //CKEDITOR.replace('#article-ckeditor');
    </script>
</div>
@endsection