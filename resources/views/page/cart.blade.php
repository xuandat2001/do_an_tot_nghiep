<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="giao_dien/cart/style.css">
</head>
<body>
    @extends('master')
    @section('content')
    <div class="content-cart">
        <div class="img-bg">
           <div class="container">
            <h1>GIỎ HÀNG</h1>
            <p><a href="../index.html">KOI BENTO - Nhà hàng Nhật></a><span> Giỏ Hàng</span></p>
           </div>
        </div>
        <div class="container">
            <div class="content-text">
                <p>Chưa Có Sản Phẩm nào trong Giỏ hàng</p>
                <a href="#">Quay Lại</a>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://kit.fontawesome.com/ead959d8f3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html>