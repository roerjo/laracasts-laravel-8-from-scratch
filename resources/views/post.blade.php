<!DOCTYPE html>
    <title>My Blog</title>

    <link href="/app.css" rel="stylesheet">

    <body>
        <article>
            <h1>{{ $post->title }}</h1>
            {!! $post->body !!}
        </article>

        <a href="/">Go Back</a>
    </body>
