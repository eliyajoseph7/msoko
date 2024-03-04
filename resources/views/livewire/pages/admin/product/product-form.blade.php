<div class="">
    <div id="product-form-drawer"
        class="fixed top-[6.8rem] right-0 z-40 h-[85vh] p-4 overflow-y-auto transition-transform 
        {{-- translate-x-full --}}
         w-96 md:w-1/3 bg-transparent dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-top-label"
            class="inline-flex items-center mb-3 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg></h5>
        <button type="button" data-drawer-hide="product-form-drawer" aria-controls="product-form-drawer"
            id="closeDrawer"
            class="text-gray-400 bg-white hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="bg-white rounded-lg shadow-md relative">
            <div class="pb-1"></div>
            <div class="text-center bg-orange-50 rounded-xl py-5 mx-2 font-bold text-gray-600">Product's Form</div>
            @if ($name)
                <div class="absolute top-1 right-2 bg-orange-500 rounded-full h-[25px] px-1 py-1 cursor-pointer"
                    wire:click="resetForm">
                    <span class="pr-1 text-white" title="Reset form">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                    </span>
                </div>
            @endif
            <form wire:submit.prevent="{{ $action }}Product">
                <div class="p-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">

                    <div class="col-span-full">
                        <label for="product_category_id"
                            class="block text-sm font-medium leading-6 text-gray-900">Product
                            Category</label>
                        <div class="mt-2 w-full">
                            <div wire:ignore
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                                <select type="text" id="product_category_id" wire:model="product_category_id"
                                    class="block w-screen select2 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    <option value="">Select..</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-red-500 text-sm">
                                @error('product_category_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Product Name
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                                <input type="text" id="name" wire:model.live="name"
                                    class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Enter new product">
                            </div>
                            <div class="text-red-500 text-sm">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="short_description" class="block text-sm font-medium leading-6 text-gray-900">Product
                            Short Description <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                                <input type="text" id="short_description" wire:model.live="short_description"
                                    class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Enter new product">
                            </div>
                            <div class="text-red-500 text-sm">
                                @error('short_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Full
                            Description <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                                <textarea type="text" id="description" wire:model.live="description"
                                    class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Enter full description"></textarea>
                            </div>
                            <div class="text-red-500 text-sm">
                                @error('description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price <span
                                class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                                <input type="number" step="0.01" id="price" wire:model.live="price"
                                    class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Enter new product">
                            </div>
                            <div class="text-red-500 text-sm">
                                @error('price')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="images" class="block text-sm font-medium leading-6 text-gray-900">Product Images
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                                <input type="file" accept="image/*" id="images"
                                    @if ($action == 'add') wire:model.live="images"
                                @else
                                wire:model.live="new_images" @endif
                                    multiple
                                    class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Enter new product">
                            </div>
                            <div class="text-red-500 text-sm">
                                @error('images')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 col-span-full">
                        <div class="grid grid-cols-4 gape-2">
                            @foreach ($images as $image)
                                @if ($image && !is_string($image))
                                    <div class="w-32 h-32">
                                        <img src="{{ $image->temporaryUrl() }}"
                                            class="w-full h-full rounded-lg object-top">
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        @if ($action == 'update')
                            <div class="grid grid-cols-4 gape-4">
                                @foreach ($new_images as $image)
                                        @if ($image)
                                            <div class="w-32 h-32">
                                                <img src="{{ $image->temporaryUrl() }}"
                                                    class="w-full h-full rounded-lg object-top">
                                            </div>
                                        @endif
                                @endforeach
                                <div class="col-span-4 py-1">Previous images</div>
                                @foreach ($images as $image)
                                    {{-- @if ($image && is_string($image)) --}}
                                    <div class="w-32 h-32">
                                        <img src="{{ $image }}" class="w-full h-full rounded-lg object-top">
                                    </div>
                                    {{-- @endif --}}
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 col-span-full p-2 rounded-lg text-white">
                        <div wire:loading>
                            <i class="fa fa-spinner fa-spin"></i>
                        </div>
                        <span>
                            {{ $action == 'add' ? 'Submit' : 'Update' }}
                        </span>
                    </button>
                </div>
            </form>

            @section('scripts')
                <script data-navigate-once>
                    document.addEventListener('livewire:init', () => {

                        Livewire.on('edit_product', (id) => {
                            Livewire.dispatch('update_product', {
                                'id': id
                            });
                        })

                    })
                </script>
            @endsection
            <script>
                document.addEventListener('livewire:init', () => {

                    Livewire.on('reset_category', (e) => {
                        $('#product_category_id').val('').trigger('change')
                    });

                    Livewire.on('update_category_field', (data) => {
                        $('#product_category_id').val(data).trigger('change')
                    });

                    // add
                    // Livewire.on('initialize_select2', (message) => {
                    //     $('.select2').select2({
                    //         minimumResultsForSearch: 6,
                    //         placeholder: "select...",
                    //     });
                    //     console.log('loaded')
                    // });


                    // clear wire ignored select fields on form reset
                    Livewire.on('reset_category', () => {
                        $('#product_category_id').val('').trigger('change')
                    })
                });
                $(document).on('change', '#product_category_id', function(e) {
                    //when ever the value of changes this will update your PHP variable 
                    @this.set('product_category_id', e.target.value);
                });
            </script>
        </div>

    </div>
</div>
