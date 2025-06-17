@extends('layouts.focus')

@section('content')
    <div class="py-10 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- flash messages --}}
                @if (session('success'))
                    <div class="bg-green-100 text-green-700 p-2 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 text-red-700 p-2 rounded">
                        {{ session('error') }}
                    </div>
                @endif

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
                        <label for="title" value={{ old('title') }}
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Title</label>
                        <input type="text" name="title" id="title" required value="{{ $post->title }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm" />
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category_id"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Category</label>
                        <select id="category_id" name="category_id" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm">
                            <option selected disabled>Select category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Thumbnail Upload -->
                    <div>
                        <label for="thumbnail"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Thumbnail</label>
                        <input id="thumbnail" name="thumbnail" type="file"
                            class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600" />
                        @error('thumbnail')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Content</label>
                        <div id="quill-editor" class="mt-1 bg-white dark:bg-gray-700" style="min-height:200px;"></div>
                        <textarea name="content" id="quill-editor-area" class="hidden">{{ $post->content }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
