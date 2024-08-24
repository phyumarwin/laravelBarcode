<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row juctify-content-md-center">
            <div class="col-md-9">
                <div class="card px-5 mt-3 shadow">
                    <h1 class="text-primary pt-4 text-center mb-4">Add New Product</h1>
                    <form action="/store" method="post">
                        @csrf
                        <label for="">Name:</label>
                        <input type="text" class="form-control mb-3" name="name" required>
                        <label for="">Price:</label>
                        <input type="text" class="form-control mb-3" name="price" required>
                        <label for="">Description:</label>
                        <textarea class="form-control mb-3" name="description" cols="30" rows="5" required></textarea>
                        <button type="submit" class="btn btn-success col-md-3">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>