<x-app-layout>
    @section('title', 'Toshokan | Admin Transaction Edit')
    <div class="py-12">
        <div class="mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg ">
                <div class="p-2">
                    {{ Breadcrumbs::render('transaction', $transaction) }}
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 sm:w-5/6">
                    <p class="mb-6 text-base font-medium text-slate-800">Update Transaction <span
                            class="font-semibold text-indigo-800">{{ $transaction->transaction_id }}</span>
                    </p>
                    <form action="{{ route('admin.transactions.update', $transaction) }}" method="post">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            @csrf
                            @method('put')
                            <div class="">
                                <label for="status"
                                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                    Update Transaction Status
                                </label>
                                <select id="status" name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-2 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                                    <option @selected($transaction->status === 'pending') value="pending">Pending</option>
                                    <option @selected($transaction->status === 'active') value="active">Active</option>
                                    <option @selected($transaction->status === 'done') value="done">Done</option>
                                    <option @selected($transaction->status === 'late') value="late">Late</option>
                                </select>
                                <x-input-error class="" :messages="$errors->get('status')" />
                            </div>
                            <div class="">
                                <x-input-label for="note" :value="__('Note for Customer')" />
                                <x-text-input id="note" name="note" type="text" class="block w-full mt-1"
                                    :value="old('note', $transaction->note)" autofocus autocomplete="note" />
                                <x-input-error class="mt-2" :messages="$errors->get('note')" />
                            </div>
                        </div>
                        <button type="submit"
                            class="block px-3 py-2 mt-4 text-sm font-medium text-white rounded-md bg-slate-700 hover:bg-slate-800">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
