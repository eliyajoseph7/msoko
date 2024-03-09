<div>
    @include('livewire.layout.public.banner', [
        'page' => 'About Us',
    ])
    <div class="px-4 md:px-20 lg:px-72 py-10 bg-gray-300 bg-[url('{{ asset('assets/images/bgs/bg-2.jpg') }}')] bg-cover bg-blend-overlay">
        <div class="">
            M-SOKO Company Ltd is a well-established supplier specializing in the distribution and sale of ICT
            (Information and Communication Technology) and construction materials. With over 5 years of experience in
            the industry, we have been a reliable partner to businesses and construction projects, providing
            high-quality products and exceptional service
        </div>
        <div class="py-8 pb-4">
            <div class="font-bold text-orange-400 hover:text-orange-500 uppercase">Our Vission</div>
            <div class="py-2">
                To continuously innovate and expand our offerings, becoming a leading supplier in the ICT and
                construction industries, while maintaining the highest standards of quality and service.
            </div>
        </div>

        <div class="py-4">
            <div class="font-bold text-orange-400 hover:text-orange-500 uppercase">Our Mission</div>
            <div class="py-2">
                <ol>
                    <li class="flex space-x-1 items-center">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                        <div class="">
                            To be the preferred partner in supplying top-notch ICT and construction materials,
                            contributing
                            to the success and growth of our clients' businesses and projects.
                        </div>
                    </li>
                    <li class="flex space-x-1 items-center">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                        <div class="">
                            Dedication to providing quality construction, technical and anagement services to our
                            customers.
                        </div>
                    </li>
                    <li class="flex space-x-1 items-center">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                        <div class="">
                            implement a long term relationship with our clients, based on safety, quality, timely
                            service
                            and an anticipation of customers needs.
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div class="">
            <div class="">
                <span>You can view our complete company profile</span>

                <a class="text-orange-500 font-bold" href="{{ asset('assets/pdf/m-soko_profile.pdf') }}" target="_blank"
                    rel="noopener noreferrer">Here</a>
            </div>
        </div>
        {{-- <object data="{{ asset('assets/pdf/m-soko_profile.pdf') }}" type="application/pdf"
            class="w-full min-h-[80vh]"></object> --}}
    </div>
</div>
