@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center my-5">
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

                    <div class="card reveal" style="width: 18rem; min-height: 300px;">
                        <img class="card-img-top" src="{{ $project->image }}" alt="Card image cap">
                        <div class="card-body">
                            {{-- Rotta per la SHOW --}}
                            <a class="text-decoration-none" href="{{ route('project.show', $project->id) }}">
                                <h5 class="card-title text-center mb-2 border-bottom border-2 fw-semibold">
                                    {{ $project->title }}
                            </a>
                            </h5>
                            {{-- <p class="card-text">{{ $project->description }}</p> --}}
                            <div class="d-flex justify-content-evenly">
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

<script>

    //NB. le varie classi sono all'inteno del app.scss
    //creo la funzione reveal
    function reveal() {

        //prendo la classe .reveal
        let reveals = document.querySelectorAll(".reveal");

        // ottiene l'altezza della finestra del browser
        let windowHeight = window.innerHeight;

        //ciclo attraverso ogni elemento della lista
        for (let i = 0; i < reveals.length; i++) {

            //ottiene la distanza tra il bordo superiore dell'elemento e il bordo superiore della finestra di visualizzazione
            let elementTop = reveals[i].getBoundingClientRect().top;

            // definisce una soglia di visibilità (150 pixel dalla parte superiore della finestra)
            let elementVisible = 150;

            // controlla se l'elemento è visibile rispetto alla finestra di visualizzazione
            if (elementTop < windowHeight - elementVisible) {

                // aggiunge la classe "active" se l'elemento è visibile
                reveals[i].classList.add("active");
            } else {

                // rimuove la classe "active" se l'elemento non è visibile
                reveals[i].classList.remove("active");
            }
        }
    }
    // aggiunge un ascoltatore di eventi per lo scroll della finestra che chiama la funzione reveal
    window.addEventListener("scroll", reveal);

    // chiama la funzione reveal una volta quando la pagina viene caricata
    reveal();
</script>
