@extends('layout')

@section('content')

    <h1> {{ $project->title }} </h1>

    <h4> {{ $project->description }} </h4>

    <p>
    <a href="/projects/{{ $project->id }}/edit"> Edit project</a>
    </p>
    
@endsection