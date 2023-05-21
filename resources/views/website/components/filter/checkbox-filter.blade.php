@props(['title', 'options', 'selectedOptions', 'onClick', 'valueByField' => null, 'labelByField' => null])

<div class="flex flex-col">
    <h6 class="font-semibold mb-2">{{ $title }}</h6>
    <div class="ml-4 grid grid-cols-1 gap-2 mb-2">
        @foreach ($options as $option)
            <label class="capitalize">
                <input type="checkbox" value="{{$option}}" wire:model.defer="{{$selectedOptions}}" wire:click="{{$onClick}}" @if (in_array($option, $selectedOptions)) checked @endif />
                <span>{{$option}}</span>
            </label>
        @endforeach
    </div>
</div>