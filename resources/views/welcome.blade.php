<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <article class="posts">
        @foreach ($posts as $post)
            <div class="post">
                <p>{{ $post->author }}</p>
                <p>{{ $post->title }}</p>
                <p>{{ $post->body }}</p>
                <form action="{{ route('post.wtf', $post->id)}}" method="POST">
                    @csrf
                    <p><button type="submit">Перейти на пост</button></p>
                </form>
                <p>{{ $post->created_at }}</p>
            </div>
        @endforeach
    </article>
    <article class="post-generate">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="text" name="author" placeholder="Author">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="body" placeholder="Body">
            <button type="submit">Create Post</button>
        </form>
    </article>
</body>
</html>
