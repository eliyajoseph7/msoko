<div class="relative pt-0 md:pt-3">
    <div id="carouselDarkVariant" class="relative" data-te-carousel-init data-te-ride="carousel">
        <!-- Carousel indicators -->
        <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators>
            <button data-te-target="#carouselDarkVariant" data-te-slide-to="0" data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button data-te-target="#carouselDarkVariant"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                data-te-slide-to="1" aria-label="Slide 1"></button>
            <button data-te-target="#carouselDarkVariant"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                data-te-slide-to="2" aria-label="Slide 1"></button>
            <button data-te-target="#carouselDarkVariant"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                data-te-slide-to="3" aria-label="Slide 1"></button>
            <button data-te-target="#carouselDarkVariant"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                data-te-slide-to="4" aria-label="Slide 1"></button>
        </div>

        <!-- Carousel items -->
        <div
            class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!-- First item -->
            <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                <div
                    class="bg-[url('{{ asset('assets/images/sliders/1.jpg') }}')] bg-cover bg-center relative block w-full h-full bg-gray-600 bg-blend-multiply">
                    <div
                        class="bg-transparent dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8 absolute top-1/4 left-0 right-0 flex justify-start">
                        <div class=" px-2 md:px-20 lg:px-72">
                            <h1 class="text-gray-100 dark:text-white text-xl md:text-5xl font-extrabold mb-2">Hardware</h1>
                            <p class="text-sm md:text-lg font-normal text-gray-400 dark:text-gray-400 mb-6">Explore our range of highquality ICT hardware, including desktops, laptops, servers, and networking equipment.</p>
                            <a href="{{ route('services') }}"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-600 hover:bg-orange-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- second item -->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-fade data-te-carousel-item>
                <div
                    class="bg-[url('{{ asset('assets/images/sliders/2.jpg') }}')] bg-cover bg-center absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gray-600 bg-blend-multiply">
                    <div
                        class="bg-transparent dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8 absolute top-1/4 left-0 right-0 flex justify-start">
                        <div class=" px-2 md:px-20 lg:px-72">
                            <h1 class="text-gray-100 dark:text-white text-xl md:text-5xl font-extrabold mb-2">Steel & Metal Products</h1>
                            <p class="text-sm md:text-lg font-normal text-gray-400 dark:text-gray-400 mb-6">Find essential steel and metal products, including beams, columns, and reinforcing bars, to support structural integrity.</p>
                            <a href="{{ route('services') }}"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-600 hover:bg-orange-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- third item -->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-fade data-te-carousel-item>

                <div
                    class="bg-[url('{{ asset('assets/images/sliders/3.jpg') }}')] bg-cover bg-center absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gray-600 bg-blend-multiply">
                    <div
                        class="bg-transparent dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8 absolute top-1/4 left-0 right-0 flex justify-start">
                        <div class=" px-2 md:px-20 lg:px-72">
                            <h1 class="text-gray-100 dark:text-white text-xl md:text-5xl font-extrabold mb-2">Tools & Equipment</h1>
                            <p class="text-sm md:text-lg font-normal text-gray-400 dark:text-gray-400 mb-6">Access a variety of construction tools and equipment to facilitate safe and efficient project execution, from power tools to safety gear.</p>
                            <a href="{{ route('services') }}"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-600 hover:bg-orange-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- fourth item -->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-fade data-te-carousel-item>
                <div
                    class="bg-[url('{{ asset('assets/images/sliders/4.avif') }}')] bg-cover bg-center absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gray-600 bg-blend-multiply">
                    <div
                        class="bg-transparent dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8 absolute top-1/4 left-0 right-0 flex justify-start">
                        <div class=" px-2 md:px-20 lg:px-72">
                            <h1 class="text-gray-100 dark:text-white text-xl md:text-5xl font-extrabold mb-2">Software Solutions</h1>
                            <p class="text-sm md:text-lg font-normal text-gray-400 dark:text-gray-400 mb-6">Optimize your operations with customizable software products and solutions designed to boost productivity and safeguard against cyber threats.</p>
                            <a href="{{ route('services') }}"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-600 hover:bg-orange-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- fifth item -->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-fade data-te-carousel-item>
                <div
                    class="bg-[url('{{ asset('assets/images/sliders/5.webp') }}')] bg-cover bg-center absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gray-600 bg-blend-multiply">
                    <div
                        class="bg-transparent dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8 absolute top-1/4 left-0 right-0 flex justify-start">
                        <div class=" px-2 md:px-20 lg:px-72">
                            <h1 class="text-gray-100 dark:text-white text-xl md:text-5xl font-extrabold mb-2">IT Services & Support</h1>
                            <p class="text-sm md:text-lg font-normal text-gray-400 dark:text-gray-400 mb-6">Count on our expert team for seamless system installation, maintenance, and reliable technical support.</p>
                            <a href="{{ route('services') }}"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-600 hover:bg-orange-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel controls - prev item-->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-te-target="#carouselDarkVariant" data-te-slide="prev">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-te-target="#carouselDarkVariant" data-te-slide="next">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="md:absolute -bottom-20 left-0 right-0 grid grid-cols-1 md:grid-cols-2 gap-4 px-1.5 py-2 lg:px-72 z-40">
        <div
            class="min-h-60 bg-[#093B6D]/95 rounded-lg md:rounded-l-[40px] cursor-pointer py-5 duration-700 ease-in-out hover:-translate-y-1.5">
            <a href="{{ route('services') }}" class="text-gray-200 font-normal px-3 text-lg uppercase hover:text-orange-500">Building & Construction Materials</a>
            <div class="h-1 w-full bg-orange-500"></div>
            <div class="p-4 text-gray-100">
                <div class="">
                    At M-SOKO Company Ltd, we are dedicated to providing innovative ICT products and services to empower
                    your business for success.
                </div>
                <blockquote class="py-2 px-8 text-lg italic text-gray-400 dark:text-white">
                    Enhance your business with cutting-edge technology solutions tailored to your needs.
                </blockquote>
            </div>
        </div>
        {{-- <div class="h-60 bg-[#093B6D]/95 rounded-lg py-5 cursor-pointer duration-700 ease-in-out hover:-translate-y-1.5">
            <div class="text-gray-200 font-normal px-3 text-lg uppercase">ICT Services</div>
            <div class="h-1 w-20 bg-orange-500"></div>
        </div> --}}
        <div
            class="min-h-60 bg-[#093B6D]/95 rounded-lg md:rounded-r-[40px] cursor-pointer py-5 duration-700 ease-in-out hover:-translate-y-1.5">
            <a href="{{ route('services') }}" class="text-gray-200 font-normal px-3 text-lg uppercase hover:text-orange-500">ICT PRODUCTS & SERVICES</a>
            <div class="h-1 w-full bg-orange-500"></div>
            <div class="p-4 text-gray-100">
                <div class="">
                    Your trusted partner for top-quality construction essentials.
                </div>
                <blockquote class="py-2 px-8 text-lg italic text-gray-400 dark:text-white">
                    With a focus on quality, efficiency, and value, M-SOKO Company Ltd is your one-stop destination for
                    premium building and construction materials.
                </blockquote>
            </div>
        </div>
    </div>
</div>
