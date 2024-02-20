@extends('layouts.app')
@section('content')
    @foreach ($projects as $project)
        <h1>Ciao{{ $project->title }}</h1>
    @endforeach
@endsection
