<div>
    <x-slot name="header">
        @include('includes.breadcrumb', [
            'main' => '',
            'menu' => 'Clients',
        ])
    </x-slot>
    <div>


        <div class="@if (!$showForm) hidden @endif">
            @livewire('pages.admin.client.client-form')
        </div>

        <div class="py-0">
            <div class="max-w-full mx-auto sm:px-6 lg:px-0">
                <div class="w-full">
                    <div class="flex justify-end pb-2">
                        <button wire:click="toggleForm" data-drawer-target="client-form-drawer"
                            data-drawer-show="client-form-drawer" data-drawer-placement="right"
                            aria-controls="client-form-drawer"
                            class="items-center space-x-0.5 text-gray-600 hover:text-gray-500 bg-gray-50 hover:bg-white shadow-sm hover:shadow-md px-2 border-2 border-gray-200 py-1 rounded-lg">
                            <i class="fa-solid fa-plus-circle"></i>
                            <span class="">{{ __('Add Client') }}</span>
                        </button>


                    </div>
                    <div class="flex flex-col-reverse md:flex-row md:space-x-3">
                        <div
                            class="min-h-[20vh] dark:bg-gray-800 overflow-hidden sm:rounded-lg items-center w-full float-right">

                            <div class="bg-white shadow-lg border-t-2 border-gray-100 rounded-lg px-2 py-3">
                                <div class="flex items-center justify-between d p-4 dark:bg-gray-700">
                                    <div class="flex">
                                        <div class="relative w-full">
                                            <input type="text" wire:model.live.debounce.300ms="search"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                                placeholder="Search" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table
                                        class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dark:bg-gray-700">
                                        <thead
                                            class="text-xs text-gray-700 dark:text-gray-100 uppercase bg-gray-100 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col" class="px-4 py-3 w-[50px]">S/No.</th>
                                                <th scope="col" class="px-4 py-3 w-[200px]">Image</th>
                                                @include('includes.table-header-sort', [
                                                    'name' => 'created_at',
                                                    'displayName' => 'Created At',
                                                ])
                                                @include('includes.table-header-sort', [
                                                    'name' => 'user_id',
                                                    'displayName' => 'Created By',
                                                ])
                                                <th scope="col" class="px-4 py-3 w-[100px] float-end">
                                                    <span class="sr-only">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="[&>*:nth-child(even)]:bg-[#F6F9FF] [&>*:nth-child(even)]:dark:bg-gray-600">
                                            @forelse ($data as $dt)
                                                <tr wire:key="{{ $dt->id }}"
                                                    class="border-b border-gray-100 dark:border-gray-700">
                                                    <th scope="row"
                                                        class="px-4 py-3 w-[50px] font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $loop->iteration }}</th>
                                                    <td class="px-4 py-3 whitespace-nowrap">
                                                        <img src="{{ $dt->image }}" class="w-32">
                                                    </td>
                                                    <td class="px-4 py-3 whitespace-nowrap">
                                                        {{ $dt->created_at->format('M d, Y') }}</td>
                                                    <td class="px-4 py-3 whitespace-nowrap">
                                                        {{ $dt->user?->name }}</td>
                                                    <td class="px-4 py-3 flex items-center justify-end space-x-1">
                                                        <button title="Update"
                                                            wire:click="$dispatch('update_client', {'id': {{ $dt->id }}})"
                                                            data-drawer-target="client-form-drawer"
                                                            data-drawer-show="client-form-drawer"
                                                            data-drawer-placement="right"
                                                            aria-controls="client-form-drawer"
                                                            class="px-1 bg-gray-300 hover:bg-blue-700 text-white rounded">
                                                            <i class="fa fa-edit"></i></button>

                                                        <button title="Delete"
                                                            wire:click="$dispatch('confirm_delete', {{ $dt->id }})"
                                                            class="px-2.5 bg-gray-300 hover:bg-red-500 text-white rounded">x</button>

                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="bg-gray-50">
                                                    <td class="py-2" colspan="50">
                                                        <div class="flex justify-center">There is nothing currently
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>

                                @include('includes.table_pages', [
                                    'data' => $data,
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script data-navigate-once>
            document.addEventListener('livewire:init', () => {
                // add
                Livewire.on('show_success', (message) => {
                    $('#closeClientDrawer').click()
                    Toast.fire({
                        icon: 'success',
                        title: message,
                    });
                });

                // delete
                Livewire.on('confirm_delete', (id) => {
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
                                'id': id
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



                document.addEventListener('livewire:init', () => {
                    // add
                    Livewire.on('initialize_select2', (message) => {
                        $('.select2').select2({
                            minimumResultsForSearch: 6,
                            placeholder: "select...",
                        });
                        console.log('loaded')
                    });
                });
            })
        </script>
    </div>
</div>
