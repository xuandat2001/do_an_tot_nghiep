<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koibento</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('giao_dien/style.css')}}">
</head>

<body>
    <section>
        <header>
            <div class="container-flult">
                <div class="row">
                    <div class="col-xl-12 infor">
                        <ul class="nav infor-nav">
                            <li class="nav-item info-item">
                                <a class="nav-link info-link" href="#">
                                    <span class="page-item"> <i class="fa fa-map-marker" aria-hidden="true"></i> Trung
                                        tâm
                                        Thương Mại Dịch vụ, Cổng 1B, khu VL1, Nam Từ Liêm</span>
                                </a>

                            </li>

                            <li class="nav-item info-item">
                                <a class="nav-link info-link" href="#" data-toggle="tooltip" title="Vietnamese!">
                                    <img src="giao_dien/img/1.png" class="lang">
                                </a>
                                <a class="nav-link info-link" href="#" data-toggle="tooltip" title="English!">
                                    <img src="giao_dien/img/2.png" class="lang">
                                </a>
                                <a class="nav-link info-link" href="#">
                                    <span class="page-item"> <i class="fa fa-phone" aria-hidden="true"></i>+84(0) 974
                                        704
                                        288</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="row menu-header">
                    <ul class="col-xl-5 col-md-5 nav menu1">
                        <li class=" nav-item">
                            <a class=" nav-link active" href="#">trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chef/index.html">menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">combo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">đầu bếp</a>
                        </li>
                    </ul>
                    <div class="col-xl-2 col-md-2 menu2">
                        <a class="logo" href="#"><img src="giao_dien/img/logo.png"></a>
                    </div>
                    <ul class="col-xl-5 col-md-5 nav menu1">
                        <li class="nav-item">
                            <a class="nav-link" href="#">về koi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">liên hệ</a>
                        </li>
                        <div id="app" class="menu-search">
                            <div class="search">

                                <form action=" " method="GET" class="form-search">
                                    <input type="search" placeholder="Search Here..." class="search-text" id="search"
                                        :class=" {active: isActive}">
                                    <a class="fa fa-search" aria-hidden="true" @click="myFunction()"></a>
                                </form>
                            </div>
                            <a href="#" class="cart" data-toggle="tooltip" title="Chưa có sản phẩm nào trong giỏ hàng">

                                <span class="circle" v-on:click="counter+=1">0 <i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="res">
                    <nav class="navbar navbar-expand-md  nav-bg">
                        <button class="navbar-toggler nav-bg-button" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse nav-menu" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="item">

                                    <form action="" method="">
                                        <div class="form-group">
                                            <label for="search"></label>
                                            <div class="form-search">
                                                <input type="search" id="search" placeholder="search...">
                                                <button type="submit"><i class="fa fa-search"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </li>
                                <li class=" nav-item">
                                    <a class=" nav-link active" href="#">trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">combo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">đầu bếp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">về koi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="giao_dien/img/1.png" alt="LANGUAGE"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="giao_dien/img/2.png" alt="LANGUAGE"></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="logo">
                        <img src="giao_dien/img/logo.png" alt="logo">
                    </div>
                    <div class="icon">
                        <a href="#" data-toggle="tooltip" title="Thêm giỏ hàng">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </div>





                </div>
            </div>
        </header>
        <div class="slide">

            <div class="carousel-content">
                <div class="owl-carousel owl-theme loop">
                    <div class="item item-slide">
                        <img src="giao_dien/img/resize.jpg" alt="slide">
                        <div class="text-slide ">
                            <h2>KOI BENTO <span>JANPNESE LUNCH BOX</span></h2>
                            <a href="" class="btn btn-outline-light">ORDER NOW</a>
                        </div>
                    </div>
                    <!-- <div class="item item-slide">
                        <img src="img/koi.png" alt="slide">
                        <div class="text-slide">
                             <h2>KOI BENTO <span>JANPNESE</span> <span>LUNCH BOX</span></h2>
                        </div>
                    </div> -->
                    <div class="item item-slide">
                        <img src="giao_dien/img/Shrimp-Eggs-giam-size.png" alt="slide">
                        <div class="text-slide ">
                            <h2>KOI BENTO <span>JANPNESE LUNCH BOX</span></h2>
                            <a href="" class="btn btn-outline-light">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content wow fadeInLeftBig " data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <h3>về
                            <span>koi</span>
                        </h3>
                        <p class="text-content1">KOI Bento là một dự án doanh nghiệp xã hội trong đó toàn bộ lợi nhuận
                            dùng để<br> giúp đỡ những thanh niên có hoàn cảnh khó khăn đang theo học tại REACH<br> – một
                            trong những NGO đạt được nhiều thành công tại Việt Nam.</p>
                        <p class="text-content2">KOI Bento chuyên cung cấp hộp cơm trưa Nhật Bản tới tận tay khách hàng.
                            Tất cả<br> các sản phẩm của KOI đều được chuẩn bị công phu bởi các đầu bếp dày dặn kinh<br>
                            nghiệm của REACH và các học sinh.</p>
                        <p class="text-content3">Chúng tôi luôn đảm bảo các suất ăn tươi ngon, giàu dinh dưỡng và chuẩn
                            bị bởi<br> những nguyên liệu tuyệt vời nhất. Chúng tôi luôn nỗ lực mang tới những món ăn<br>
                            chuẩn Nhật tới thực khách của KOI.</p>
                        <p class="text-content4"><strong>KOI BENTO – Hộp cơm trưa Nhật Bản tươi ngon và dinh dưỡng cho
                                tất cả mọi<br> người.</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu wow fadeInDown " data-wow-duration="1s" data-wow-delay="1s" data-spy="scroll"  id="demos"
            data-target="#demo" data-offset="1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12" id="demo">
                        <h3><strong>food menu</strong></h3>
                        <div class="line"></div>
                        <ul class="nav nav-menu   ">
                            <li class="nav-item menu-item">
                                <a href="#food-koi" class="nav-link menu-link">Show all</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="#food-koi1" class="nav-link menu-link">big bento</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="#food-koi2" class="nav-link menu-link">mini bento</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="#food-koi3" class="nav-link menu-link">sushi</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="row row-menu">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi1">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/koi.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food" id="demo">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi1">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/5.png" alt="koi">
                            </a>

                        </div>
                        <div class="name-food" id="food-koi1">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi1">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row  row-menu">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi1">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi1">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi1">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row row-menu ">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi2">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi2">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi2">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row  row-menu">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi2">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi2">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi2">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row  row-menu">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi3">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <button type="button" @click="countDown()">-</button>
                            <input type="number" name="number" v-model="counter">
                            <button type="buton" @click="countUp()">+</button>
                            <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi3">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="food-all" id="food-koi3">
                            <a href="">
                                <img width="377" height="251" src="giao_dien/img/6.png" alt="koi">
                            </a>
                        </div>
                        <div class="name-food">
                            <h4>Tao là đạt</h4>
                            <p>(1000đ)</p>
                            <form action="" method="">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="number" v-model="counter">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="servises wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <h3><strong>ĐẦU BẾP NHÀ HÀNG</strong></h3>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-12">
                        <img src="giao_dien/img/8.png" alt="KOI" width="350" height="350" class="rounded-circle">
                        <h4>NGUYỄN ĐỈNH</h4>
                        <p>chef de Cuisine</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <img src="giao_dien/img/9.png" alt="KOI" width="350" height="350" class="rounded-circle">
                        <h4>TRẦN DŨNG</h4>
                        <p>chef</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <img src="giao_dien/img/10.jpg" alt="KOI" width="350" height="350" class="rounded-circle">
                        <h4>HỌC SINH LỚP BẾP TẠI REACH</h4>
                        <p>Chef's assistant</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="information-koi wow rollIn" data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12 information">
                        <h3>TIN TỨC</h3>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-12 information">
                        <img src="giao_dien/img/saba-377x251.png" alt="koi">
                        <h4>
                            <a href="#">Cơm hộp Bento – điểm thú vị trong văn hóa ẩm thực Nhật Bản</a>
                        </h4>
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            <a href="#">13 Th3, 2018</a>
                        </div>
                        <p>Nhắc tới Nhật Bản, ai ai cũng nghĩ tới sự cần cù, tỉ mỉ và…</p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 information">
                        <img src="giao_dien/img/class-377x251.jpg " alt="koi">
                        <h4>
                            <a href="#">Câu chuyện về KOI – doanh nghiệp xã hội của REACH</a>
                        </h4>
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            <a href="#">13 Th3, 2018</a>
                        </div>
                        <p>KOI Bento là một doanh nghiệp xã hội của REACH trong đó 100% lợi nhuận…</p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 information">
                        <img src="giao_dien/img/Linh-2-377x251.jpg" alt="koi">
                        <h4>
                            <a href="#">KOI Bento – Đồng hành chắp cánh những ước mơ</a>
                        </h4>
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            <a href="#">13 Th3, 2018</a>
                        </div>
                        <p>Linh sinh ra ở một vùng quê nghèo miền núi tỉnh Thanh Hóa. Cô gái…</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row ">
                    <div class="col-xl-3 col-md-6 col-12">
                        <h3>About Food Coner</h3>
                        <p class="text-footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque
                            elit sit amet lorem fermentum.
                            <span>Nullam turpis ipsum, dapibus eu congue sit amet.</span>
                        </p>
                        <h5>Get In Touch</h5>
                        <div class="menu-footer">
                            <ul class="nav nav-menu">
                                <li class="nav-item item"><span class="fab fa-facebook-f link1"></span></li>
                                <li class="nav-item item"><span class="fab fa-twitter link2"></span></li>
                                <li class="nav-item item"><span class="fa fa-rss link3"></span></li>
                                <li class="nav-item item"><span class="fab fa-vk link4"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <h3>Twiter Posts</h3>
                        <ul>
                            <li class="text">
                                Ut aut reiciendis voluptatibus maiores
                                <a href="#">http://lkj.ewr.com</a>
                                alias, ut aut reiciendis.

                                <span>
                                    <i class="fab fa-twitter"></i>
                                    02 days ago
                                </span>
                            </li>
                            <li class="text">
                                Itaque earum rerum hic tenetur a sapiente delectus
                                <a href="#">http://uiubajaj.com</a>
                                ut aut
                                voluptatibus.
                                <span>
                                    <i class="fab fa-twitter"></i>
                                    03 days ago
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <h3>Popular Items</h3>
                        <img src="giao_dien/img/saba-377x251.png" style="width:255px" alt=" cá basa" class="img-footer">
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <h3>Newsletter</h3>
                        <p>Sed pellentesque elit sit amet lorem fermentum, vitae maximus tortor accumsan.</p>
                        <form action="" method="">
                            <input type="text" name="email" placeholder="EMAIL" class="form-control input">
                            <button type="submit" class="btn btn-footer">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="messege dropdown dropleft float-right">
                    <a href="#" class="btn dropdown-toggle" data-toggle="dropdown"><img src="giao_dien/img/cach-tat-tu-dong-luu-anh-tren-messenger-100.jpg" alt="messege" class="rounded-circle"></a>
                    <div class="dropdown-menu">
                         <a class="dropdown-item" href="#">Liên hệ TAO LÀ ĐẠT</a>

                     </div>
                </div>
            </div>
        </footer>
        <div class="footer">
            <p><a href="#">@KOIBENTO</a></p>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/ead959d8f3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>


    <script>
        new WOW().init();
    </script>
    <script>

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',

            nav: true,
            navText: ["<span class='ion-md-arrow-back'></span>", "<span class='ion-chevron-right'></span>"],
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });

    </script>

    <script>

        new Vue(
            {
                el: "#demos",
                data: {
                    counter: 0,

                },
                methods: {
                    countUp: function () {

                        this.counter++
                        return this.counter
                    },
                    countDown: function () {
                        if (this.counter < 1) {
                            this.counter == 0

                        }
                        else {
                            this.counter--
                            return this.counter
                        }
                    }

                }
            }
        )

    </script>
    <script>

        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
    <script>
        new Vue({
            el: "#app",
            data: {
                isActive: "true",
            },
            methods: {
                myFunction: function () {
                    document.getElementById('search').style.display = "inline-block";
                }
            }
        })

    </script>
</body>

</html>