<div class="container mx-auto flex flex-col mb-10">
    <div class="flex flex-col mx-auto max-w-3xl text-blue text-center pt-7 pb-10">
        <h3 class="mt-12 mb-0 text-center font-bold text-3xl">Únicos seminuevos con garantía</h3>
        <div class="mt-7 text-xl">
            <p>Nuestros vehículos pasan por una revisión de <span class="underline font-bold">150 puntos</span> y se</p>
            <p> acondicionan dentro y fuera para una auténtica experiencia de seminuevo.</p>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-1">
            <div class="bg-gray-200 text-blue rounded p-4">
                <h4 class="mb-6 font-semibold text-xl text-center">Filtros</h4>
                <div class="flex flex-col">
                    <h6 class="font-semibold mb-2">Transmisión</h6>
                    <div class="ml-4 grid grid-cols-1 gap-2 mb-2">
                        @foreach ($transmissions as $transmission)
                            <label for="{{$transmission}}" class="capitalize">
                                <input type="checkbox" value="{{$transmission}}" wire:model.defer="selectedTransmissions" wire:click="filter" @if (in_array($transmission, $selectedTransmissions)) checked @endif />
                                <span>{{$transmission}}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col mt-3">
                    <h6 class="font-semibold mb-2">Marcas</h6>
                    <div class="ml-4 grid grid-cols-1 gap-2">
                        @foreach ($brands as $brand)
                            <label for="brand_{{$brand->id}}">
                                <input type="checkbox" value="{{$brand->id}}" wire:model.defer="selectedBrandsIds" wire:click="filter" @if (in_array($brand, $selectedBrandsIds)) checked @endif >
                                <span>{{ $brand->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <!-- DEBUG
                <div class="flex flex-col items-center mt-3">
                    <button class="flex py-2 px-4 bg-blue text-white justify-center rounded" wire:click="debug">Debug</button>
                </div>
                DEBUG -->
            </div>
        </div>
        <div class="col-span-3">
            <div>{{ $mailMessage }} </div>
            <div>{{ $ticketMessage }} </div>
            <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-20 px-10 gap-10">
                @foreach ($cars as $car)
                    <x-card :car="$car"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
