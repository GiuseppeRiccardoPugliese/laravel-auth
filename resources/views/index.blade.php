@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <h1 class="text-danger fw-bolder">Our Projects: {{ count($projects) }}</h1>

        {{-- @auth --}}

        {{-- Rotta per la CREATE --}}
        <a href="{{ route('project.create') }}"> <button type="button" class="btn btn-success ms-2">CREATE</button> </a>
        {{-- @endauth --}}
    </div>

    <div class="container">
        {{-- @auth --}}
        <div class="row">

            @foreach ($projects as $project)
                <div class="col-4 mb-3 d-flex justify-content-center align-items-center">

                    <div class="card" style="width: 18rem; min-height: 300px;">
                        <img class="card-img-top" src="{{ $project->image }}" alt="Card image cap">
                        <div class="card-body">
                            {{-- Rotta per la SHOW --}}
                            <a class="text-decoration-none" href="{{ route('project.show', $project->id) }}">
                                <h5 class="card-title text-center mb-2 border-bottom border-2 fw-semibold">
                                    {{ $project->title }}
                            </a>
                            </h5>
                            {{-- <p class="card-text">{{ $project->description }}</p> --}}
                            <div class="d-flex">
                                <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                                    {{-- (action)Rotta per la DESTROY --}}
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="mx-2 btn btn-danger" value="DELETE">
                                </form>
                                <a class="text-decoration-none" href="{{ route('project.edit', $project->id) }}"><button
                                        type="button" class="btn btn-info ms-2">EDIT</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        {{-- @endauth --}}
    </div>
@endsection
