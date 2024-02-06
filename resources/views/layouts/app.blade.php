<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storekeeper App</title>
    <!-- Include any additional stylesheets or scripts here -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('product.form') }}">Add Product</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('transaction.history') }}">Transaction History</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Include any additional scripts here -->
</body>
</html>
