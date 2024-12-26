<div class="post p-2 col-span-4 bg-gray-100 rounded hover:bg-gray-200 hover:shadow-md focus:ring focus:ring-blue-300 transition">
    <div class="flex flex-col items-center pb-7">
        <div class="text hover:underline font-semibold flex text-center">{{ $post->title }}</div>
        <div class="sub-title flex text-gray-500 pb-7">

            {{ $post->date }}|category

        </div>
    </div>
    <div class="content pl-8">{{ $post->content }}</div>

</div>
