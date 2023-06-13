@extends('layout')
@section('title', 'Show Computer')
@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1>Show Computer Page</h1>
        </div>
        <div class="mt-8">
            <span>This is Show Computer Page</span>
            {{-- {{print_r($computers);}} --}}

            <h1>{{ $computer['name'] }} is from <strong>{{ $computer['origin'] }}</strong> {{ $computer['price'] }}$</h1>
        </div>

        <a class="edit-btn" href="{{ route('computers.edit', $computer->id) }}">edit</a>
        <form class="delete-btn" action="{{ route('computers.destroy', $computer->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="delete-btn" type="submit" value="delete">
        </form>

    </div>
@endsection
