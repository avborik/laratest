@extends('layout.app')
{{-- @push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
{{-- <div>
    other content
</div>
@endpush --}}

@section('appContent')
    @component('layout.welcome')
        <strong>
            Welcome to our pandas web
        </strong>
        @slot('link')
            <a href="#">Click here now</a>
        @endslot
    @endcomponent

    <br>
      
    <div>
        The code is <strong>{{$code}}</strong>
    </div>

    <div>
        The color is <strong>{{$color}}</strong>
    </div>

    <div>
        @foreach ($cars as $car)
       <div>{{$car}}</div> 
        @endforeach
       
    </div>

    <hr>

    <div>
        @for ($i = 0; $i < 5; $i++)
        <div> the current number is {{ $i }} </div>
        @endfor
    </div>

    <hr>

    @if($color === 'red')
        <div>The color IS RED</div>
    @else
        <div>The color IS not RED</div>
    @endif


    <hr>
    
    {{-- @isset($hobbies)
        
    @foreach ($hobbies as $hobby)
    <div>{{$hobby}}</div> 
     @endforeach
     @endisset --}}

     @empty(!$hobbies)
        
     @foreach ($hobbies as $hobby)
     <div>{{$hobby}}</div> 
      @endforeach
      @endempty

@stop