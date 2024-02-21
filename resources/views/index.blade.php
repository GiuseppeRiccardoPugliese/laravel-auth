@extends('layouts.app')
@section('content')
    <h1 class="text-danger text-center fw-bolder">Projects: {{ count($projects) }}</h1>
    <div class="container">
        <div class="row">

            @foreach ($projects as $project)
                <div class="col-4 mb-3 d-flex justify-content-center align-items-center">

                    <div class="card" style="width: 18rem; min-height: 250px;">
                        <img class="card-img-top" src="{{ $project->image }}" alt="Card image cap">
                        <div class="card-body">
                            <a class="text-decoration-none" href="{{ route('project.show', $project->id) }}">
                                <h5 class="card-title text-center mb-2 border-bottom border-2 fw-semibold">
                                    {{ $project->title }}
                            </a>
                            </h5>
                            {{-- <p class="card-text">{{ $project->description }}</p> --}}
                            <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="mx-2 btn btn-danger" value="DELETE">
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
