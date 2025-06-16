@extends('layouts.focus')

@section('content')
    <div class="py-10 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <form action={{ route('categories.update', $category->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Header -->
                <div class="flex justify-between items-center mb-4">
                    <a data-tooltip-target="tooltip-default" href="{{ route('categories.index') }}"
                        class="inline-flex items-center text-blue-600 hover:underline text-sm font-medium">
                        🡨 Back
                    </a>
                    <div id="tooltip-default" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Back to categories
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm shadow-sm">
                        Save
                    </button>
                </div>

                <!-- Form Card -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                        <input type="text" name="name" id="name" value={{ $category->name }}
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm" />
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
