<div>
    @include('layouts.messages')

    <div class="">
        <h3 class="mb-1 px-2 font-extrabold text-gray-900 dark:text-dark">
            @if($mode == "create")
                {{ __('Create')}}
            @else
                {{ __('Edit') }} @if($id_movie) {{ $id_movie }} @endif
            @endif
        </h3>
    </div>

    <div class="flex justify-center ml-0">
        <div class="mb-1 px-2 xl:w-96">
            <label for="movie-name" class="form-label inline-block mb-2 text-gray-700">
                {{ __('Movie Name') }}
            </label>
            <input
                type="text"
                id="movie-name"
                placeholder="Eg: The Queen"
                wire:model.debounce.1000ms="name"
                class="
                    form-control-sm
                    block
                    w-full
                    px-3
                    py-1.5
                    text-sm
                    font-medium
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('name') border-red-700 @enderror
                    "
            />
            @error('name')
                <div class="text-red-700">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-1 px-2 xl:w-96">
            <label for="genre" class="form-label inline-block mb-2 text-gray-700">
                {{ __('Genre') }}
            </label>
            <input
                type="text"
                id="genre"
                placeholder="Eg: Biographical"
                wire:model.debounce.1000ms="genre"
                class="
                    form-control-sm
                    block
                    w-full
                    px-3
                    py-1.5
                    text-sm
                    font-medium
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('name') border-red-700 @enderror
                    "
            >
            @error('name')
                <div class="text-red-700">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-1 px-2 xl:w-96">
            <label for="release-year" class="form-label inline-block mb-2 text-gray-700">
                {{ __('Release Year') }}
            </label>
            <input
                type="text"
                placeholder="Eg: 2006"
                id="release-year"
                wire:model.debounce.1000ms="release_year"
                class="
                    form-control-sm
                    block
                    w-full
                    px-3
                    py-1.5
                    text-sm
                    font-medium
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('release_year') border-red-700 @enderror
                "
            >
            @error('release_year')
                <div class="text-red-700">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-1 px-2 xl:w-96">
            <label for="country-id" class="form-label inline-block mb-2 text-gray-700">
                {{ __('Country') }}
            </label>
            <select
                id="country-id"
                wire:model.debounce.1000ms="country_id"
                class="
                    form-select form-select-sm appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-sm
                    font-medium
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('country_id') border-red-700 @enderror
                "
            >
                <option>
                    {{ __('Choose a country') }}
                </option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">
                        {{ __($country->name) }}
                    </option>
                @endforeach
            </select>
            @error('country_id')
                <div class="text-red-700">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-1 px-2 xl:w-96">
            <label for="remake" class="form-label inline-block mb-2 text-gray-700">
                {{ __('Remake') }}
            </label>
            <select
                id="remake"
                wire:model.debounce.1000ms="remake"
                class="
                    form-select form-select-sm appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-sm
                    font-medium
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('remake') border-red-700 @enderror
                "
            >
                <option>
                    {{ __('Choose remake') }}
                </option>
                <option value="0">
                    {{ __('No') }}
                </option>
                <option value="1">
                    {{ __('Yes') }}
                </option>
            </select>
            @error('remake')
                <div class="text-red-700">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="flex pt-2 justify-end">
        @if($mode == "create")
        <button
            type="button"
            wire:click="create"
            class="
                py-2.5
                px-5
                mr-2
                mb-2
                text-sm
                font-medium
                text-white-900
                focus:outline-none
                bg-white
                rounded-lg
                border
                border-gray-200
                hover:bg-gray-100
                hover:text-blue-700
                focus:z-10
                focus:ring-4
                focus:ring-gray-200
                dark:focus:ring-gray-700
                dark:bg-gray-800
                dark:text-gray-400
                dark:border-gray-600
                dark:hover:text-white
                dark:hover:bg-gray-700
            "
        >
            {{ __('Create') }}
        </button>
        @else
        <button
            type="button"
            wire:click="edit"
            class="
                py-2.5
                px-5
                mr-2
                mb-2
                text-sm
                font-medium
                text-white-900
                focus:outline-none
                bg-white
                rounded-lg
                border
                border-gray-200
                hover:bg-gray-100
                hover:text-blue-700
                focus:z-10
                focus:ring-4
                focus:ring-gray-200
                dark:focus:ring-gray-700
                dark:bg-gray-800
                dark:text-gray-400
                dark:border-gray-600
                dark:hover:text-white
                dark:hover:bg-gray-700
            "
            >
            {{ __('Edit') }}
        </button>
        @endif
        <button
            type="button"
            wire:click="resetInput"
            class="
                py-2.5
                px-5
                mr-2
                mb-2
                text-sm
                font-medium
                text-gray-900
                focus:outline-none
                bg-white
                rounded-lg
                border
                border-dark-200
                hover:bg-gray-100
                hover:text-black-700
                focus:z-10
                focus:ring-4
                focus:ring-gray-200
            "
        >
            {{ __('Cancel') }}
        </button>
    </div>
</div>
