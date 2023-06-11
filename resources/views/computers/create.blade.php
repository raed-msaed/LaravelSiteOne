@extends('layout')
@section('title','Create Computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center">
        <h1>Create a New Computer</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{route('computers.store')}}" method="post" >
            <!--cross site request forgery -->
            @csrf 
            

            <div>
                <label for="computer-name">Computer Name</label>
                <input id="computer-name" name="computer-name" type="text">
            </div>
            <div>
                <label for="computer-origin">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" type="text">
            </div>
            <div>
                <label for="computer-price">Computer Price</label>
                <input id="computer-price" name="computer-price" type="text">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
@endsection