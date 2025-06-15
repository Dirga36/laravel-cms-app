@extends('layouts.focus')

@section('content')
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href={{ route('posts.index') }}>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Back
                </button>
            </a>

            <div class="space-y-5">
                <div
                    class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $post->title }}
                    </h5>
                    @if (Auth::check() && Auth::user()->id == $post->user_id)
                        <p class="italic text-gray-500">You</p>
                    @else
                        <p class="text-gray-500">{{ $post->user->name }}</p>
                    @endif
                    <p class="mt-3">{{ $post->created_at->diffForHumans() }}</p>
                    <span
                        class="text-lg bg-blue-100 text-blue-800 font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                        {{ $post->category->name }}
                    </span>
                    @if ($post->thumbnail)
                        <div class="basis-1/4 p-0 content-center justify-center my-5">
                            <img src="{{ asset('thumbnails/' . $post->thumbnail . '.jpg') }}" alt="{{ $post->title }}"
                                class="rounded-md object-cover w-full h-fit">
                        </div>
                    @endif
                    {{--
                        via storage:
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="object-cover w-full h-fit border border-slate-700 dark:border-slate-300">
                        --}}

                    <p class="font-normal text-gray-700 dark:text-gray-400 mb-5">
                        {{ Str::limit($post->content, 150) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
