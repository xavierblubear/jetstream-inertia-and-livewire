@props(['car'])

<div class="w-full flex flex-col">
    <div class="relative">
        <div class="w-full absolute top-0 left-0 bg-blue text-white text-center font-bold text-sm py-1">Fotos 360</div>
        <img src="/images/car.jpg" alt=""/>
    </div>
    <h2 class="text-blue font-bold mt-2">{{ $car['name'] }}</h2>
    <p class="text-blue">{{ $car['year'] }} I {{ $car['kilometers'] }} KM I {{ $car['transmission'] }}</p>
    <p class="text-blue text-lg font-bold">${{ $car['price'] }}</p>
</div>