<!DOCTYPE html>
    <title>My Blog</title>

    <link href="/app.css" rel="stylesheet">

    <body>
        @foreach ($posts as $post)
            <article>
                {!! $post !!}
            </article>
        @endforeach
    </body>
