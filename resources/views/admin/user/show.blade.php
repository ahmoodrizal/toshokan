<x-app-layout>
    @section('title', 'Toshokan | User Detail')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between mb-12">
                        <p>Customer Personal Information</p>
                        @if ($user->status === 'suspend')
                            <form action="{{ route('admin.users.store', $user) }}" method="post">
                                @csrf
                                @method('put')
                                <button onclick="return confirm('Are you sure ?')"
                                    class="px-3 py-2 text-sm text-white rounded-md bg-slate-600 hover:bg-slate-700">
                                    Mark as Active
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-7">
                        <div class=" md:col-span-3">
                            <div class="">
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Name</p>
                                    <p class="text-sm font-medium text-slate-700">{{ $user->name }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Email</p>
                                    <p class="text-sm font-medium text-slate-700">{{ $user->email }}</p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Phone Number</p>
                                    <p class="text-sm font-medium text-slate-700">{{ $user->phone_number ?? 'Not Set' }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">City</p>
                                    <p class="text-sm font-medium text-slate-700">{{ $user->city ?? 'Not Set' }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Address</p>
                                    <p class="text-sm font-medium text-slate-700">{{ $user->address ?? 'Not Set' }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Date of Birth</p>
                                    <p class="text-sm font-medium text-slate-700">
                                        {{ $user->date_of_birth ?? 'Not Set' }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Affilation</p>
                                    <p class="text-sm font-medium text-slate-700">{{ $user->affilation ?? 'Not Set' }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-sm font-medium text-slate-700">Status</p>
                                    <span
                                        class="px-3 py-1 font-medium uppercase text-sm text-white rounded-full {{ $user->status === 'suspend' ? 'bg-red-700' : 'bg-slate-700' }}">{{ $user->status }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:px-10 md:col-span-4">
                            <p class="mb-2 text-sm font-medium text-slate-700">Latest Transactions</p>
                            <div class="grid grid-cols-6 mb-4">
                                <p class="text-sm font-semibold text-slate-800">No</p>
                                <p class="col-span-2 text-sm font-semibold text-slate-800">Date</p>
                                <p class="col-span-2 text-sm font-semibold text-slate-800">Transaction Id</p>
                                <p class="text-sm font-semibold text-slate-800">Status</p>
                            </div>
                            @forelse ($user->transactions as $transaction)
                                <div class="grid grid-cols-6 mb-3">
                                    <p class="text-sm font-medium text-slate-700">{{ $loop->iteration }}</p>
                                    <p class="col-span-2 text-sm font-medium text-slate-700">
                                        {{ $transaction->created_at->format('d M Y') }}</p>
                                    <a href="{{ route('admin.transactions.edit', $transaction) }}"
                                        class="col-span-2 text-sm font-semibold text-sky-700">
                                        {{ $transaction->transaction_id }}</a>
                                    <p class="text-sm font-medium uppercase text-slate-700">
                                        {{ $transaction->status }}</p>
                                </div>
                            @empty
                                <p class="mt-6 text-sm font-medium text-center text-slate-700">No Transaction Data</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
