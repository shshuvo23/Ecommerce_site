<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="div-one">
        <h5>Dear {{$value['name']}},</h5><p>Thankyou for purchase product from us</p><br>
        <h4>Order no: {{$value['order_no']}} </h4>
        <p>Product Name: {{$value['product_name']}}</p><p>Quantity: {{$value['quantity']}}</p>
        <h5>Your Bill:{{$value['total']}}</h5>
        <hr/>
        <p>Thank You</p>

    </div>

</body>
</html>
