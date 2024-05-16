<x-layout>
    <x-slot name="title">
        Marco Corradi | Home
    </x-slot>

    <div class="container backgroundCustom">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <h1 class="text-center mt-3 abril-fatface-regular borderBottomCustom">
                    Curriculum Vitae
                </h1>
            </div>
        </div>
    </div>
    <div class="container borderBottomCustom backgroundCustom">
        <div class="row">
            <div class="col-md-6 mt-3 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                <div class="imgCustom"></div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <p class="text-center marcellus-regular fs-6">
                    Junior full stack developer con competenze lato front end e back end maturate in coding
                    bootcamp, basato su una programmazione per oggetto e metodologia agile Scrum. Pratico, attento e responsabile con buone capacità di lavoro in team, di pianificazione del lavoro e di ascolto sviluppate dalle esperienze lavorative pregresse.
                </p>
            </div>
            <p class="text-center mt-2">
                <a class="btn fs-3 buttonCustom" href="{{ route('whoiam') }}">Chi sono</a>
            </p>
        </div>
    </div>
    <div class="container borderBottomCustom backgroundCustomPro">
    <div class="row mt-4 mb-4">
        <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <h5 class="card-title fs-2 abril-fatface-regular text-center my-3">Progetti</h5>
                @foreach ($projects as $index => $project)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center align-items-center"> <!-- Modifica qui -->
                            <div class="card shadow" style="width: 18rem;">
                                <img src="https://picsum.photos/200" alt="..." class="card-img-top p-3 rounded">
                                <div class="card-body text-center"> <!-- Centrare il testo -->
                                    <h5 class="card-title">{{ $project->titleP }}</h5>
                                    <p class="card-text">{{ Str::limit($project->bodyP, 100) }}</p>
                                    <a href="{{ route('projects.show', compact('project')) }}" class="btn buttonCustom shadow">Visualizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
    <div class="container borderBottomCustom backgroundCustomExp">
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center text-center">
                <div class="mb-4">
                    <div class="card-body">
                        <h5 class="card-title fs-2 abril-fatface-regular">Esperienze lavorative</h5>
                        <p class="card-text marcellus-regular fs-5">Scopri di più sulle mie esperienze professionali.</p>
                        <a class="btn buttonCustom fs-3" href="{{ route('experience') }}">Esperienze</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container borderBottomCustom backgroundCustomCon">
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center text-center">
                <div class="mb-4">
                    <div class="card-body">
                        <h5 class="card-title fs-2 abril-fatface-regular">Contatti</h5>
                        <a class="btn buttonCustom fs-3 mt-2" href="{{ route('contact') }}">Contatti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

