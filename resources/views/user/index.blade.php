<x-app-layout>
    @section('title', "Users")

    <div class="py-3">
        <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    @livewire('user.user-manage')
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    @livewire('user.user-index')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
