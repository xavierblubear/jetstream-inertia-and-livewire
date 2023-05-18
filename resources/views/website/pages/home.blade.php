<div>
    <livewire:layouts.header/>
    <div class="w-full text-center text-3xl">{{ $counter }} {{ $eventData}}</div>
    <div class="flex gap-6 w-full justify-center">
        <livewire:common.primarybutton :textButton='$buttonAdd'/>
        <livewire:common.primarybutton :textButton='$buttonSub'/>
    </div>
    @livewire('layouts.footer')
</div>
