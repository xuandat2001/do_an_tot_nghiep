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
       @include('header')
        @yield('content')
       @include('footer')
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