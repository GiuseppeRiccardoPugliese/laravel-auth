@extends('layouts.app')
@section('content')
    <h1 class="text-danger text-center fw-bolder">Our Team!!🤡</h1>

    <div id="carouselExampleCaptions" class="carousel slide m-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner h-100  rounded-4">
            <div class="carousel-item h-100 active">
                <img src="{{ asset('mimmo.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Domenico Lella</h5>
                    <p>Ecco Lella Domenico, il capo supremo del divertimento! Con un sorriso contagioso e un'incredibile abilità nel trasformare anche il più banale dei momenti in un'esperienza indimenticabile, Lella Domenico è come un raggio di sole in una giornata piovosa.</p>
                </div>
            </div>
            <div class="carousel-item h-100">
                <img src="{{ asset('jack.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Giacomo Agave</h5>
                    <p>Ciao, sono Jack! Ho un superpotere segreto: riesco a far ridere chiunque. Se avete bisogno di una
                        dose di buon umore, sono qui per farvi sorridere e aggiungere un po' di allegria alla vostra
                        giornata!</p>
                </div>
            </div>
            <div class="carousel-item h-100">
                <img src="{{ asset('peppino.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Giuseppe Riccardo Pugliese</h5>
                    <p>Ciao a tutti, sono Peppe aChuckArell, un napoletano doc con il cuore in pizzeria e la testa sempre
                        allegra. Sì, sono quello che potrebbe mangiare pizza a colazione, pranzo e cena senza stancarsi mai.
                        Vi avviso, se mi fate una pizza con l'ananas, non rispondo delle mie azioni!
                    </p>
                </div>
            </div>
            <div class="carousel-item h-100">
                <img src="{{ asset('andrew.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Andrea Manigrasso</h5>
                    <p>Ciao, sono Andrea, il "Pizzicarello" del web! Tra una riga di codice e un piatto di orecchiette, trasformo il tuo progetto in una festa digitale. Porto il calore pugliese anche al codice binario. Che il tuo sito sia un successo come una tarantella in piazza</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h2 class="text-center mt-5">GitHub:</h2>

    <div class="text-center">
        <a class="px-4 text-decoration-none text-danger" href="https://github.com/Andrea9808">Andrea</a>
        <a class="px-4 text-decoration-none text-danger" href="https://github.com/Domenico-lel">Domenico</a>
        <a class="px-4 text-decoration-none text-danger" href="https://github.com/GiuseppeRiccardoPugliese">Giuseppe</a>
        <a class="px-4 text-decoration-none text-danger" href="https://github.com/GiacomoAgave">Giacomo</a>
    </div>
@endsection
