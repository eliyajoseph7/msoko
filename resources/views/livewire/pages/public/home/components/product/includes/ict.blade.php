<div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-2">
        @forelse ($ictdata?->products as $data)
            <a href="#"
                class="max-w-sm flex rounded-lg hover:-translate-y-1.5 duration-700 ease-in-out dark:bg-gray-800 dark:border-gray-700">
                
                <div
                    class="min-h-[200px] w-full rounded-xl">
                    @include('livewire.pages.public.home.components.product.includes.imgslide', [
                        'images' => $data->images
                    ])
                </div>
                <div class="px-5 bg-gray-50/50">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $data->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $data->short_description }}...
                    </p>
                    <div class="pb-1">Tsh. <span class="text-orange-500">{{ number_format($data->price) }}</span></div>
                    <a href="#"
                        class="inline-flex items-center px-3 py-0.5 text-sm font-medium text-center text-white bg-orange-600 rounded-lg hover:bg-orange-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </a>
        @empty
            <div class="py-2">To be uploaded soon!</div>
        @endforelse

    </div>
    {{-- @if ($ictdata->count() > 0)
        <div class="flex justify-center md:justify-end py-5">
            <button class="text-white bg-orange-600 hover:bg-orange-500 px-3 py-1.5 rounded-lg"
                wire:click.prevent="$dispatch('load_more_ict')">Load
                More</button>
        </div>
        
    @endif --}}
</div>
