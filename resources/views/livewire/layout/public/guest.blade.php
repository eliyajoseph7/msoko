<!DOCTYPE html>
<html lang="en" class="scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-SOKO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"
        integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="">

    @include('livewire.layout.public.navbar')
    <div class="min-h-[60vh]">
        {{ $slot }}
    </div>
    <!-- footer -->
    <footer class="bg-[#093B6D] min-h-[40vh] px-4 md:px-20 lg:px-72">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 py-10 space">
            <div class="">
                <img src="{{ asset('assets/images/logo.png') }}" class="max-h-[100px]">
                <div class="flex space-x-1 px-8 py-2.5">
                    <a href="https://www.facebook.com/profile.php?id=61557235508237" target="_blank"
                        rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-facebook text-3xl text-gray-200 hover:text-orange-500 cursor-pointer hover:shadow-xl px-2 py-1 rounded-lg border border-orange-300"></i>
                    </a>
                    <a href="https://www.instagram.com/msoko_official" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-instagram text-3xl text-gray-200 hover:text-orange-500 cursor-pointer hover:shadow-xl px-2 py-1 rounded-lg border border-orange-300"></i>
                    </a>
                    <a href="https://wa.me/255717101860" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-whatsapp text-3xl text-gray-200 hover:text-orange-500 cursor-pointer hover:shadow-xl px-2 py-1 rounded-lg border border-orange-300"></i>
                    </a>
                    {{-- <i
                        class="fa-brands fa-tiktok text-3xl text-gray-200 hover:text-orange-500 cursor-pointer hover:shadow-xl px-2 py-1 rounded-lg border border-orange-300"></i> --}}
                </div>
            </div>
            <div class="px-8">
                <div class="text-xl text-gray-200 font-bold">Quick Links</div>
                <div class="w-28 h-1 bg-orange-500 text-transparent">_</div>
                <div class="flex space-x-1 py-2.5">
                    <ul>
                        <li><i class="fa-solid fa-angle-right text-orange-500"></i><a href="{{ route('about') }}"
                                class="px-2.5 text-gray-300 hover:text-orange-500">About Us</a></li>
                        <li><i class="fa-solid fa-angle-right text-orange-500"></i><a
                                href="{{ asset('assets/pdf/m-soko_profile.pdf') }}" target="_blank"
                                rel="noopener noreferrer" class="px-2.5 text-gray-300 hover:text-orange-500">Company
                                Profile</a></li>
                        <li><i class="fa-solid fa-angle-right text-orange-500"></i><a href="{{ route('products') }}"
                                class="px-2.5 text-gray-300 hover:text-orange-500">Products</a></li>
                        <li><i class="fa-solid fa-angle-right text-orange-500"></i><a href="{{ route('services') }}"
                                class="px-2.5 text-gray-300 hover:text-orange-500">Our Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="px-8">
                <div class="text-xl text-gray-200 font-bold">Reach Us</div>
                <div class="w-[5.5rem] h-1 bg-orange-500 text-transparent">_</div>
                <div class="flex space-x-1 py-2.5">
                    <ul>
                        <li><i class="fa-solid fa-phone text-orange-500 py-2"></i><a href="tel:255717101860"
                                target="_blank" class="px-2.5 text-gray-300 hover:text-orange-500">+255 717 101 860</a>
                        </li>
                        <li><i class="fa-solid fa-phone text-orange-500 py-2"></i><a href="tel:762179139"
                                target="_blank" class="px-2.5 text-gray-300 hover:text-orange-500">+255 762 179 139</a>
                        </li>
                        <li><i class="fa-solid fa-envelope text-orange-500 py-2"></i><a href="mailto:info@m-soko.co.tz"
                                target="_blank" class="px-2.5 text-gray-300 hover:text-orange-500">info@m-soko.co.tz</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

</body>
<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
        },
        corePlugins: {
            preflight: false,
        },
    };
</script>

</html>
