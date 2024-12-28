<a href="{{ route('post.show', $post->slug) }}">
    <div class="post">
        <div class="main-container">
            <h1 class="text text-[45px] font-bold pb-3">{{ $post->title }}</h1>
            <div class="sub-title flex text-gray-500 pb-7">

                {{ $post->date }} | category

            </div>
            <img src="{{ url('storage/' . $post->image) }}" class="h-[250px] mx-auto">
            <p class="content text-[20px]">{{ $post->content }}</p>
        </div>
    </div>
</a>
