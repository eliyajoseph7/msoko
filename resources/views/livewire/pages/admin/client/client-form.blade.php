<div class="">
    <div id="client-form-drawer"
        class="fixed top-[6.8rem] right-0 z-40 h-[85vh] p-4 overflow-y-auto transition-transform 
        {{-- translate-x-full --}}
         w-96 md:w-1/3 bg-transparent dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-top-label-client"
            class="inline-flex items-center mb-3 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg></h5>
        <button type="button" data-drawer-hide="client-form-drawer" aria-controls="client-form-drawer" id="closeClientDrawer"
            class="text-gray-400 bg-white hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="bg-white rounded-lg shadow-md relative p-4">
            <div class="pb-1"></div>
            <div class="text-center bg-orange-50 rounded-xl py-5 mx-2 font-bold text-gray-600">Client's Form</div>
            @if ($image)
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
            <form wire:submit.prevent="{{ $action }}Client">

                <div class="col-span-full">
                    <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Client Logo
                        <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                            <input type="file" accept="image/*" id="image"
                                @if ($action == 'add') wire:model.live="image"
                                @else
                                wire:model.live="new_image" @endif
                                class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                placeholder="Enter new client">
                        </div>
                        <div class="text-red-500 text-sm">
                            @error('image')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-3 mb-3 col-span-full">
                    <div class="grid grid-cols-4 gape-2">
                        @if ($image && !is_string($image))
                            <div class="w-32 h-32">
                                <img src="{{ $image->temporaryUrl() }}" class="w-full h-full rounded-lg object-top">
                            </div>
                        @endif
                    </div>
                    @if ($action == 'update')
                        <div class="grid grid-cols-4 gape-4">
                            @if ($new_image)
                                <div class="w-32 h-32">
                                    <img src="{{ $new_image->temporaryUrl() }}" class="w-full h-full rounded-lg object-top">
                                </div>
                            @endif
                            <div class="col-span-4 py-1">Previous image</div>
                            <div class="w-32 h-32 relative">
                                <img src="{{ $image }}" class="w-full h-full rounded-lg object-top">
                            </div>
                        </div>
                    @endif
                </div>

                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 col-span-full p-2 rounded-lg text-white w-full">
                    <div wire:loading>
                        <i class="fa fa-spinner fa-spin"></i>
                    </div>
                    <span>
                        {{ $action == 'add' ? 'Submit' : 'Update' }}
                    </span>
                </button>
            </form>

            @section('scripts')
                <script data-navigate-once>
                    document.addEventListener('livewire:init', () => {

                        Livewire.on('edit_client', (id) => {
                            Livewire.dispatch('update_client', {
                                'id': id
                            });
                        })

                    })
                </script>
            @endsection
            <script>
                document.addEventListener('livewire:init', () => {


                    // delete
                    Livewire.on('confirm_delete_image', (image) => {
                        // console.log(image)
                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Livewire.dispatch('delete_client', {
                                    'key': image
                                });
                            }
                        });
                    });

                    Livewire.on('client_deleted', () => {
                        Toast.fire({
                            icon: 'success',
                            title: 'Client deleted successfully!',
                        });
                    });
                });
            </script>
        </div>

    </div>
</div>
