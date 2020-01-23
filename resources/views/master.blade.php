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
        @yield('content')
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