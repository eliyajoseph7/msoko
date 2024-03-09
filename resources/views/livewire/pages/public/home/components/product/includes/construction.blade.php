<div>
    @unless ($page == 'summary')
        <div class="flex items-center bg-white justify-between d py-2 dark:bg-gray-700">
            <div class="flex">
                <div class="relative w-full">
                    <input type="text" wire:model.live.debounce.300ms="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-gray-200 focus:border-gray-200 block w-full pl-5 p-1 "
                        placeholder="Search" required="">
                </div>
            </div>
        </div>
    @endunless
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 md:gap-2">
        @forelse ($constructiondata as $data)
            <a href="{{ route('product_details', $data->id) }}" wire:key="{{ $data->id }}"
                class="max-w-sm flex rounded-lg0 hover:-translate-y-1.5 duration-700 ease-in-out dark:bg-gray-800 dark:border-gray-700">

                <div class="min-h-[200px] w-full rounded-xl">
                    @if ($page == 'summary')
                    @include('livewire.pages.public.home.components.product.includes.imgslide', [
                        'images' => $data->images,
                    ])
                    
                    @else
                    <div
                    class="bg-[url('{{ asset($data->images[0]?->image) }}')] bg-cover bg-center relative block w-full h-full rounded-lg">
                    <div
                        class="bg-transparent dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8 absolute top-1/4 left-0 right-0 flex justify-center">
                    </div>
                </div> 
                    @endif
                </div>
                <div class="px-5 bg-gray-50/50">
                    <a href="{{ route('product_details', $data->id) }}">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $data->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $data->short_description }}...
                    </p>
                    <div class="pb-1">Tsh. <span class="text-orange-500">{{ number_format($data->price) }}</span>
                    </div>
                    <a href="{{ route('product_details', $data->id) }}"
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
            <div class="py-2">No result found!</div>
        @endforelse
    </div>
    {{-- @if ($constructiondata->count() > 0)
        <div class="flex justify-center md:justify-end py-5">
            <button class="text-white bg-orange-600 hover:bg-orange-500 px-3 py-1.5 rounded-lg"
                wire:click.prevent="$dispatch('load_more_construction')">Load
                More</button>
        </div>
        
    @endif --}}

    @unless ($page == 'summary')
        @include('includes.table_pages', [
            'data' => $constructiondata,
            'hide_page' => true
        ])
    @endunless
</div>
