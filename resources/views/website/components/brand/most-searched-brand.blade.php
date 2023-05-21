@props(['brand'])

<div class="flex flex-col items-center text-blue font-light px-4 mr-3">
  <div class="flex justify-center items-center bg-[#f5f5f5] p-3 rounded-full h-[120px] w-[120px]">
      <img src="https://1001carros.servicioswebec.com/wp-content/uploads/2023/01/TOYOTA-1.png" alt="">
  </div>
  <p class="mt-2">{{ $brand->name }}</p>
</div>