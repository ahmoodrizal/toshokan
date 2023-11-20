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
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div class="md:col-span-2">
                            <div class="md:w-4/5">
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
                                        class="px-3 py-2 font-medium uppercase text-sm text-white rounded-md {{ $user->status === 'suspend' ? 'bg-red-700' : 'bg-slate-700' }}">{{ $user->status }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-red-200">
                            AA
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
