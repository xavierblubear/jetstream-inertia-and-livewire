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
                            <label for="{{ $transmission }}" class="capitalize">
                                <input type="checkbox" value="{{ $transmission }}"
                                    wire:model="selectedTransmissions"
                                    @checked(in_array($transmission, $selectedTransmissions)) />
                                <span>{{ $transmission }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col mt-3">
                    <h6 class="font-semibold mb-2">Marcas</h6>
                    <div class="ml-4 grid grid-cols-1 gap-2">
                        @foreach ($brands as $brand)
                            <label for="brand_{{ $brand['id'] }}">
                                <input type="checkbox" value="{{ $brand['slug'] }}"
                                    wire:model="selectedBrandsIds"
                                    @checked(in_array($brand, $selectedBrandsIds))>
                                <span>{{ $brand['name'] }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            <div class="relative my-2 mx-10 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 524 524"
                        fill="currentColor" aria-hidden="true">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </div>
                <input wire:model='search' type="search"
                    class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="Buscar">
            </div>
            <div class="my-2 mx-10 ">
                <div class="text-blue"><strong>{{ count($cars) }}</strong> resultados encontrados</div>
                <div>
                    @foreach ($this->selectedTransmissions as $i => $filtro)
                        <span
                            class="inline-flex items-center gap-x-0.5 rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 capitalize">
                            {{ $filtro }}
                            <button type="button" wire:click='removeFilter({{ $i }},"selectedTransmissions")'
                                class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-blue-600/20">
                                <span class="sr-only">Remove</span>
                                <svg viewBox="0 0 14 14"
                                    class="h-3.5 w-3.5 text-blue stroke-blue group-hover:stroke-blue">
                                    <path d="M4 4l6 6m0-6l-6 6" />
                                </svg>
                                <span class="absolute -inset-1"></span>
                            </button>
                        </span>
                    @endforeach
                    @foreach ($this->selectedBrandsIds as $i => $filtro)
                    <span
                        class="inline-flex items-center gap-x-0.5 rounded-xl bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 capitalize">
                        {{ $filtro }}
                        <button type="button" wire:click='removeFilter({{ $i }}, "selectedBrandsIds")'
                            class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-blue-600/20">
                            <span class="sr-only">Remove</span>
                            <svg viewBox="0 0 14 14"
                                class="h-3.5 w-3.5 text-blue stroke-blue group-hover:stroke-blue">
                                <path d="M4 4l6 6m0-6l-6 6" />
                            </svg>
                            <span class="absolute -inset-1"></span>
                        </button>
                    </span>
                @endforeach
                </div>
            </div>
            <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-20 px-10 gap-10">
                @foreach ($cars as $car)
                    <x-card :car="$car" />
                @endforeach
            </div>
        </div>
    </div>
</div>
