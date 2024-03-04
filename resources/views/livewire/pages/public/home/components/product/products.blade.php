<div>
    <div class="py-10 px-2 md:px-72 bg-gray-100 bg-[url('{{ asset('assets/images/bgs/bg-2.jpg') }}')] bg-cover">
        <div class="text-3xl py-1">Our Products</div>
        <div class="w-20 h-1 bg-orange-500 text-transparent">_</div>
        <div class="py-5">
            <div class="mb-4 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="construction-tab"
                            data-tabs-target="#construction" type="button" role="tab" aria-controls="construction"
                            aria-selected="false">Construction</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="ict-tab" data-tabs-target="#ict" type="button" role="tab" aria-controls="ict"
                            aria-selected="false">ICT</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                @livewire('pages.public.home.components.product.includes.construction')

                @livewire('pages.public.home.components.product.includes.ict')
            </div>
        </div>
    </div>
</div>
