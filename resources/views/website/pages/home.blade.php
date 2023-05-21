<div>
    <x-banner/>
    <div class="container mx-auto py-24">
        <h3 class="text-center text-sm font-bold mb-7">Marcas más buscadas</h3>
        <div class="flex w-full justify-center">
            @foreach ($mostSearchedBrands as $brand)
                <x-most-searched-brand :brand="$brand" />
            @endforeach
        </div>
    </div>
</div>
