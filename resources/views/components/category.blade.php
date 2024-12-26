<h1>{{ $category->name }}</h1>
<div class="posts">
    @foreach ($category->posts as $post)
        <div class="post">
            <a href="{{ route('post.show', $post->slug) }}">
                <h3>{{ $post->title }}</h3>
            </a>
         
        </div>
    @endforeach
</div>
