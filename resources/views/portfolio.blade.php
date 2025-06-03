@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project }}</li>
        @endforeach
    </ul>
@endsection
