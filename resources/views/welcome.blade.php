<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayPal</title>
</head>
<body>
    <h1>Product: Laptop</h1>
    <h3>Price: 10$</h3>
    <form action="{{route('paypal')}}" method="POST">
        @csrf
        <input type="hidden"name="price" value="20">
        <input type="hidden"name="product_name" value="Laptop">
        <input type="hidden"name="quantity" value="1">
        <button type="submit">Pay with PayPal</button>
    </form>
</body>
</html>