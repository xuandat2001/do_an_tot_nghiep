<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Bento</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="giao_dien/show/mini_bento/style.css">
</head>
<body>
    @extends('master')
    @section('content')
    <checkout>
    <div class="container-flult">
       <div class="checkout ">
           <div class="overlay"></div>
                   <div class="checkout-text">
                       <h2 class="text">về koi</h2>
                   <div class="koi">
                       <a href="#" class="koibento">koi bento - jabanese restaurant</a>
                   </div> 
                   </div>           
    </div>
    </div>   
</checkout> 
<!--end header-->
<!--start menu-->

    <div class="menu-show">
            <div class="container">
                <div class="all-menu">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">show all</a>
                        </li>
                        <li class="nav-item">  <a href="#" class="nav-link">big bento</a></li>
                        <li class="nav-item">  <a  href="#" class="nav-link">mini bento</a></li>
                        <li class="nav-item"> <a href="#" class="nav-link">shushi</a></li>
                    </ul>
                </div>
                <div class="show-all">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                          
                            <div class="row child1">
                                <div class=" col-xl-7 ">    
                                    <a href="#">
                                    <img src="giao_dien/show/mini_bento/img/suon.png" style="margin:50px 0" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                                <div class="name-food col-xl-5 ">
                                    <h4>lươn nhật sốt teri</h4>
                                    <p>1000đ</p>
                                    <form action="" method="">
                                        <button type="button">-</button>
                                        <input type="number" name="number">
                                        <button type="buton">+</button>
                                        <button type="submit" class="add-cart">ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row child1">
                                <div class=" col-xl-7 ">    
                                    <a href="#">
                                    <img src="giao_dien/show/mini_bento/img/suon.png" style="margin:50px 0" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                                <div class="name-food col-xl-5 ">
                                    <h4>lươn nhật sốt teri</h4>
                                    <p>1000đ</p>
                                    <form action="" method="">
                                        <button type="button">-</button>
                                        <input type="number" name="number">
                                        <button type="buton">+</button>
                                        <button type="submit" class="add-cart">ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row child1">
                                <div class=" col-xl-7 ">    
                                    <a href="#">
                                    <img src="giao_dien/show/mini_bento/img/suon.png" style="margin:50px 0" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                                <div class="name-food col-xl-5 ">
                                    <h4>lươn nhật sốt teri</h4>
                                    <p>1000đ</p>
                                    <form action="" method="">
                                        <button type="button">-</button>
                                        <input type="number" name="number">
                                        <button type="buton">+</button>
                                        <button type="submit" class="add-cart">ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="row child1">
                                <div class=" col-xl-7 ">    
                                    <a href="#">
                                    <img src="giao_dien/show/mini_bento/img/suon.png" style="margin:50px 0" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                                <div class="name-food col-xl-5">
                                    <h4>lươn nhật sốt teri</h4>
                                    <p>(1000đ)</p>
                                    <form action="" method="">
                                        <button type="button">-</button>
                                        <input type="number" name="number">
                                        <button type="buton">+</button>
                                        <button type="submit" class="add-cart">ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row child1">
                                <div class=" col-xl-7 ">    
                                    <a href="#">
                                    <img src="giao_dien/show/mini_bento/img/suon.png" style="margin:50px 0" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                                <div class="name-food col-xl-5 ">
                                    <h4>lươn nhật sốt teri</h4>
                                    <p>(1000đ)</p>
                                    <form action="" method="">
                                        <button type="button">-</button>
                                        <input type="number" name="number">
                                        <button type="buton">+</button>
                                        <button type="submit" class="add-cart">ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>       
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