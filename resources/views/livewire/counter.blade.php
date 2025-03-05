<x-container>
    <h2>Contatore livewire</h2>
    <div class="display-6 fw-bold">Valore: {{$count}}</div>
    <button wire:click="increment" class="btn btn-primary">+1</button>
    <button wire:click="decrement" class="btn btn-danger" >-1</button>
    <button wire:click="incrementByNum({{$myNum}})" class="btn btn-info" >+{{$myNum}}</button>
    <button wire:click="decrementByNum({{$myNum}})" class="btn btn-warning" >-{{$myNum}}</button>
</x-container>
