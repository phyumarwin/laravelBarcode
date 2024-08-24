<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Barcode In Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <h1 class="text-danger pt-4 text-center mb-4">List of Products</h1>
            <hr>
            <div class="pb-2">
                <a href="/create" class="btn btn-success">New Product</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Product_Code</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    {{-- @dd($products) --}}
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        {{-- <td>{!! DNS1D::getBarcodeHTML("$product->product_code", 'PHARMA', 2.5, 70) !!}
                            NO - {{ $product->product_code }}
                        </td> --}}
                        <td>
                            {!! DNS1D::getBarcodeHTML("$product->product_code", 'PHARMA', 2, 50) !!}
                            {{-- <br> --}}
                            <span style="font-size: 18px; letter-spacing: 5px; line-height: 1;">{{ implode(' ', str_split($product->product_code)) }}</span>
                        </td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>