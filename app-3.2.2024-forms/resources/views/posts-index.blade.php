<!DOCTYPE html>
<html>
<head>
<title>All posts</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
        <li>{{ $post->title }}:
        {{ $post->description }}</li>
        @endforeach
    </ul>

    <button class="btn btn-primary"><a href="add-blog-post-form" class="text-light">Add post</a></button>
</body>
