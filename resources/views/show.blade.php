@extends('layouts.app')
@section('content')
    <h1 class="text-danger text-center fw-bolder">Project ID: [{{ $project->id }}]</h1>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-4 my-3 d-flex justify-content-center align-items-center">

                <div class="card_show card" style="width: 18rem; min-height: 250px;">
                    <img class="card-img-top" src="{{ $project->image }}" alt="Card image cap">
                    <div class="card-body">

                        <h5 class="card-title text-center mb-2 border-bottom border-2 fw-semibold">
                            {{ $project->title }}</h5>

                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
