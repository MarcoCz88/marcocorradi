<x-layout>
    <x-slot name="title">
        Marco Corradi | Dashboard
    </x-slot>
    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{$project_to_check ? 'Progetti da revisionare': 'Non ci sono progetti da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($project_to_check)
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
                <h5 class="card-title">Titolo: {{$project_to_check->titleP}}</h5>
                <p class="card-text">Descrizione: {{$project_to_check->bodyP}}</p>
                <p class="card-text text-center">{{$project_to_check->github_link }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('admin.accept_project', ['project'=> $project_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('admin.reject_project', ['project'=> $project_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>