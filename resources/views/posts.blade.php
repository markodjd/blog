<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <h1>Posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
        @empty
            <p>No posts.</p>
        @endforelse
    </ul>
</body>

</html>
