@props(['post'])

<article
    {{ $attributes->merge(['class' => "transition-colors duration-301 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"]) }}>
    <div class="py-7 px-5">
        <div>
            <img src="/images/illustration-2.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="mt-9 flex flex-col justify-between">
            <header>
                <div class="space-x-3">
                    <a href="/categories/{{ $post->category->slug }}"
                        class="px-4 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 9px">{{ $post->category->name }}</a>
                </div>

                <div class="mt-5">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="mt-3 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-5">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-9">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-4">
                        <h4 class="font-bold">{{ $post->author->name }}</h5>
                        <h5>Mascot at Laracasts</h6>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}"
                        class="transition-colors duration-301 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
