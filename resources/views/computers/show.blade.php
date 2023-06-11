@extends('layout')
@section('title','Computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computer Page</h1>
    </div>
    <div class="mt-8">
        <span>This is the Computer Page</span>
        {{-- {{print_r($computers);}} --}}
        
        <h1>{{$computer['name']}} is from <strong>{{$computer['origin']}}</strong></h1>


    </div>

</div>
@endsection