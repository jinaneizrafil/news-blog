<div class="category pt-5 pb-5">
    <div class="main-container">
        <h1 class="text text-[30px] md:text-[45px] font-bold pb-3">{{ $category->name }}</h1>
        <div class="posts">
            <div class="grid grid-cols-12 gap-5">
                @foreach ($posts as $post)
                    <div class="col-span-12 md:col-span-6 ">
                        @component('components.home.post', ['post' => $post, 'category' => $category])
                        @endcomponent
                    </div>
                @endforeach
            </div>
        </div>
            <div class="mt-6">
                {{ $posts->links() }}
            </div>
    </div>
</div>

