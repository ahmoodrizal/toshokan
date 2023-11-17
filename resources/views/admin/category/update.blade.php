<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4 text-lg font-medium">Update Category {{ $category->name }}</p>
                    <form action="{{ route('admin.categories.update', $category) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-1 sm:grid-cols-2">
                            <div class="">
                                <x-input-label for="name" :value="__('Category Name')" />
                                <x-text-input id="name" name="name" type="text" class="block w-full mt-1"
                                    :value="old('name', $category->name)" autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                        </div>
                        <button type="submit"
                            class="px-3 py-2 mt-4 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
