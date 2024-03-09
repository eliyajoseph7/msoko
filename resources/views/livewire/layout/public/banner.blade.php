<div
    class="py-20 md:py-36 items-center h-[20vh] bg-[url('{{ asset('assets/images/sliders/1.jpg') }}')] bg-cover bg-center bg-gray-800 bg-blend-multiply">
    <div class="px-4 md:px-20 lg:px-72">
        <div class="text-xl md:text-4xl text-orange-500 font-bold">{{ $page ?? '' }}</div>
        <div class="flex flex-wrap space-x-3 py-2">
            <a href="{{ route('home') }}" class="hover:text-orange-500 font-bold text-orange-400">Home</a>
            <div class="">/</div>
            <div class="text-gray-400">{{ $page ?? '' }}</div>
        </div>
    </div>
</div>
