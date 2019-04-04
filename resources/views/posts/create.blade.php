@extends('layouts.app')
@section('content')
<div class="container">
    <br><br>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form_group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form_group">
                <label for="body">Text</label>
                <textarea id="article-ckeditor" name="body" rows="5" class="form-control"></textarea>
            </div>
        
         <div class="form_group">
             <label for="file">file</label>
             <input type="file" class="form-control" id="file" name="file">
        </div>
            <button type="submit">Submit</button>
    </form>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>

var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}'
  };

        $('#article-ckeditor').ckeditor(options);
        //CKEDITOR.replace('#article-ckeditor');
    </script>
</div>
@endsection