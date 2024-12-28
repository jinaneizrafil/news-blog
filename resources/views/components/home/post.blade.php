<div
    class="post p-2 col-span-4 bg-gray-100 rounded hover:bg-gray-200 hover:shadow-md focus:ring focus:ring-blue-300 transition">
    <a href="{{ route('post.show', $post->slug) }}">
        <div class="flex flex-col items-center pb-7">
            <div class="text hover:underline font-semibold flex text-center text-[16px] md:text-[18px]">{{ $post->title }}</div>

            <div class="sub-title flex text-gray-500 pb-7 text-[10px] md:text-[13px]">

                {{ $post->date->format('d-m-Y') }}|{{ $category->name }}

            </div>
            <img src="{{ url('storage/' . $post->image) }}">

            {{-- <div class="content pl-8">{{ $post->content }}</div> --}}
        </div>
    </a>
</div>
