<div>
    @include('livewire.layout.public.banner', [
        'page' => 'Our Products',
    ])
    <div>
        <div
            class="py-10 px-2 md:px-20 lg:px-72 bg-gray-200 bg-[url('{{ asset('assets/images/bgs/bg-2.jpg') }}')] bg-cover bg-blend-overlay">
            <div class="text-3xl py-1">Our Products</div>
            <div class="w-20 h-1 bg-orange-500 text-transparent">_</div>
            <div class="py-5">
                <div class="md:flex">
                    <ul class="flex-column space-y space-y-4 divide-y-2 divide-slate-50 text-sm font-medium text-gray-500 dark:text-gray-400 md:px-2 py-2 mb-4 md:mb-0 bg-white/90"
                        id="product" data-tabs-toggle="#product-content" role="tablist">
                        <li>
                            <button class="inline-flex items-center px-8 py-3 rounded-lg w-full border-0"
                                aria-current="page" id="construction-tab" data-tabs-target="#construction"
                                type="button" role="tab" aria-controls="construction" aria-selected="false">
                                <svg class="w-4 h-4 me-2 text-inherit dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                </svg>
                                Construction

                            </button>
                        </li>
                        <li>
                            <button
                                class="inline-flex items-center px-8 py-3 rounded-lg border-0  w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"
                                id="ict-tab" data-tabs-target="#ict" type="button" role="tab" aria-controls="ict"
                                aria-selected="false">
                                <svg class="w-4 h-4 me-2 text-inherit dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z" />
                                    <path
                                        d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z" />
                                </svg>
                                ICT
                            </button>
                        </li>
                    </ul>
                    <div
                        class="px-6 bg-gray-50/50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                        <div id="product-content">
                            <div class="hidden p-4 rounded-lg" id="construction" role="tabpanel"
                                aria-labelledby="construction-tab">
                                @livewire('pages.public.home.components.product.includes.construction', [
                                    'page'=>'all-products'
                                ])
                            </div>
                            <div class="hidden p-4 rounded-lg" id="ict" role="tabpanel" aria-labelledby="ict-tab">
                                @livewire('pages.public.home.components.product.includes.ict', [
                                    'page'=>'all-products'
                                ])
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="mb-4 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="product"
                        data-tabs-toggle="#product-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="construction-tab"
                                data-tabs-target="#construction" type="button" role="tab"
                                aria-controls="construction" aria-selected="false">Construction</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="ict-tab" data-tabs-target="#ict" type="button" role="tab" aria-controls="ict"
                                aria-selected="false">ICT</button>
                        </li>
                    </ul>
                </div> --}}
                {{-- <div id="product-content">
                    <div class="hidden p-4 rounded-lg" id="construction" role="tabpanel"
                        aria-labelledby="construction-tab">
                        @livewire('pages.public.home.components.product.includes.construction')
                    </div>
                    <div class="hidden p-4 rounded-lg" id="ict" role="tabpanel" aria-labelledby="ict-tab">
                        @livewire('pages.public.home.components.product.includes.ict')
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

</div>
