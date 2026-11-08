<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>
     @foreach ($products as $product)
    <p>This is product: {{ $product['name']}}, and the price is: {{$product['price']}}</p>
@endforeach

   </p>
</body>
</html>