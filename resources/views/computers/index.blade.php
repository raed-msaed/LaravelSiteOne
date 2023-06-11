@extends('layout')
@section('title','Show Computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers Page</h1>
    </div>
    <div class="mt-8">
        <span>This is the Computers Page</span>
        {{-- {{print_r($computers);}} --}}
        @if (count($computers)>0)
            <ul>
                @foreach ($computers as $item)
                <a href="{{ route('computers.show', ['computer' => $item['id']]) }}"> 
                    <li>{{$item['name']}} is from <strong>{{$item['origin']}}</strong> {{$item['price']}}$</li>
                </a>
                @endforeach
            </ul>  
        @endif

    </div>

</div>
@endsection