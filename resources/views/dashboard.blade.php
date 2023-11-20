<x-app-layout>
    @section('title', 'Toshokan | My Dashboard')

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <x-alert>{{ session('success') }}</x-alert>
                    @endif
                    @if (auth()->user()->isSuspend())
                        <x-alert-danger>Status Anda Diblokir, Harap Selesaikan Pinjaman Buku Yang Telat</x-alert-danger>
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
                                        Message
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
                                        <td class="px-6 py-4">
                                            {{ $transaction->status !== 'pending' ? $transaction->note : 'Segera ambil buku di perpustakaan' }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th colspan="7" scope="row"
                                            class="px-6 py-4 font-semibold text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            You didn't have a rent book
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
