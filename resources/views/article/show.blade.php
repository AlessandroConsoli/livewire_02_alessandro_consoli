<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-12">
                <h1 class="text-center display-5">Dettagli dell'articolo {{$article->title}}</h1>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{$article->img ? Storage::url($article->img) : 'https://thumb.ac-illust.com/b1/b170870007dfa419295d949814474ab2_t.jpeg'}}" alt="Immagine dell'articolo {{$article->title}}" class="mx-auto img-fluid rounded shadow" width="400">
            </div>
        </div>
        <div class="col-12 col-md-6 justify-content-center">
            <p class="fs-5">{{$article->body}}</p>
            <p class="text-muted">Scritto da: {{$article->user->name}} </p>
            <p class="text-muted">Ultima revisione: {{$article->user->updated_at}} </p>
        </div>
        @auth
        @if (Auth::id() == $article->user->id)
            <div class="row mt-5">
                <div class= "d-flex justify-content-center mb-2">
                    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica l'articolo</a>
                </div>
                <div class= "d-flex justify-content-center mb-2">
                    <livewire:article-delete :article="$article"></livewire:article-delete>
                </div>
            </div>
        @endif
    @endauth        
    </div>
</x-layout>