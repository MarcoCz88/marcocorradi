<x-layout>
    <x-slot name="title">
        Marco Corradi | Progetti
    </x-slot>
    <div class="container text-center mt-4">
        <div class="row">
            <div class="col-12 abril-fatface-regular mt-2">
                <h1>Tutti i Progetti</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            @foreach ($projects as $project)
            <div class="col-12 col-md-6 my-4 d-flex justify-content-center">
                <div class="card shadow" style="width: 29rem;">
                    <img src="https://picsum.photos/500" class="card-img-top p-3 rounded" style="max-width: 500px; height: 250px;" alt="...">
                    <div class="card-body text-center"> 
                        <h5 class="card-title">{{$project->titleP}}</h5>
                        <p class="card-text">{{ Str::limit($project->bodyP, 100) }}</p>
                        <a href="{{ route('projects.show', compact('project')) }}" class="btn buttonCustom shadow">Visualizza</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
