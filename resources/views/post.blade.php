<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        small {
            font-size: 12px;
            color: #939393;
            font-style: italic;
        }

    </style>
</head>

<body>
    <h1>{{ $post->title }} <small>{{ $post->created_at->diffForHumans() }}</small></h1>
    <p>{{ $post->body }}</p>
    <a href="/posts">Go to posts</a>
</body>

</html>
