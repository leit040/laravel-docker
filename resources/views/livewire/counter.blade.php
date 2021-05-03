<div>
    <div style="text-align: center">
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
        <div>
            <input  wire:model="name" type="text">
            Hello, {{$name}}
        </div>

    </div>
</div>
