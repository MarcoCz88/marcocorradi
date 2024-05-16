<x-layout>
    <x-slot name="title">
        Marco Corradi | Dettagli
    </x-slot>
    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Progetto {{$project->titleP}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"alt="...">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/28/1200/200" class="img-fluid p-3 rounded"alt="...">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/29/1200/200" class="img-fluid p-3 rounded"alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h5 class="card-title">Titolo: {{$project->titleP}}</h5>
                <p class="card-text">Descrizione: {{$project->bodyP}}</p>
                <a class="card-text text-center" href="{{ $project->github_link }}">{{ $project->github_link }}</a>

            </div>
        </div>
    </div>
</x-layout>