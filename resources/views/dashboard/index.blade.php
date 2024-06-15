<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Lite e-comm dashboard</h1>
        </div>
    </header>
    
    <div class="container">
        <div class="wrapper">
            <aside>
                <ul>
                    <li><a href="/dashboard">View all products</a></li>
                    <li><a href="/dashboard/create">Create new Product</a></li>
                </ul>  
            </aside>

            <main>
            @foreach ($products as $product)
                <div class="card">
                    <h2>{{ $product->title }}</h2>
                    <p>{{ $product->description }}</p>
                    <p>Price: ${{ $product->price }}</p>
                    @foreach ($product->images as $image)
                        <img src="{{ asset('storage/' . $image->path) }}" alt="Product Image">
                    @endforeach
                    <button type="button" class="delete-button" data-product-id="{{$product->id}}">Delete</button>
                    <div class="server-error" style="display: none;">An error occured while attempting to delete this product</div>
                </div>
            @endforeach
            </main>
        </div>
    </div>

    <footer>

    </footer>
    <input type="hidden" id="token" value="{{csrf_token()}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite('resources/css/dashboard.css')
    @vite('resources/js/dashboard.js')
</body>
</html>