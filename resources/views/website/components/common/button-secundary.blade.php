@props(['type'])

<button
    class="
        flex
        justify-center
        items-center
        py-3
        px-8 
        rounded-full 
        hover:bg-blue
        focus:outline-none 
        focus:ring-2 
        focus:ring-offset-2 
        transition 
        ease-in-out 
        font-semibold
        duration-150
        border 
        border-yellow 
        bg-yellow text-blue hover:text-white hover:border-blue    
    "
>
 {{ $type }}
</button>