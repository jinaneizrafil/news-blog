<div class="container mx-auto  py-8 mt-16">
    <div class="main-container">

        <div class="">

               
                <div class="col-span-4 bg-white shadow-lg rounded-lg p-4">
                    <h2 class="text-lg font-bold mb-4">{{ $category->name }}</h2>
                    <div class="grid grid-cols-12 gap-5">
                        @foreach ($category->posts as $post)
                            <div class="p-2 col-span-4 bg-gray-100 rounded hover:bg-gray-200 transition">
                                <a href="#" class="text-blue-600 hover:underline">{{ $post->title }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>

        </div>
    </div>
</div>
