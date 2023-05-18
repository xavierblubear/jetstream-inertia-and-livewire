<header class="w-full sticky bg-white h-24 flex items-center top-0 relative z-[20] px-6" >
    <nav class="container max-w-7xl flex items-center justify-between mx-auto">
        <img src="/images/logo.svg" class="w-64" alt="1001carros.com"/>
        <ul class="text-lg text-blue hidden tablet:flex">
            <li class="font-light"><a href="/home" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Home</a></li>
            <li class="font-light ml-7"> <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Counter</a></li>
        </ul>
        <div class="flex items-center justify-end tablet:hidden">
            <ul class="hidden mobile:flex text-lg text-blue mr-6">
                <li class="font-semibold ml-7 text-sm"><a href="/">Trabaja con nosotros</a></li>
                <li class="font-semibold ml-7 text-sm"><a href="/">Contáctanos</a></a>
                <li class="font-semibold ml-7 text-sm"><a href="/">Whatsapp</a></a>
            </ul>
            <button class="w-8 h-8 bg-blue text-white mt-4 mr-6">
                O
            </button>
        </div>
    </nav>
    <div class="fixed top-0 left-0 bg-blackopacity w-screen h-screen z-[100] transition-colors transition-opacity duration-500 opacity-1 tablet:invisible">
        <div class="h-full w-full sm:max-w-sm bg-white absolute  flex items-end flex-col transition-all duration-500">
            <button class="w-8 h-8 bg-blue text-white mt-4 mr-6">
                X
            </button>
            <ul class="w-full text-lg text-blue py-10 px-10 [&>*]:p-2">
                <li class="font-light"><a href="/">Comprar</a></li>
                <li class="font-light"><a href="/">Agencias</a></li>
                <li class="font-light"><a href="/">Contacto</a></li>
                <li class="font-light"><a href="/">Vender</a></li>
            </ul>
        </div>
    </div>
</header>