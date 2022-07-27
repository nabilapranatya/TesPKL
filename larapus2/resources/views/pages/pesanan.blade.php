<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>RESTORANN</h1></center>
    <h1>Restoran ke - 1</h1>
    @if ($a == 'Ayam Goreng')
    <br> Pesanan : {{$a}}
    <br> Harga {{$a}} : Rp.15000
    @elseif ($a == 'Pizza')
    <br> Pesanan : {{$a}}
    <br> Harga {{$a}} : Rp.20000
    @elseif ($a == 'Tiramisu')
    <br> Pesanan : {{$a}}
    <br> Harga {{$a}} : Rp.30000
    @elseif ($a == 'Pasta')
    <br> Pesanan : {{$a}}
    <br> Harga {{$a}} : Rp.40000
    @elseif ($a == 'Lobster')
    <br> Pesanan : {{$a}}
    <br> Harga {{$a}} : Rp.50000
    @else 
    <br>
       {{$c}}
    @endif

    <h1>Restoran ke - 2</h1>
    @if ($b == 'Ayam Goereng')
    <br> Pesanan : {{$b}}
    <br> Harga {{$b}} : Rp.15000
    @elseif ($b == 'Pizza')
    <br> Pesanan : {{$b}}
    <br> Harga {{$a}} : Rp.20000
    @elseif ($b == 'Tiramisu')
    <br> Pesanan : {{$b}}
    <br> Harga {{$a}} : Rp.30000
    @elseif ($b == 'Pasta')
    <br> Pesanan : {{$b}}
    <br> Harga {{$b}} : Rp.40000
    @elseif ($b == 'Lobster')
    <br> Pesanan : {{$b}}
    <br> Harga {{$b}} : Rp.50000
    @else 
    <br>
       {{$c}}
    @endif
    
</body>
</html>