<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Post') }}
        </h2>
    </x-slot>

    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-(--breakpoint-xl) px-4 lg:px-12">
            <div class="flex w-full justify-end">
                <a href={{ route('posts.create') }}>
                    <button type="button"
                        class="shadow-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Add ➕
                    </button>
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                @if ($posts->isNotEmpty())
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">Title</th>
                                <th class="px-6 py-3">Thumbnail</th>
                                <th class="px-6 py-3">Category</th>
                                <th class="px-6 py-3">Author</th>
                                <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr
                                    class="odd:bg-gray-500 even:bg-gray-400 border-b border-gray-200 dark:odd:bg-gray-900 dark:even:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $post->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="w-20 h-14 overflow-hidden rounded-sm">
                                            @if ($post->thumbnail)
                                                <img src="{{ asset('thumbnails/' . $post->thumbnail . '.jpg') }}"
                                                    alt="{{ $post->title }}" class="w-full h-full object-cover">
                                            @else
                                                <div
                                                    class="w-full h-full flex items-center justify-center text-xs bg-gray-200 text-gray-500 dark:bg-gray-700 dark:text-gray-300">
                                                    No image
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-300">
                                        {{ $post->category->name }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-300">
                                        {{ $post->user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @php $dropdownId = 'dropdown-' . $post->id; @endphp
                                        <div class="relative inline-block text-left">
                                            <button id="{{ $dropdownId }}-button"
                                                data-dropdown-toggle="{{ $dropdownId }}" type="button"
                                                aria-expanded="false" aria-controls="{{ $dropdownId }}"
                                                class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                                                ◽◽◽
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="{{ $dropdownId }}"
                                                class="z-10 hidden absolute right-0 mt-2 w-44 rounded-lg border border-slate-400 shadow-sm bg-white divide-y divide-gray-100 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="{{ $dropdownId }}-button">
                                                    <li>
                                                        <a href="{{ route('posts.edit', $post->id) }}"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('posts.destroy', $post->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-100 dark:text-red-400 dark:hover:bg-red-600 dark:hover:text-white">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('posts.show', $post->id) }}"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                            View
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <x-no-item />
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
