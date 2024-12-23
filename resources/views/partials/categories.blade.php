<section id="categories" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Product Categories</h2>
        <div class="row">
            <!-- Add product categories here -->
            <div class="col-md-4 mb-4 d-flex">
                @foreach ($categories as $category)
                    <div class="card text-center">
                        <img src="https://example.com/category1.jpg" class="card-img-top" alt="{{$category->description}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$category->name}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Repeat for other categories -->
        </div>
    </div>
</section>
