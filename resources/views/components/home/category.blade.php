<div class="category">
    <div class="col-span-4">
        <div class="flex items-center justify-between ">
            <h2 class="title">{{ $category->name }}</h2>
            <a href="#" class="view-more hover:underline">View More</a>
        </div>

        <div class="grid grid-cols-12 gap-5">
            @foreach ($category->posts as $post)
               @component('components.home.post', ['post' => $post])

               @endcomponent
            @endforeach
        </div>
    </div>
</div>
