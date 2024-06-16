<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container p-4">
        <div class="d-flex justify-content-between align-items-center left-group">
            <p class="fs-4">LA SHOOPA</p>
            <div class="vertical-line"></div>
            <ul>
                <li>Men</li>
                <li>Women</li>
                <li>About</li>
                <li>Blog</li>
                <li>Support</li>
            </ul>
        </div>
        <button class="rounded-pill">Buy</button>
    </header>

    <div class="poster py-4 flex">
        <div class="container p-4 flex" >
            <h1>NEW SEASON ARRIVALS</h1>
            <p class="mb-4">CHECK OUT ALL THE NEW TRENDS</p>
            <button class="py-2 px-5">SHOP NOW</button>
        </div>
    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center py-5 main-content">
        <div class="title-group pb-5">
            <div class="left"></div>
                <h3>LATEST PRODUCTS</h3>
            <div class="right"></div>
        </div>
    <main>
        @foreach ($products as $product)
            <div class="card p-4" style="position: relative;">
                @foreach ($product->images as $image)
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Product Image" style="card-img-top">
                @endforeach
                    <div class="about-product p-1 card-body" style="min-height: 170px">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                    </div>
                    <!-- Button trigger modal  -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target={{"#detailsModal".$product->id}} style="max-width: min-content;">
                    Details
                    </button>

                    <!-- Modal  -->
                <div class="modal fade" id={{"detailsModal".$product->id}} tabindex="-1" aria-labelledby="{{"detailsModal".$product->id}}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="{{"detailsModal".$product->id}}Label">{{$product->title}} description</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
    </div>

    <footer class="bg-dark text-white mt-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-uppercase">LA SHOOPA</h5>
                <p>Discover the latest trends and stay ahead of the fashion curve.</p>
            </div>
            <div class="col-md-2">
                <h5 class="text-uppercase">Shop</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Men</a></li>
                    <li><a href="#" class="text-white">Women</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="text-uppercase">Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="#" class="text-white">Blog</a></li>
                    <li><a href="#" class="text-white">Support</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-uppercase">Newsletter</h5>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="newsletterEmail" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="text-center py-3">
            © 2024 LA SHOOPA. All rights reserved.
        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</body>
</html>
