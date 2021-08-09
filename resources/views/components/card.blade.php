@props(['products'])   
    @foreach ($products as $product)
        <div class="card ms-5 me-5 bg-success" style="width: 18rem; height: 400px;">
            <img src={{ $product["img"]}} class="card-img-top h-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product["name"] }}</h5>
                <p class="card-title"> Price: ${{ $product["price"] }}</p>
                <p class="card-text">{{ $product["desc"] }}</p>
                <a href="#" class="btn btn-dark text-success">Add to Cart</a>
            </div>
        </div>
    @endforeach