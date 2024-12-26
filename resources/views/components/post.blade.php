
<a href="{{ route('post.show', $post->slug) }}">
<div class="post">
    <div class="main-container">
        <h1 class="text text-[45px] font-bold pb-3">{{ $post->title }}</h1>
        <div class="sub-title flex text-gray-500 pb-7">

            date|category

        </div>
        {{-- <img src="{{ asset('images/image.jpg') }}" > --}}
        <p class="content text-[20px]">content</p>
    </div>
</div>
</a>
