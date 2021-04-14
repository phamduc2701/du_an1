<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoa quả sạch </title>
    @include('clients.layouts.style')
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->

</head>

<body>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> seeFood162@gmail.com</li>
                                <li>Hoa quả sạch kính chào quý khách</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                @auth
                                <li style="list-style:none"><a href="" class="buy">Hi, {{ Auth::user()->name }}</a></li>
                                @endauth

                                @guest
                                <li style="list-style:none"><a href="{{ route('login') }}" class="buy"><i class="fa fa-user"></i>Login</a></li>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href=""><img src="" width="75px" alt=""><h2>Hoa Quả Sạch</h2></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>DANH MỤC</span>
                        </div>
                        @foreach ($category as $item)
                        <ul>
                            <li><a href="#">{{$item->name}}</a></li>
                        </ul>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tất cả danh mục
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Mời nhập tìm kiếm?">
                                <button type="submit" class="site-btn btn-primary">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0988.212.010</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('clients/img/hero/banner.jpg')}}" style="height:374px">
                        <div class="hero__text">
                            <span>Sản phẩm sạch</span>
                            <h2>HOA QUẢ <br />SẠCH 100%</h2>
                            <p>Hoa Quả Sạch chuỗi cửa hàng sạch</p>
                            <a href="#" class="primary-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <section class="categories">
        <div class="container">
           
            </div>
        </div>
    </section>
    <!-- Featured Section Begin -->
    <section class="featured spad" style="padding-top: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($product as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ $item->image }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h5><a href="#">{{ $item->name }}</a></h5>
                            <p>Giảm giá &nbsp;{{ $item->sale }}%</p>
                            <h6>{{ number_format($item->price)}}&nbsp;vnđ <span style="color:red">/Kg</span></h6>
                            <div class="text-center">

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('clients/img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('clients/img/banner/banner-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>TIN TỨC THỰC PHẨM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach ($post as $item)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{$item->image}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>{{$item->date}}</li>
                                <li><i class="fa fa-comment-o"></i> 6</li>
                            </ul>
                            <h5><a href="#">{{$item->name}}</a></h5>
                            <p>{{$item->content}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""><h2>See Food</h2></a>
                        </div>
                        <h4 style="color: blue;">Cửa hàng chính</h4>
                        <ul>
                            <li>Address: Số 162 Cầu Giấy, Hà Nội</li>
                            <li>Phone: 0988.212.010</li>
                            <li>Email: seeFood162@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Về chúng tôi</h6>
                        <ul>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Hỗ trợ</a></li>
                            <li><a href="#">Hợp tác</a></li>
                            <li><a href="#">Chế độ phục vụ</a></li>
                            <li><a href="#">Phản hồi</a></li>
                            <li><a href="#">Tin see food</a></li>
                        </ul>
                        
                        <ul>
                            <li><a href="#">Hà Nội</a></li>
                            <li><a href="#">Hồ Chí Minh</a></li>
                            <li><a href="#">Hải Phòng</a></li>
                            <li><a href="#">Quảng Ninh</a></li>
                            <li><a href="#">Yên Bái</a></li>
                            <li><a href="#">Thanh Hóa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Vui lòng phản hồi qua email</h6>
                        <p>Nhận thông tin cập nhật qua E-mail về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập nội dung..">
                            <button type="submit" class="site-btn">Gửi đi</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    @include('clients.layouts.script')
    <!-- Js Plugins -->
</body>

</html>