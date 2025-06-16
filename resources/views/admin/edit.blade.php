@extends('layouts.focus')

@section('content')
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-5">
                <div class="overflow-hidden rounded">
                    @if ($post->thumbnail)
                        <img src="{{ asset('thumbnails/' . $post->thumbnail . '.jpg') }}" alt="{{ $post->title }}"
                            class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs">
                            No image
                        </div>
                    @endif
                </div>
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
            </div>
        </div>
    </div>
@endsection
