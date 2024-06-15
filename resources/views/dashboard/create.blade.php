<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite e-comm dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="wrapper container-xl">
            <h1>Lite e-comm dashboard</h1>
        </div>
    </header>

    <main class="container-xl">
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
        <div class="container mt-5">
            <h2>Add a New Product</h2>
            <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea id="description" name="description" rows="4" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @vite('resources/css/dashboard-create.css')
</body>
</html>