<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Form Product Submission</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="/" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" name="productName" id="productName">
                        @error('productName')
                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="productDescription">Product Description</label>
                        <input type="text" class="form-control" name="productDescription" id="productDescription">
                        @error('productDescription')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock" id="stock">
                        @error('stock')
                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price">
                        @error('price')
                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Upload Image (JPEG, PNG, JPG only)</label>
                        <input type="file" class="form-control" name="image" id="image" accept=".jpg, .jpeg, .png">
                        @error('image')
                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>    
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>