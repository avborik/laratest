@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-header">
        All posts
    </div>
    <div class="card-body">
        <ul>
            @foreach ($posts as $post)
                <li>
                <a href="#">{{$post->title}}</a>
                </li>
            @endforeach
        </ul>
        {{$posts->appends(['myArg' => 'true'])->links()}}
    </div>
</div>
@endsection