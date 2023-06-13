@extends('layout.master')
@section('title', 'Document')
@section('content')

    <div class="flex justify-center pt-8">
        <div class="row">
            <div class="col-9">
                <h1> {{ $NameDocument }}</h1>
            </div>
            <div class="col-9"><br>{{ $DescriptionDocument }}</div>
        </div>
    </div>

    {{-- <h1>{!! $script !!}</h1> <!-- prevent scape script --> --}}

@endsection
