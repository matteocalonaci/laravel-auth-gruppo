@extends('layouts.layout')

@section('content')

<h2>EDIT</h2>
    <form method="POST" action="{{ route('project.update', $project->id) }}" class="p-5">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$project->'name'}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$project->'description'}}">
        </div>
        <div class="mb-3">
            <label for="creation_date" class="form-label">Cration date</label>
            <input type="text" class="form-control" name="creation_date" id="creation_date" value="{{$project->'creation_date'}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
