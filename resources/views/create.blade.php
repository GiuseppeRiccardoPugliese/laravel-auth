@extends('layouts.app')
@section('content')
    <h1 class="text-danger text-center fw-bolder">New Project</h1>


    {{-- Validation Request --}}
    @if ($errors->any())
        <div class="alert alert-dark">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="text-center my-3" action="{{ route('project.store') }}" method="POST">

        @csrf
        @method('POST')

        <div class="d-flex flex-column w-25 m-auto">
            <label for="title">Title:</label>
            <input class="my-2" type="text" name="title" id="title">

            <label for="description">Description:</label>
            <textarea class="my-2" style="height: 150px" aria-label="With textarea" name="description" id="description"></textarea>
        </div>

        <button type="submit" value="CREATE" class="btn btn-primary">CREATE</button>
    </form>
@endsection
