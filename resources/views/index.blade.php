@extends('layouts.app')
@section('content')
    <h1 class="text-danger text-center fw-bolder">Projects:</h1>
    <div class="container">
        <div class="row">

            @foreach ($projects as $project)
                <div class="col-4 mb-3 d-flex justify-content-center align-items-center">

                    <div class="card" style="width: 18rem; min-height: 500px;">
                        <img class="card-img-top" src="{{ $project->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 border-bottom border-2 fw-semibold">{{ $project->title }}
                            </h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <a href="#" class="btn btn-primary"></a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
