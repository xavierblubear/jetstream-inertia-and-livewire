<div class="container mx-auto flex flex-col mb-10">
    <h3 class="text-center mb-4">CATALOGUE</h3>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-1">
            <div class="bg-gray-200 rounded h-full p-4">
                <div class="flex flex-col">
                    <h6 class="font-semibold mb-2">Transmisión</h6>
                    <div class="ml-4 grid grid-cols-1 gap-2">
                        @foreach ($carTransmissions as $value)
                            <label for="{{$value}}" class="capitalize">
                                <input type="radio" wire:click="filterTransmission('{{$value}}')" name="transmission" value="{{$value}}" @if ($transmission == $value) checked @endif />
                                {{$value}}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-20 px-10 gap-10">
                @foreach ($cars as $car)
                    <x-card :car="$car"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
