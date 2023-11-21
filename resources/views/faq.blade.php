<x-app-layout>
    @section('title', 'Toshokan | FAQ Page')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="px-12 py-8 text-gray-900">
                    <p class="mb-10 text-3xl font-medium text-center text-slate-800">Frequently Asked Questions</p>
                    <div id="accordion-collapse" data-accordion="collapse" class="max-w-4xl mx-auto mb-10">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="font-medium text-slate-900">Toshokan - Modern Library</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden"
                            aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-600 dark:text-gray-700">Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Enim in nesciunt inventore nemo provident atque culpa
                                    laudantium quam sed consequatur, adipisci autem exercitationem dolorem soluta minus!
                                    Deserunt, aut, repellat nobis eligendi incidunt, iure nemo consectetur unde dolore
                                    repudiandae quis totam porro cupiditate consequatur exercitationem!
                                </p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span class="font-medium text-slate-900">Peraturan dan Kebijakan Meminjam Buku</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-600 dark:text-gray-700">Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Enim in nesciunt inventore nemo provident atque culpa
                                    laudantium quam sed consequatur, adipisci autem exercitationem dolorem soluta minus!
                                    Deserunt, aut, repellat nobis eligendi incidunt, iure nemo consectetur unde dolore
                                    repudiandae quis totam porro cupiditate consequatur exercitationem!
                                </p>
                                <ul class="text-gray-500 list-disc ps-5 dark:text-gray-400">
                                    <li>
                                        <p class="leading-relaxed tracking-wide">Customer mengambil buku di perpustakaan
                                            dengan
                                            menyertakan kode transaksi,
                                            maksimal 1 x 24 jam setelah melakukan transaksi.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="leading-relaxed tracking-wide">Selama proses peminjaman, customer
                                            wajib menjaga kondisi buku, tidak melepas tag buku, menambahkan coretan dan
                                            hal-hal lainnya yang dapat merusak nilai buku.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="leading-relaxed tracking-wide">Customer wajib mengembalikan buku
                                            sesuai dengan waktu pengembalian, jika melebihi waktu pengembalian, maka
                                            akun customer akan diblokir dan tidak dapat digunakan untuk melakukan
                                            transaksi.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="leading-relaxed tracking-wide">Denda akan berlaku bagi customer yang
                                            telat dalam mengembalikan buku, dengan biaya Rp.1000 / hari, customer wajib
                                            membayar denda saat pengembalian buku untuk membuka akses blokir akun.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span class="font-medium text-slate-900">Anda Punya Pertanyaan ? Hubungi Kami</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 rounded-b-xl dark:border-gray-700">
                                <p class="mb-2 text-gray-600 dark:text-gray-700">Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Enim in nesciunt inventore nemo provident atque culpa
                                    laudantium quam sed consequatur, adipisci autem exercitationem dolorem soluta minus!
                                    Deserunt, aut, repellat nobis eligendi incidunt, iure nemo consectetur unde dolore
                                    repudiandae quis totam porro cupiditate consequatur exercitationem!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
