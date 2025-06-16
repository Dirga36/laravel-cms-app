@extends('layouts.focus')

@section('content')
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <nav class="bg-white border-gray-200 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
                    <a href={{ route('posts.index') }} class="flex items-center space-x-3 rtl:space-x-reverse">
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-hidden focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-6 h-6 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
                            </svg>
                            Back
                        </button>
                    </a>
                    <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <a href="#"
                            class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                        <button data-collapse-toggle="mega-menu" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mega-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                        <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                                    class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                    Company <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <div id="mega-menu-dropdown"
                                    class="absolute z-10 hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                        <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Library
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Resources
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Pro Version
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                        <ul class="space-y-4">
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Newsletter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Playground
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    License
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-4">
                                        <ul class="space-y-4">
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Contact Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Support Center
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                    Terms
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
                <!-- Include stylesheet -->
                <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

                <!-- Create the editor container -->
                <div id="editor">
                    <p> {{ $post->content }}</p>
                </div>

                <!-- Include the Quill library -->
                <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

                <!-- Initialize Quill editor -->
                <script>
                    const quill = new Quill('#editor', {
                        theme: 'snow'
                    });
                </script>
            </div>
            <div class="overflow-hidden rounded-sm">
                @if ($post->thumbnail)
                    <img src="{{ asset('thumbnails/' . $post->thumbnail . '.jpg') }}" alt="{{ $post->title }}"
                        class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs">
                        No image
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
