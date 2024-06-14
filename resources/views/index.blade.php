<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <button></button>
    </header>
    <div class="container-lg">
            <aside>
                <ul>
                    <li><a href="">Category1</a></li>
                    <li><a href="">Category2</a></li>
                    <li><a href="">Category3</a></li>
                    <li><a href="">Category4</a></li>
                    <li><a href="">Category5</a></li>
                    <li><a href="">Category6</a></li>
                    <li><a href="">Category7</a></li>
                    <li><a href="">Category8</a></li>
                    <li><a href="">Category9</a></li>
                    <li><a href="">Category10</a></li>
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
                    </div>
                @endforeach
            </main>
        </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @vite('resources/css/app.css')
</body>
</html>