<div>
    <h3 class="mb-1 font-extrabold text-gray-900 dark:text-dark">
        {{ __('Movies') }}
    </h3>

    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-center text-gray-500 ligth:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Id') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Movie name') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Genre') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Release Year') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Country') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Remake') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('Actions') }}
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($movies as $movie)
                <tr class="bg-white border-b ligth:bg-gray-800 ligth:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ligth:text-white">
                        {{ $movie->id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $movie->name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $movie->genre }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $movie->release_year }}
                    </td>
                    <td class="py-4 px-6">
                        {{ optional($movie->country)->name }}
                    </td>
                    <td class="py-4 px-6">
                        @if( $movie->remake == true)
                            <span class="
                                bg-blue-100
                                text-blue-800
                                text-xs font-semibold
                                mr-2
                                px-2.5
                                py-0.5
                                rounded
                                dark:bg-blue-200
                                dark:text-blue-800
                                "
                            >
                                {{ __('Yes')}}
                            </span>
                        @else
                            <span class="
                                bg-red-100
                                text-red-800
                                text-xs
                                font-semibold
                                mr-2
                                px-2.5
                                py-0.5
                                rounded
                                dark:bg-red-200
                                dark:text-red-900
                                "
                            >
                                {{ __('No')}}
                        </span>
                        @endif
                    </td>
                    <td>
                        <button
                            type="button"
                            wire:click="edit({{ $movie }})"
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
                            wire:click="delete({{ $movie }})"
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
                    <td class="py-4" colspan="7">
                        <em>
                            {{ __('Movies list is empty')}}
                        </em>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
