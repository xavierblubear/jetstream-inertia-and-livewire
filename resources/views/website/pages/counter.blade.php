<div>
    <div class="w-full flex justify-center">
        <x-spinner></x-spinner>
    </div>

    <div class="h-full flex items-center justify-center">
        <button wire:click="add" class="text-white bg-indigo-500 px-4 py-2 rounded hover:bg-indigo-900">Increment</button>
        <span class="m-5" x-text="count">{{ $counter }}</span>
        <button wire:click="subtract" class="text-white bg-indigo-500 px-4 py-2 rounded hover:bg-indigo-900">Decrement</button>
    </div>
</div>
