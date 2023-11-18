<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4 text-lg font-medium">Update Book <span class="text-sky-600">{{ $book->title }}</span>
                    </p>
                    <form action="{{ route('admin.books.update', $book) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-1 gap-2 sm:gap-6 sm:grid-cols-3">
                            <div class="">
                                <x-input-label for="title" :value="__('Book Title')" />
                                <x-text-input id="title" name="title" type="text" class="block w-full mt-1"
                                    :value="old('title', $book->title)" autofocus autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div class="">
                                <label for="author_id"
                                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                    Author Name
                                </label>
                                <select id="author_id" name="author_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-2 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                                    @foreach ($authors as $author)
                                        <option @selected($book->author->id == $author->id) value="{{ $author->id }}">
                                            {{ $author->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="" :messages="$errors->get('author_id')" />
                            </div>
                            <div class="">
                                <label for="publisher_id"
                                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                    Publisher Company
                                </label>
                                <select id="publisher_id" name="publisher_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-2 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                                    @foreach ($publishers as $publisher)
                                        <option @selected($book->publisher->id == $publisher->id) value="{{ $publisher->id }}">
                                            {{ $publisher->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="" :messages="$errors->get('publisher_id')" />
                            </div>
                            <div class="">
                                <x-input-label for="isbn" :value="__('ISBN')" />
                                <x-text-input id="isbn" name="isbn" type="number" class="block w-full mt-1"
                                    :value="old('isbn', $book->isbn)" autofocus autocomplete="isbn" />
                                <x-input-error class="mt-2" :messages="$errors->get('isbn')" />
                            </div>
                            <div class="">
                                <x-input-label for="language" :value="__('Book Language')" />
                                <x-text-input id="language" name="language" type="text" class="block w-full mt-1"
                                    :value="old('language', $book->language)" autofocus autocomplete="language" />
                                <x-input-error class="mt-2" :messages="$errors->get('language')" />
                            </div>
                            <div class="">
                                <x-input-label for="page_number" :value="__('Page Number')" />
                                <x-text-input id="page_number" name="page_number" type="number"
                                    class="block w-full mt-1" :value="old('page_number', $book->page_number)" autofocus autocomplete="page_number" />
                                <x-input-error class="mt-2" :messages="$errors->get('page_number')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="description" :value="__('Book Description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="block w-full mt-1" :value="old('description', $book->description)" autofocus autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>
                        </div>
                        <button type="submit"
                            class="px-3 py-2 mt-4 text-sm text-white bg-indigo-600 rounded-md sm:w-1/6 hover:bg-indigo-700">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
