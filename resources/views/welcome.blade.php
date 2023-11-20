<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Toshokan - Modern Library</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    {{-- Navbar Section Start --}}
    @include('components.navbar')
    {{-- Navbar Section End --}}

    {{-- Hero Section Start --}}
    @include('components.hero')
    {{-- Hero Section End --}}

    {{-- Popular Books --}}
    <section id="popular">
        <div class="px-12 py-8 my-10 bg-slate-100">
            <div class="text-center">
                <p class="text-base font-medium tracking-widest uppercase md:text-md">Books Gallery</p>
                <p class="text-xl font-semibold tracking-widest md:text-3xl">Popular Books</p>
            </div>
            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-2 gap-6 overflow-hidden sm:gap-8 sm:grid-cols-3 xl:grid-cols-6">
                    @foreach ($popularBooks as $popular_book)
                        <div class="bg-stone-100 aspect-[4/6] shadow-md rounded-md cursor-pointer p-4">
                            <a href="{{ route('book-detail', $popular_book) }}">
                                <img src="{{ Storage::url('books/' . $popular_book->cover) }}" alt="book-cover"
                                    class="object-cover rounded-md shadow-md">
                                <p class="mt-4 text-sm font-medium">{{ $popular_book->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Popular Books --}}

    {{-- Latest Books --}}
    <section id="latest">
        <div class="px-12 py-8 my-10 bg-slate-100">
            <div class="text-center">
                <p class="text-base font-medium tracking-widest uppercase md:text-md">Books Gallery</p>
                <p class="text-xl font-semibold tracking-widest md:text-3xl">Latest Books</p>
            </div>
            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-2 gap-6 overflow-hidden sm:gap-8 sm:grid-cols-3 xl:grid-cols-6">
                    @foreach ($latestBooks as $latest_book)
                        <div class="bg-stone-100 aspect-[4/6] shadow-md rounded-md cursor-pointer p-4">
                            <a href="{{ route('book-detail', $latest_book) }}">
                                <img src="{{ Storage::url('books/' . $latest_book->cover) }}" alt="book-cover"
                                    class="object-cover rounded-md shadow-md">
                                <p class="mt-4 text-sm font-medium">{{ $latest_book->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Latest Books --}}

    {{-- Promo --}}

    {{-- Footer --}}
    @include('components.footer')
    {{-- Footer --}}
</body>

</html>
