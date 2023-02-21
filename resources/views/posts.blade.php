<!DOCTYPE html>
    <title>My Blog</title>

    <link href="/app.css" rel="stylesheet">

    <body>
        @foreach ($posts as $post)
            <article>
                <h1><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>
                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </body>
