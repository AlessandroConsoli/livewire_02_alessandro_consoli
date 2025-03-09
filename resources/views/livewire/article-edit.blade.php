<div>
    <form enctype="multipart/form-data" wire:submit.prevent="articleUpdate">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Nome:</label>
            <input type="text" id="title" class="form-control" wire:model="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Descrizione:</label>
            <textarea id="body" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
        </div>
        <div class="mb-3">
            @if ($article->img)
                <p class="h5">Immagine attuale:</p>
                <img src="{{Storage::url($article->img)}}" alt="Immagine di {{$article->title}}" width="150">
            @else   
            <p class="text-center fst-italic fw-bold">Attualmente l'articolo non contiene immagini</p>             
            @endif
        </div>
        <div class="mb-3">
            <label for="img">Inserisci una immagine</label>
            <input type="file" class="form-control" wire:model="img">
        </div>
        <x-container>
            <button type="submit" class="btn btn-success px-5">Modifica</button>
        </x-container>
    </form>
</div>

