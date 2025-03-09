<x-layout>

    <x-container>
        <h1 class="display-5 text-center mt-5">
            Modifica il tuo aricolo!
        </h1>
    </x-container>

    <x-container>
        <livewire:article-edit :article="$article">
            
        </livewire:article-edit>
    </x-container>

</x-layout>