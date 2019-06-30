@extends('layout')

@section('content')

    <div class="container-fluid">
        <h1>Edit Project</h1>

        <form action="/projects/{{ $project->id }}" method="POST">
            @csrf
            @method('PATCH')

            <input type="text" name="title" class="form-control" placeholder="Project title" value="{{ $project->title }}"><br>
            <textarea name="description" cols="30" rows="5" class="form-control"> {{ $project->description }} </textarea>
            <button type="submit" class="btn btn-primary"> Update project </button>

        </form>

        <form action="/projects/{{ $project->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger"> Delete project </button>
        </form>
    </div>
    
@endsection