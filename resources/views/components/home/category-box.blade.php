<div class="category-box mx-auto  py-8 mt-16">
    <div class="main-container">
        <div class="col-span-4">
            <div class="flex items-center justify-between ">
                <h2 class="title">{{ $category->name }}</h2>
                <a href="#" class="view-more hover:underline">View More</a>
            </div>

            <div class="f-carousel" id="carousel" x-init="window.Functions.initCarousel($el)">
                @foreach ($category->posts as $post)
                    <div class="f-carousel__slide">
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                            @component('components.home.post', ['post' => $post])
                            @endcomponent
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
