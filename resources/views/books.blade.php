<x-app-layout>
    @section('title', 'Toshokan | All Books')

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="px-10 py-6 text-gray-900">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <p class="mb-2 text-lg font-medium uppercase text-slate-800"><a
                                    href="{{ route('books') }}">Books</a>
                            </p>
                            @if (request()->query('search'))
                                <p class="text-sm font-medium ">search for books
                                    <span class="text-indigo-600">{{ request()->query('search') }}</span>
                                </p>
                            @endif
                        </div>
                        <div class="md:w-1/4">
                            <form action="?search" method="get">
                                <x-input-label for="search" :value="__('Search books')" class="mb-1 text-sm" />
                                <div class="flex items-center gap-x-2">
                                    <x-text-input id="search" name="search" type="text" class="block w-full"
                                        :value="request()->query('search')" required autocomplete="search" />
                                    <button type="submit" class="px-3 py-2 bg-indigo-700 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="white" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 lg:grid-cols-6">
                        @forelse ($books as $book)
                            <a href="{{ route('book-detail', $book) }}" class="overflow-hidden rounded-md shadow-md">
                                <img src="{{ Storage::url('books/' . $book->cover) }}" alt="cover"
                                    class="object-cover h-full rounded-md">
                            </a>
                        @empty
                            <p class="col-span-6 mt-6 text-xl font-medium text-center text-slate-700">Books Not Found
                            </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
