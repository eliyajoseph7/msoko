<div>
    <div class="bg-white min-h-48 py-8">
        <div class="px-4 py-4 md:px-72">
            <div class="text-3xl py-1">Our Clients</div>
            <div class="w-20 h-1 bg-orange-500 text-transparent">_</div>
            <div class="w-full flex space-x-4 justify-start overflow-x-auto hide-scroll-bar">
                @forelse ($clients as $client)
                    <div
                        class="flex-shrink-0 px-2 grayscale hover:grayscale-0 cursor-pointer rounded-lg shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out min:w-52 min:h-40 items-center">
                        <img src="{{ $client->image }}" class="w-full h-40 object-cover">
                    </div>
                @empty
                    <div class="py-2">To be updated soon!</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
