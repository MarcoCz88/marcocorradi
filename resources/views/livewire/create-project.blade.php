<div>
    <h1 class="abril-fatface-regular mt-5 text-center">Crea nuovo progetto</h1>

    @if (session()->has('message'))
       <div class="flex flex-row justify-content-center my-2 alert alert-success">
           {{session('message')}}
       </div>
    @endif

    <form wire:submit.prevent="store">
        @csrf

        <div class="mb-3">
            <label for="titleP">Titolo Progetto</label>
            <input wire:model="titleP" type="text" class="form-control @error('titleP') is-invalid @enderror">
            @error('titleP')
                {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label for="bodyP">Descrizione</label>
            <textarea wire:model="bodyP" type="text" class="form-control @error('bodyP') is-invalid @enderror"></textarea>
            @error('bodyP')
                {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label for="github_link">Link GitHub</label>
            <input wire:model="github_link" type="link" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn buttonCustom px-4 py-2">Crea</button>
        </div>

    </form>
</div>
