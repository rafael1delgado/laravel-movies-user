<div>
    <h3 class="mb-1 font-extrabold text-gray-900 dark:text-dark">
        {{ __('Users') }}
    </h3>

    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-center text-gray-500 ligth:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Id') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Name') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('email') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Created At') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Actions') }}
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr class="bg-white border-b ligth:bg-gray-800 ligth:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ligth:text-white">
                        {{ $user->id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $user->name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->created_at }}
                    </td>
                    <td>
                        <button
                            type="button"
                            wire:click="edit({{ $user }})"
                            class="
                                py-2
                                px-2
                                mr-1
                                mb-1
                                text-sm
                                font-medium
                                text-dark-900
                                focus:outline-none
                                bg-white
                                rounded-lg
                                border
                                border-blue-200
                                hover:bg-blue-100
                                hover:text-black-700
                                focus:z-10
                                focus:ring-4
                                focus:ring-blue-200
                            "
                        >
                            {{ __('Edit')}}
                        </button>

                        <button
                            type="button"
                            wire:click="delete({{ $user }})"
                            class="
                                py-2
                                px-2
                                mr-1
                                mb-1
                                text-sm
                                font-sm
                                text-gray-900
                                focus:outline-none
                                bg-white
                                rounded-lg
                                border
                                border-red-200
                                hover:bg-red-100
                                hover:text-dark-700
                                focus:z-10
                                focus:ring-4
                                focus:ring-gray-200
                            "
                        >
                            {{ __('Delete')}}
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="py-2" colspan="7">
                        <em>{{ __('Users list is empty')}}</em>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
