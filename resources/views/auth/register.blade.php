<x-layout>
    
    
    <x-container>
        <h1 class="pt-5">Registra un nuovo account</h1>
    </x-container>
    
    <x-container>
        <form
        class="shadow rounded-2 p-4"
        action="{{route('register')}}"
        method="POST"
        >
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
            <x-container>
                <div>
                    <button type="submit" class="btn btn-secondary">Registrati</button>
                </div>
                <div>
                    <p class="pt-4">Hai già un account? <a href="{{route('login')}}">Fai il login</a></p>
                </div>
            </x-container>
        </form>
    </x-container>
    
    
</x-layout>