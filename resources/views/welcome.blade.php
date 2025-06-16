@extends('layouts.focus')

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 flex flex-col">

        {{-- Navbar --}}
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">📁 CMS App</h1>
                <nav class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-blue-600 hover:text-blue-800">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-3 text-gray-700 hover:text-blue-600">Register</a>
                        @endif
                    @endauth
                </nav>
            </div>
        </header>

        {{-- Hero --}}
        <section class="flex-grow flex items-center justify-center">
            <div class="text-center px-6 py-24">
                <h2 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">
                    Manajemen Konten Semudah Klik
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">
                    Buat, Edit, dan Publikasi konten Anda dengan antarmuka intuitif dan powerfull.
                </p>
                <div class="flex justify-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Dashboard Anda
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Mulai Sekarang
                        </a>
                        @endif
                    </div>
                </div>
            </section>

            {{-- Features --}}
            <section class="py-16 bg-white dark:bg-gray-800">
                <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Editor Visual</h3>
                        <p class="text-gray-600 dark:text-gray-300">Quill editor berfitur lengkap dan responsif.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Thumbnail Preview</h3>
                        <p class="text-gray-600 dark:text-gray-300">Upload & lihat pratinjau langsung dalam satu klik.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Kategori & Tag</h3>
                        <p class="text-gray-600 dark:text-gray-300">Atur konten dengan taksonomi yang fleksibel.</p>
                    </div>
                </div>
            </section>

            {{-- Footer --}}
            <footer class="bg-gray-100 dark:bg-gray-800 py-6">
                <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-600 dark:text-gray-400">
                    © {{ date('Y') }} CMS App. All rights reserved.
                </div>
            </footer>

        </div>
    @endsection
