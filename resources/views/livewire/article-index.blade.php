<div class="container d-flex justify-content-around min-vh-100">
    <div class="row col-12">
        @foreach ($articles as $article)
        <div class="col-12 col-md-4 mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{!$article->img ? 'https://thumb.ac-illust.com/b1/b170870007dfa419295d949814474ab2_t.jpeg' : Storage::url($article->img)}}" class="card-img-top cardImgCustom" alt="Immagine dell'articolo {{$article->title}}">
                <div class="card-body d-flex justify-content-center bg-card-custom">
                    <div>
                        <h5 class="card-title">{{$article->title}}</h5>
                        <div class="justify-content-center">
                            <div class="col-12 d-flex justify-content-center mb-3">
                                <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Vai all'articolo completo</a>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                @auth
                                    @if (Auth::id() == $article->user->id)
                                        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica l'articolo</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
