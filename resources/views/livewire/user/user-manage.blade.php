<div>
    @include('layouts.messages')

    <div class="">
        <h3 class="mb-1 px-2 font-extrabold text-gray-900 dark:text-dark">
            @if($mode == "create")
                {{ __('Create')}}
            @else
                {{ __('Edit') }} @if($id_user) {{ $id_user }} @endif
            @endif
        </h3>
    </div>

    <form autocomplete="off">
        <div class="flex justify-center ml-0">
            <div class="mb-1 px-2 xl:w-96">
                <label for="name" class="form-label inline-block mb-2 text-gray-700">
                    {{ __('Name') }}
                </label>
                <input
                    type="text"
                    id="name"
                    placeholder="Eg: John"
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
                <label for="email" class="form-label inline-block mb-2 text-gray-700">
                    {{ __('Email') }}
                </label>
                <input
                    type="text"
                    id="email"
                    placeholder="Eg: jonh.doe@cb.com"
                    autocomplete="off"
                    wire:model.debounce.1000ms="email"
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
                        @error('email') border-red-700 @enderror
                        "
                >
                @error('email')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1 px-2 xl:w-96">
                <label for="password" class="form-label inline-block mb-2 text-gray-700">
                    {{ __('Password') }}
                </label>
                <input
                    type="password"
                    id="password"
                    autoComplete="new-password"
                    role="presentation"
                    wire:model.debounce.1000ms="password"
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
                        @error('password') border-red-700 @enderror
                    "
                >
                @error('password')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1 px-2 xl:w-96">
                <label for="confirm-password" class="form-label inline-block mb-2 text-gray-700">
                    {{ __('Confirm password') }}
                </label>
                <input
                    type="password"
                    id="confirm-password"
                    autocomplete="off"
                    wire:model.debounce.1000ms="confirm_password"
                    class="
                        form-control form-control-sm appearance-none
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
                        @error('confirm_password') border-red-700 @enderror
                    "
                />
                @error('confirm_password')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </form>

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
