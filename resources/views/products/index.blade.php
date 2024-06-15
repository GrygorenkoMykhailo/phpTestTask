<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="p-4 container-xl">
        <div class="btn-group group">
            <p>Some E-comm</p>
            <button class="btn btn-primary rounded" style="max-width: min-content;">
                Catalog
            </button>
        </div>
        <input type="text" name="" id="" class="p-1" style="width:50%;">
        <nav class="group">
            <a href="">Purchases</a>
            <a href="">Profile</a>
        </nav>
    </header>
    <div class="container-xl" style="padding: 0;">
        <div class="container">
            <aside>
                <ul class="list-group">
                    <li class="list-group-item"><a href="">Category1</a></li>
                    <li class="list-group-item"><a href="">Category2</a></li>
                    <li class="list-group-item"><a href="">Category3</a></li>
                    <li class="list-group-item"><a href="">Category4</a></li>
                    <li class="list-group-item"><a href="">Category5</a></li>
                    <li class="list-group-item"><a href="">Category6</a></li>
                    <li class="list-group-item"><a href="">Category7</a></li>
                    <li class="list-group-item"><a href="">Category8</a></li>
                    <li class="list-group-item"><a href="">Category9</a></li>
                    <li class="list-group-item"><a href="">Category10</a></li>
                </ul>
            </aside>
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target={{"#detailsModal".$product->id}} style="max-width: min-content;">
                        Details
                        </button>

                        <!-- Modal -->
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
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</body>
</html>