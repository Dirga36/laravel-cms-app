@extends('layouts.focus')

@section('content')
    <div class="py-10 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <form action={{ route('posts.create') }} method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Header -->
                <div class="flex justify-between items-center mb-4">
                    <a data-tooltip-target="tooltip-default" href="{{ route('posts.index') }}"
                        class="inline-flex items-center text-blue-600 hover:underline text-sm font-medium">
                        🡨 Back
                    </a>
                    <div id="tooltip-default" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Back to posts
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm shadow-sm">
                        Save
                    </button>
                </div>

                <!-- Form Card -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 space-y-6">

                    <!-- Title -->
                    <div>
                        <label for="title"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Title</label>
                        <input type="text" name="title" id="title"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm" />
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Category</label>
                        <select id="category" name="category"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm">
                            <option selected disabled>Select category</option>
                            @foreach ($categories as $category)
                                <option value={{ $category->name }}>{{ $category->name }}</option>
                            @endforeach
                            <!-- Tambahkan sesuai kebutuhan -->
                        </select>
                    </div>

                    <!-- Thumbnail Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Thumbnail</label>
                        <input id="thumbnail" name="thumbnail" type="file"
                            class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600" />
                    </div>

                    <!-- Editor -->
                    <div>
                        <label for="editor"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Content</label>
                        <div id="editor">
                            <input type="text" id="editor" name="content">
                            </input>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Quill Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
@endsection
