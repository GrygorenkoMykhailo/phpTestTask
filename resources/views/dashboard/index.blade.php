<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container-xl p-4">
            <h1>Lite e-comm dashboard</h1>
        </div>
    </header>
    
    <div class="container-xl p-4">
        <div class="wrapper">
            <aside>
                <ul>
                    <li><a href="/dashboard">View all products</a></li>
                    <li><a href="/dashboard/create">Create new Product</a></li>
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
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target={{"#detailsModal".$product->id}} style="max-width: min-content;">Details</button>
                            <button type="button" class="btn btn-primary btn-danger delete-button" data-product-id={{$product->id}} style="max-width: min-content;">Delete</button>
                        </div>
                        
                        

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
    <input type="hidden" id="token" style="display:none;" value="{{csrf_token()}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @vite('resources/css/dashboard.css')
    @vite('resources/js/dashboard.js')
</body>
</html>