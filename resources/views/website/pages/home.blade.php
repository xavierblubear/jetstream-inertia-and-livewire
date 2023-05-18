<div>
    <livewire:layouts.header/>
    <div class="w-full py-20">
        
        <div class="w-full text-center text-3xl">{{ $counter }}</div>
        <div class="flex gap-6 w-full justify-center">
            <x-common.button-secundary wire:click="test" type='añadir laravel comp'/>
            <livewire:common.primarybutton text-button='añadir' event-name="add"/>
            <livewire:common.primarybutton text-button='restar' event-name="remove"/>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-10 py-10 px-16 mx-auto max-w-7xl">
            <livewire:car.card />
            <livewire:car.card />
            <livewire:car.card />
            <livewire:car.card />
            <livewire:car.card />
            <livewire:car.card />
            <livewire:car.card />
            <livewire:car.card />
        </div>
    </div>
    
    @livewire('layouts.footer')
</div>

@livewireScripts
