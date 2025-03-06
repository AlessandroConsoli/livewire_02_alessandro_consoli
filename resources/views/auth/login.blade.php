<x-layout>
    
    
    <x-container>
        <h1 class="pt-5">Accedi al tuo account</h1>
    </x-container>
    
    <x-container>
        <form
        class="shadow rounded-2 p-4"
        action="{{route('login')}}"
        method="POST"
        >
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <x-container>
                <div>
                    <button type="submit" class="btn btn-secondary">Accedi</button>
                </div>
                <div>
                    <p class="pt-4">Non hai ancora un account? <a href="{{route('register')}}">Registrati</a></p>
                </div>
            </x-container>
        </form>
    </x-container>
    
    
</x-layout>