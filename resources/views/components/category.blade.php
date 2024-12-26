<h1>
    {{ $category->name }}</h1>
<div class="posts">
    <div class="grid grid-cols-12 gap-5">
        @foreach ($category->posts as $post)
            <div class="col-span-12 md:col-span-6 ">
              @component('components.home.post',['post'=>$post])

              @endcomponent
            </div>
        @endforeach
    </div>
</div>
