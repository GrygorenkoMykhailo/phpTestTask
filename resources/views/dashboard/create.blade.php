<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite e-comm dashboard</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Lite e-comm dashboard</h1>
        </div>
    </header>

    <main>
        <div class="wrapper">
            <h2>Add a New Product</h2>
            <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>

                <div>
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>

                <div>
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>

                <div>
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>

                <button type="submit">Add Product</button>
            </form>
        </div>
    </main>

    @vite('resources/css/dashboard-create.css')
</body>
</html>