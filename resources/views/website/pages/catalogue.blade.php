<div class="container mx-auto flex flex-col mb-10">
    <h3 class="text-center mb-4">CATALOGUE</h3>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1">
            <div class="bg-gray-200 rounded h-full p-4">
                <div class="flex flex-col">
                    <h6 class="font-semibold mb-2">Transmisión</h6>
                    <div class="ml-4 grid grid-cols-1 gap-2">
                        <label for="manual" class="capitalize">
                            <input type="radio" wire:model="transmission" name="transmission" value="manual" />
                            manual
                        </label>
                        <label for="automatica" class="capitalize">
                            <input type="radio" wire:model="transmission" name="transmission" value="automatica" />
                            automática
                        </label>
                    </div>
                    <!-- <button class="mt-4 w-full py-3 bg-blue text-white rounded-lg" wire:click.prevent="debug">Debug</button> -->
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div class="grid grid-cols-1 gap-4">
                @foreach ($cars as $car)
                    <div class="flex flex-col p-4 border border-gray-200 rounded">
                        <p>Name: {{ $car->name }}</p>
                        <p>Year: {{ $car->year }}</p>
                        <p>Kilometers: {{ $car->kilometers }}</p>
                        <p>Transmission: {{ $car->transmission }}</p>
                        <p>Price: {{ $car->price }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
