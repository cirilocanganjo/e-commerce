@extends("/template/app")
@section("title" , "Página inicial, venda de produtos electrônicos")
@section("content")


    <div class="slider-area ">



    <div class="slider-active slick-initialized slick-slider">

    <div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 2698px;"><div class="single-slider slider-height slick-slide slick-active" data-background="assets/img/hero/h1_hero.jpg" data-slick-index="0" style="width: 1349px; position: relative; left: 0px; top: 0px; z-index: 900; opacity: 1; background-image: url(&quot;assets/img/hero/h1_hero.jpg&quot;);">
    <div class="container">

    <div class="row d-flex align-items-center justify-content-between">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block ">
        <div class="hero__img " data-animation="bounceIn" data-delay=".4s" style="animation-delay: 0.4s;">
        <img class='mx-5 img-fluid' src="{{asset('./assets/img/port-hp156-n4120-hd-4g-500gb-w11h-preto.jpg')}}" alt="">
        </div>

        </div>

        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">

            <div class="hero__caption">
            <span data-animation="fadeInRight" data-delay=".4s" class="" style="animation-delay: 0.4s;">60% Desconto</span>
            <h1 data-animation="fadeInRight" data-delay=".6s" class="" style="animation-delay: 0.6s;">PC/portatil <br> Hp</h1>
            <p data-animation="fadeInRight" data-delay=".8s" class="" style="animation-delay: 0.8s;">Melhor coleção para sua escolha 2023!</p>

            <div class="hero__btn" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
            <a href="#" class="btn hero-btn">Compre já</a>
            </div>
            </div>

        </div>

    </div>

    </div>
    </div>
    <div class="single-slider slider-height slick-slide" data-background="assets/img/hero/h1_hero.jpg" data-slick-index="1" style="width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 800; opacity: 0; background-image: url(&quot;assets/img/hero/h1_hero.jpg&quot;);">

    <div class="container">
    <div class="row d-flex align-items-center justify-content-between">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
    <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
    <img src="./eCommerce HTML-5 Template_files/hero_man.png" alt="">
    </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
    <div class="hero__caption">
    <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
    <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
    <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>

    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
    <a href="https://preview.colorlib.com/theme/estore/industries.html" class="btn hero-btn">Shop Now</a>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>

    </div>
    </div>


    <section class="category-area section-padding30">
    <div class="container-fluid">


        <div class="row">
        <h2 class='text-center mb-2'>Novidades pré-lançamento!</h2>
        @for($i=1; $i<=3; $i++)
            <div class="col-xl-4 col-lg-6">
            <div class="single-category mb-30">
            <div class="category-img">
            <img src="{{asset('/assets/images/cat1.jpg')}}" alt="">
            <div class="category-caption">
            <h2>Vestuários femeninos</h2>
            <span class="best"><a class='fw-bold' href="#">80.000 AO</a></span>
            <span class="collection">Novas coleções</span>
            </div>
            </div>
            </div>
            </div>
        @endfor
    </div>






    </div>
    </section>


    <section class="latest-product-area padding-bottom">
    <div class="container">
        <div class="row product-btn d-flex justify-content-end align-items-end">
            <div class="container text-center">
            <div class="section-tittle mb-30">
            <h2>Produtos disponíveis</h2>
            </div>
            </div>
            </div>




    <div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <div class="row">

    <!-- Produtos disponíveis -->
    @foreach($products as $product)
        <div class="col-xl-4 col-lg-4 col-md-6">

            <div class="single-product mb-60">
            <div class="product-img">
            <img src="{{asset('assets/img/mouse-ewent-mini-usb-optico-1000dpi-preto.jpg')}}" alt="">
            <div class="new-product">
            <span>{{$product->descricao}}</span>
            </div>
            </div>
            <div class="product-caption">
                <div class="product-ratting">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star low-star"></i>
                <i class="far fa-star low-star"></i>
                </div>

            <div class="d-flex justify-content-center align-items-center">
            <a id='chart' class="text-dark mx-1" href=""><i class='fas fa-shopping-cart fa-2x'></i></a>
            <span class='fs-2 fw-bold'>{{$product->preco."KZ"}} </span>
            </div>

            </div>
            </div>

        </div>
    @endforeach





    </div>
    </div>

    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product4.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product5.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product6.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product2.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product3.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product1.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product2.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product3.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product1.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product4.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product6.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product5.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
    <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product1.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product2.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product3.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product4.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product5.png" alt="">
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="single-product mb-60">
    <div class="product-img">
    <img src="./eCommerce HTML-5 Template_files/product6.png" alt="">
    <div class="new-product">
    <span>New</span>
    </div>
    </div>
    <div class="product-caption">
    <div class="product-ratting">
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star low-star"></i>
    <i class="far fa-star low-star"></i>
    </div>
    <h4><a href="https://preview.colorlib.com/theme/estore/#">Green Dress with details</a></h4>
    <div class="price">
    <ul>
    <li>$40.00</li>
    <li class="discount">$60.00</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </section>


    <div class="gallery-wrapper lf-padding">
    <div class="gallery-area">
    <div class="container-fluid">
    <div class="row">
    <div class="gallery-items">
    <img src="./eCommerce HTML-5 Template_files/gallery1.jpg" alt="">
    </div>
    <div class="gallery-items">
    <img src="./eCommerce HTML-5 Template_files/gallery2.jpg" alt="">
    </div>
    <div class="gallery-items">
    <img src="./eCommerce HTML-5 Template_files/gallery3.jpg" alt="">
    </div>
    <div class="gallery-items">
    <img src="./eCommerce HTML-5 Template_files/gallery4.jpg" alt="">
    </div>
    <div class="gallery-items">
    <img src="./eCommerce HTML-5 Template_files/gallery5.jpg" alt="">
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection
