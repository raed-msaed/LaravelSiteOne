@extends('layout.master')
@section('title', 'Help')
@section('content')
    <div>
        <h1>Title Help Page</h1>
    </div>
@endsection

@section('sidebar')
    @parent
    <div>
        <p>This Sidebar from Help Page (Override)</p>
    </div>
@stop
