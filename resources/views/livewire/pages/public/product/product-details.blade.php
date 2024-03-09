<div>
    @include('livewire.layout.public.banner', [
        'page' => 'Product Details',
    ])

    <div
        class="px-4 min-h-[40vh] md:px-20 lg:px-72 py-10 bg-gray-300 bg-[url('{{ asset('assets/images/bgs/bg-2.jpg') }}')] bg-cover bg-blend-overlay">
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-3">
                <div class="py-3 text-2xl font-semibold">
                    {{ $product->name }}
                </div>
                <div class="col-span-full">
                    <div class="h-[400px] w-full rounded-xl">
                        @include('livewire.pages.public.home.components.product.includes.imgslide', [
                            'images' => $product->images,
                        ])
                    </div>
                    <div class="py-4 text-xl flex justify-between">
                        <div class=" text-orange-500">Tsh. {{ $product->price }}</div>
                        <div class="text-sm">Last updated: {{ $product->updated_at->diffForHumans() }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-lg">

                        <figure class="max-w-screen-md mx-auto text-center py-2">
                            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <blockquote>
                                <p class="text-xl italic font-normal text-gray-700 dark:text-white">
                                    {{ $product->short_description }}</p>
                            </blockquote>

                        </figure>
                    </div>
                    <div class="">
                        {{ $product->description }}
                    </div>
                </div>
            </div>
            <div class="">
                <div class="py-3 text-2xl font-semibold">Other Products</div>
                <div class="mb-3 border-b border-gray-300">
                    @foreach ($products as $p)
                    <div class="mb-4 transition hover:-translate-y-1.5 hover:translate-x-2 hover:tran slate-y-4 ease-in-out duration-700">
                        <a href="{{ route('product_details', $p->id) }}" class="">
                            <div class="grid grid-cols-2 gap-2">
                                <div class="bg-[url('{{ $p->images[0]?->image }}')] bg-cover h-[80px] rounded-lg"></div>
                                <div class="">
                                    <div class="font-bold">{{ $p->name }}</div>
                                    <div class="font-bold">Tsh. <span
                                            class="text-orange-500 font-normal">{{ number_format($p->price, 2) }}</span></div>
                                </div>
                            </div>
                        </a>

                    </div>
                    @endforeach
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('products') }}" class="text-gray-500 hover:text-orange-500 bg-white px-2.5 py-2 rounded-lg hover:shadow-md">
                       <i class="fa fa-arrow-right"></i> View more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
