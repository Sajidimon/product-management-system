<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="container my-4">
        <h1>Product Management System</h1>
        <nav class="my-3">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Products</a>
            <a href="{{ route('products.create') }}" class="btn btn-success">Create Product</a>
        </nav>
        <hr>
    </header>

    <main class="container">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
