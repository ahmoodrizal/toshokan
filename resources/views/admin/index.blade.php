<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 mb-4 text-gray-900">
                    <div class="grid grid-cols-1 text-center sm:gap-x-8 sm:gap-y-8 gap-y-4 sm:grid-cols-4 sm:h-96">
                        <a href="{{ route('admin.users.index') }}"
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                                stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            <p class="font-medium tracking-wide">Users Data</p>
                        </a>
                        <div
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>

                            <p class="font-medium tracking-wide">Books Data</p>
                        </div>
                        <div
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>

                            <p class="font-medium tracking-wide">Authors Data</p>
                        </div>
                        <a href="{{ route('admin.publishers.index') }}"
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>
                            <p class="font-medium tracking-wide">Publishers Data</p>
                        </a>
                        <a href="{{ route('admin.categories.index') }}"
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>
                            <p class="font-medium tracking-wide">Categories Data</p>
                        </a>
                        <div
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>

                            <p class="font-medium tracking-wide">Transactions Data</p>
                        </div>
                        <div
                            class="flex flex-row items-center justify-center py-3 rounded-md cursor-pointer sm:col-span-2 sm:flex-col bg-slate-300 sm:gap-y-2 gap-x-2">
                            <p class="font-medium tracking-wide">Upcoming Menu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
