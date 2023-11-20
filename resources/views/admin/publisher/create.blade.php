<x-app-layout>
    @section('title', 'Toshokan | Admin Publisher Create')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4 text-lg font-medium">Create New Publisher</p>
                    <form action="{{ route('admin.publishers.store') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2">
                            <div class="">
                                <x-input-label for="name" :value="__('Publisher Name')" />
                                <x-text-input id="name" name="name" type="text" class="block w-full mt-1"
                                    :value="old('name')" autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                        </div>
                        <button type="submit"
                            class="px-3 py-2 mt-4 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
