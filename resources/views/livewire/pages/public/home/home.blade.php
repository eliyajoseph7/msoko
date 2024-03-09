<div>
    
    <!-- services -->
    @include('livewire.pages.public.home.includes.sliders')
    <!-- end services -->

    <!-- about -->
    <div
        class="bg-[url('{{ asset("assets/images/bgs/bg-1.avif") }}')] bg-center bg-cover">
        <div class="bg-gr ay-50/80 backdrop-bright ness-50">
            <div class="px-4 md:px-20 lg:px-72 pt-24 pb-10">
                <section class="bg-gray-100/70 dark:bg-gray-900 rounded-lg">
                    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8">
                        <div class="text-3xl py-1">M-soko Company Ltd</div>
                        <div class="w-20 h-1 bg-orange-500 text-transparent">_</div>
                        <div class="py-2 px-2.5">
                            M-SOKO Company Ltd is a well-established supplier specializing in the distribution and sale
                            of
                            ICT
                            (Information and Communication Technology) and construction materials. With over 5 years of
                            experience in the industry, we have been a reliable partner to businesses and construction
                            projects,
                            providing high-quality products and exceptional service.
                            <span><a href="{{ route('about') }}" class="text-blue-600 hover:text-blue-700 hover:underline">Read
                                    More</a></span>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    <!-- end about -->

    <!-- stats -->
    @include('livewire.pages.public.home.includes.stats')
    <!-- end stats -->

    <!-- products -->
    @livewire('pages.public.home.components.product.products')
    <!-- end products -->

    <!-- clients -->
    @livewire('pages.public.home.components.clients')
    <!-- end clients -->

    <!-- contacts -->
    @livewire('pages.public.home.components.contacts')

    <!-- end contacts -->

</div>
