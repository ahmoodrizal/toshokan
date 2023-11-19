<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 gap-6 sm:gap-6 lg:grid-cols-3">
                        <div class="mx-auto overflow-hidden rounded-md">
                            <img src="{{ Storage::url('books/' . $book->cover) }}" alt="book-cover"
                                class="rounded-md w-80">
                        </div>
                        <div class="sm:col-span-2 sm:pr-6 md:pr-10">
                            <p class="mb-4 text-xl font-semibold uppercase md:text-2xl">{{ $book->title }}</p>
                            <p class="mb-4 text-base font-light text-justify text-slate-600 md:text-md">Lorem ipsum
                                dolor sit
                                amet
                                consectetur, adipisicing elit. Itaque optio
                                excepturi
                                doloremque assumenda impedit non fuga harum at modi corrupti cupiditate aperiam
                                laudantium suscipit ut explicabo, vel deleniti mollitia temporibus quae deserunt
                                aliquam, quaerat et rerum hic! Eaque excepturi beatae officiis ex eos quos aliquid quo
                                obcaecati voluptatum libero. Quis.</p>
                            <div class="">
                                <div class="flex items-center justify-between mb-3">
                                    <p>Author</p>
                                    <p class="font-medium">{{ $book->author->name }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <p>Publisher</p>
                                    <p class="font-medium">{{ $book->publisher->name }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <p>ISBN</p>
                                    <p class="font-medium">{{ $book->isbn }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <p>Year</p>
                                    <p class="font-medium">{{ $book->year }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <p>Language</p>
                                    <p class="font-medium">{{ $book->language }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <p>Total Page</p>
                                    <p class="font-medium">{{ $book->page_number }} page</p>
                                </div>
                                <a href=""
                                    class="block w-1/2 px-4 py-3 mx-auto mt-12 text-sm text-center text-white rounded-md lg:mx-0 bg-slate-800 hover:bg-slate-900">
                                    Rent This Book
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
