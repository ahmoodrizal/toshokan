  <x-app-layout>
      @section('title', 'Toshokan | Admin Book Dashboard')
      <div class="py-12">
          <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900">
                      @if (session('success'))
                          <x-alert>{{ session('success') }}</x-alert>
                      @endif
                      <div class="flex justify-end mb-3 ">
                          <a href="{{ route('admin.books.create') }}"
                              class="px-3 py-2 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                              Create New Book
                          </a>
                      </div>
                      <div class="relative overflow-x-auto">
                          <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                              <thead
                                  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                  <tr>
                                      <th scope="col" class="px-6 py-3">
                                          No
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Title
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Author
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Publisher
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Categories
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Action
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @forelse ($books as $book)
                                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                          <td class="px-6 py-4">
                                              {{ $books->firstItem() + $loop->index }}
                                          </td>
                                          <th scope="row"
                                              class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                              {{ $book->title }}
                                          </th>
                                          <td class="px-6 py-4">
                                              {{ $book->author->name }}
                                          </td>
                                          <td class="px-6 py-4">
                                              {{ $book->publisher->name }}
                                          </td>
                                          <td class="flex flex-wrap gap-2 px-6 py-4">
                                              @forelse ($book->categories as $category)
                                                  <span
                                                      class="px-2 py-1 text-xs text-white rounded-full bg-slate-800">{{ $category->name }}</span>
                                              @empty
                                                  <p class="font-medium">Didn't Have Category</p>
                                              @endforelse
                                          </td>
                                          <td class="px-6 py-4">
                                              <div class="flex flex-row gap-x-3">
                                                  <a href="{{ route('admin.books.edit', $book) }}"
                                                      class="text-emerald-700">Update</a>
                                                  <form action="{{ route('admin.books.destroy', $book) }}"
                                                      method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button onclick="return confirm('are you sure ?')"
                                                          class="text-rose-700">Delete</button>
                                                  </form>
                                              </div>
                                          </td>
                                      </tr>
                                  @empty
                                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                          <th colspan="6" scope="row"
                                              class="px-6 py-4 font-semibold text-center text-gray-900 whitespace-nowrap dark:text-white">
                                              Books Data Not Found
                                          </th>
                                      </tr>
                                  @endforelse
                              </tbody>
                          </table>
                      </div>
                      <div class="mt-8">
                          {{ $books->onEachSide(1)->links() }}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </x-app-layout>
