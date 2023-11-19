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
                            <p class="mb-4 font-medium ">Select Duration Date</p>
                            <form action="{{ route('transaction.store', $book) }}" method="post">
                                @csrf
                                <div class="grid grid-cols-2 gap-2 mb-6 md:mb-16 md:gap-4 md:grid-cols-4">
                                    <div
                                        class="flex items-center border border-gray-200 rounded ps-4 dark:border-gray-700">
                                        <input checked id="bordered-radio-1" type="radio" value="3"
                                            name="duration"
                                            class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-1"
                                            class="w-full py-4 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">3
                                            Days</label>
                                    </div>
                                    <div
                                        class="flex items-center border border-gray-200 rounded ps-4 dark:border-gray-700">
                                        <input id="bordered-radio-2" type="radio" value="7" name="duration"
                                            class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-2"
                                            class="w-full py-4 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">7
                                            Days</label>
                                    </div>
                                    <div
                                        class="flex items-center border border-gray-200 rounded ps-4 dark:border-gray-700">
                                        <input id="bordered-radio-3" type="radio" value="14" name="duration"
                                            class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-3"
                                            class="w-full py-4 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">14
                                            Days</label>
                                    </div>
                                    <div
                                        class="flex items-center border border-gray-200 rounded ps-4 dark:border-gray-700">
                                        <input id="bordered-radio-4" type="radio" value="30" name="duration"
                                            class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-4"
                                            class="w-full py-4 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">30
                                            Days</label>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="link-checkbox" type="checkbox" value="1" name="agree" required
                                        class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="link-checkbox"
                                        class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">I agree with
                                        the
                                        <a href="/faq"
                                            class="text-indigo-600 dark:text-indigo-500 hover:underline">terms
                                            and
                                            conditions</a>.</label>
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('agree')" />
                                <button type="submit"
                                    class="block w-1/2 px-4 py-3 mx-auto mt-8 text-sm text-center text-white rounded-md bg-slate-800 lg:mx-0 hover:bg-slate-900">
                                    Order
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
