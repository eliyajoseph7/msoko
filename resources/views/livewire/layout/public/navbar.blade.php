<div x-data="{ atTop: true }">
    <div class=""
        @scroll.window="atTop = (window.pageYOffset > 100) ? false : true">
        <nav class="fixed w-full z-50 top-0 start-0 bg-[#093B6D]"
            @if (Route::is('home')) :class="{'bg-[#093B6D]' : !atTop}" @else class="bg-[#093B6D]" @endif
            >
            @if (Route::is('home'))
                <div class="hidden md:flex w-screen">
                    <div class="min-h-8 w-full bg-[#133d67] grid md:grid-cols-1 lg:grid-cols-3 px-2 lg:px-72" :class="{ 'hidden': !atTop }">
                        <div class="px-2.5 flex items-center space-x-1">
                            <a href="tel:255717101860" target="_blank"
                                class="flex px-1 py-1 text-gray-200 transition ease-in-out delay-150 duration-700 hover:-translate-y-0.5 cursor-pointer rounded-md hover:shadow-md space-x-2 text-lg items-center">
                                <i class="fa fa-phone text-orange-500"></i>
                                <p class="">+255 717 101 860</p>
                            </a> 
                            <div class="text-gray-100">/</div> 
                            <a href="tel:255762179139" target="_blank"
                                class="flex px-1 py-1 text-gray-200 transition ease-in-out delay-150 duration-700 hover:-translate-y-0.5 cursor-pointer rounded-md hover:shadow-md space-x-2 text-lg items-center">
                                <i class="fa fa-phone text-orange-500"></i>
                                <p class="">+255 762 179 139</p>
                            </a>
                        </div>
                        <div class="px-2.5">
                            <a href="mailto:info@m-soko.co.tz" target="_blank"
                                class="flex px-1 py-1 text-gray-200 transition ease-in-out delay-150 duration-700 hover:-translate-y-0.5 cursor-pointer rounded-md hover:shadow-md space-x-2 text-lg items-center">
                                <i class="fa fa-envelope text-orange-500"></i>
                                <p class="">info@m-soko.co.tz</p>
                            </a>
                        </div>
                        <div class="px-2.5">
                            <a href="mailto:info@m-soko.co.tz" target="_blank"
                                class="flex px-1 py-1 text-gray-200 transition ease-in-out delay-150 duration-700 hover:-translate-y-0.5 cursor-pointer rounded-md hover:shadow-md space-x-2 text-lg items-center">
                                <span class="text-orange-500">TIN:</span>
                                <p class="">169-406-111</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-0">
                <a href="{{ route('home') }}" class="flex items-center lg:-ml-10 mr-4  space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/images/logo.png') }}" class="h-16" alt="M-SOKO Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse md:hidden">
                    <!-- <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                        started</button> -->
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-200 rounded-lg md:hidden hover:text-white focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center z-50 justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-blue-500 rounded-lg bg-[#093B6D] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-inherit dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 bg-inherit rounded hover:bg-blue-800 md:bg-transparent {{ Route::is('home') ? 'text-orange-500' : 'text-gray-300' }} md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="block py-2 px-3 {{ Route::is('about') ? 'text-orange-500' : 'text-gray-300' }} rounded hover:bg-blue-800 md:hover:bg-transparent md:hover:text-orange-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}"
                                class="block py-2 px-3 {{ Route::is('services') ? 'text-orange-500' : 'text-gray-300' }} rounded hover:bg-blue-800 md:hover:bg-transparent md:hover:text-orange-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"
                                class="block py-2 px-3 {{ Route::is('products') || Route::is('product_details') ? 'text-orange-500' : 'text-gray-300' }} rounded hover:bg-blue-800 md:hover:bg-transparent md:hover:text-orange-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
