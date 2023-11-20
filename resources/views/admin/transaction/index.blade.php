<x-app-layout>
    @section('title', 'Toshokan | Admin Transaction Dashboard')
    <div class="py-12">
        <div class="mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg ">
                <div class="p-2">
                    {{ Breadcrumbs::render('transactions') }}
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <x-alert>{{ session('success') }}</x-alert>
                    @endif
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Transaction Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Customer Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Book Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Return Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fine
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($transactions as $transaction)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{ $loop->iteration }}
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $transaction->transaction_id }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $transaction->user->name }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $transaction->book->title }}
                                        </th>
                                        <td
                                            class="px-6 py-4 uppercase {{ $transaction->status === 'late' ? 'text-red-700' : '' }}">
                                            {{ $transaction->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ date('d F Y', strtotime($transaction->return_date)) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. {{ $transaction->fine ?? 0 }}
                                        </td>
                                        <td class="px-6 py-4 uppercase">
                                            <a href="{{ route('admin.transactions.edit', $transaction) }}"
                                                class="px-3 py-2 text-sm font-medium text-white rounded-md bg-emerald-600 hover:bg-emerald-800">
                                                Update
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th colspan="8" scope="row"
                                            class="px-6 py-4 font-semibold text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            Transactions Data Not Found
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
