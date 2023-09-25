<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Submission Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
        }
        .result-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .image-container {
            text-align: center;
        }
    </style>
</head>
<body>
    @if(session()->has('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="container result-container">
        <h1 class="text-center mt-4">Form Submission Result</h1>
        <div class="mt-4">
            <p><strong>Product Name:</strong> {{ $result['productName'] }}</p>
            <p><strong>Product Description:</strong> {{ $result['productDescription'] }}</p>
            <p><strong>Stock:</strong> {{ $result['stock'] }}</p>
            <p><strong>Price:</strong> ${{ $result['price'] }}</p>
            <p><strong>Image:</strong></p>
            <div class="image-container">
                <img src="{{ asset('storage/images/' . $result['image']) }}" class="img-fluid mt-4" alt="Product Image">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
