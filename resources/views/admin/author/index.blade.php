  <x-app-layout>
      @section('title', 'Toshokan | Admin Author Dashboard')
      <div class="py-12">
          <div class="mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8">
              <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg ">
                  <div class="p-2">
                      {{ Breadcrumbs::render('authors') }}
                  </div>
              </div>
          </div>
          <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900">
                      @if (session('success'))
                          <x-alert>{{ session('success') }}</x-alert>
                      @endif
                      <div class="flex justify-end mb-3 ">
                          <a href="{{ route('admin.authors.create') }}"
                              class="px-3 py-2 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                              Create New Author
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
                                          Number of Books
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Action
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @forelse ($authors as $author)
                                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                          <td class="px-6 py-4">
                                              {{ $loop->iteration }}
                                          </td>
                                          <th scope="row"
                                              class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                              {{ $author->name }}
                                          </th>
                                          <td class="px-6 py-4">
                                              {{ $author->books_count }}
                                          </td>
                                          <td class="px-6 py-4">
                                              <div class="flex flex-row gap-x-3">
                                                  <a href="{{ route('admin.authors.edit', $author) }}"
                                                      class="text-emerald-700">Update</a>
                                                  <form action="{{ route('admin.authors.destroy', $author) }}"
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
                                          <th colspan="4" scope="row"
                                              class="px-6 py-4 font-semibold text-center text-gray-900 whitespace-nowrap dark:text-white">
                                              Authors Data Not Found
                                          </th>
                                      </tr>
                                  @endforelse
                              </tbody>
                          </table>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </x-app-layout>
