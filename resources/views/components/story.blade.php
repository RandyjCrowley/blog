<main class="container mx-auto px-4 py-12 flex-grow prose">
    <article>
        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h1>
        <p class="text-gray-500 text-lg mb-2">{{ $author }} | {{ $date }} | {{ $readTime }} min read</p>
        <div class="text-gray-600 text-lg mb-6">
            <x-markdown>
                {!! $content !!}
            </x-markdown>
        </div>
    </article>
</main>
