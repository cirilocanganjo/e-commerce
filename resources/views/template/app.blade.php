<!DOCTYPE html>
<!-- saved from url=(0042)https://preview.colorlib.com/theme/estore/ -->
<html class="js sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers" lang="zxx"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield("title")</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/bootstrap.min.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/owl.carousel.min.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/flaticon.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/slicknav.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/animate.min.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/magnific-popup.css')}}">
<link rel="stylesheet"  type='text/css'  href="{{asset('./assets/fonts/fontawesome/fontawesome-all.min.css')}}" />
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/themify-icons.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/slick.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/nice-select.css')}}">
<link rel="stylesheet" type='text/css' href="{{asset('./assets/styles/style.css')}}">
<body style="overflow: visible;">



<header>

    <div class="header-area">
    <div class="main-header ">
    <div class="header-top top-bg d-none d-lg-block">
    <div class="container-fluid">
    <div class="col-xl-12">

    <div class="row d-flex justify-content-between align-items-center">

        <div class="header-info-left d-flex">
            <div class="flag">
            <img src="./eCommerce HTML-5 Template_files/header_icon.png" alt="">
            </div>
            <div class="select-this">
            <form action="">
            <div class="select-itms">
            <select name="select" id="select1" style="display: none;">
            <option value="">Angola</option>
            <option value="">SPN</option>
            <option value="">CDA</option>
            <option value="">USD</option>
            </select><div class="nice-select" tabindex="0"><span class="current">Angola</span><ul class="list"><li data-value="" class="option selected">AOA</li><li data-value="" class="option">SPN</li><li data-value="" class="option">CDA</li><li data-value="" class="option">USD</li></ul></div>
            </div>

            </form>
            </div>
            <ul class="contact-now">
            <li>+244 923 923 63 04 56</li>
            </ul>
        </div>



  </div>


    </div>
    </div>
    </div>
    <div class="header-bottom  header-sticky sticky-bar sticky">
    <div class="container-fluid">
    <div class="row align-items-center">

    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
    <div class="logo">
    <a href="#"><img src="./eCommerce HTML-5 Template_files/logo.png" alt=""></a>
    </div>
    </div>
    <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">

    <div class="main-menu f-right d-none d-lg-block">
    <nav >
    <ul id="navigation" class="navigation">
      <li><a href="#">Página Inicial</li>
      <li><a href="file:///C:/xampp/htdocs/business_ecommerse_vendas/eCommerce%20HTML-5%20Template_files/img/papel%20social/Slide1.PNG">Quem Somos</a></li>

      <li><a href="#">Menu da Loja</a>
      <ul class="submenu">
      <li><a href="#">entrar</a></li>
      @foreach($categories as $categorie)
        <li><a href="#" role="menuitem" tabindex="-1">{{$categorie->categoria}}</a></li>
      @endforeach
      </ul>
      </li>
      <li><a href="">Contactos</a></li>
      </ul>

    </nav>
    </div>
    </div>
    <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
    <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
    <li class="d-none d-xl-block">
    <div class="form-box f-right ">
    <input type="text" name="Search">
    <div class="search-icon">
    <i class="fas fa-search special-tag"></i>
    </div>
    </div>
    </li>
    <li class=" d-none d-xl-block">
    <div class="favorit-items">
    <i class="far fa-heart"></i>
    </div>
    </li>
    <li>
    <div class="shopping-card">
    <a href="#"><i class="fas fa-shopping-cart"></i></a>
    </div>
    </li>
    @guest
        <li class="d-none d-lg-block"> <a href="#" class="btn header-btn">Autenticação</a>
        </li>
    @endguest
    </ul>
    </div>

    <div class="col-12">
    <div class="mobile_menu d-block d-lg-none"><div class="slicknav_menu"><a href="https://preview.colorlib.com/theme/estore/#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
    <li><a href="#" role="menuitem" tabindex="-1">Pagina Inicial</a></li>
    <li><a href="file:///C:/xampp/htdocs/business_ecommerse_vendas/eCommerce%20HTML-5%20Template_files/img/papel%20social/Slide1.PNG" role="menuitem" tabindex="-1">Quem Somos</a></li>
    <li class="Novo slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="https://preview.colorlib.com/theme/estore/#" tabindex="-1">Produtos</a>
    <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
    <li><a href="https://preview.colorlib.com/theme/estore/product_list.html" role="menuitem" tabindex="-1"> Computadores</a></li>
    <li><a href="https://preview.colorlib.com/theme/estore/single-product.html" role="menuitem" tabindex="-1"> Impressoras</li>
    </ul>
    </li>
    <li class="slicknav_collapsed slicknav_parent"><a href="https://preview.colorlib.com/theme/estore/#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="https://preview.colorlib.com/theme/estore/blog.html" tabindex="-1">Blog</a>
    <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
    <li><a href="https://preview.colorlib.com/theme/estore/blog.html" role="menuitem" tabindex="-1">Blog</a></li>
    <li><a href="https://preview.colorlib.com/theme/estore/single-blog.html" role="menuitem" tabindex="-1">Blog Details</a></li>
    </ul>
    </li>
    <li class="slicknav_collapsed slicknav_parent"><a href="https://preview.colorlib.com/theme/estore/#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="https://preview.colorlib.com/theme/estore/#" tabindex="-1">Pages</a>
    <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
    <li><a href="https://preview.colorlib.com/theme/estore/login.html" role="menuitem" tabindex="-1">Entrar no sistema</a></li>

    </ul>
    </li>
    <li><a href="https://preview.colorlib.com/theme/estore/contact.html" role="menuitem" tabindex="-1">Contacto de loja</a></li>
    </ul></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</header>

<main>
    @yield("content")
</main>

<footer>

<div class="footer-area footer-padding">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">

<div class="footer-logo">
<a href="#"><img src="{{asset('./assets/images/logo2_footer.png')}}" alt=""></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Links de acesso</h4>
<ul>
<li><a href="file:///C:/xampp/htdocs/business_ecommerse_vendas/eCommerce%20HTML-5%20Template.html#">Sobre o Site</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#"> Offers &amp; Discounts</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#"> Get Coupon</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#"> Contact Us</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Novos Produtos</h4>
<ul>
<li><a href="https://preview.colorlib.com/theme/estore/#">Woman Cloth</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#">Fashion Accessories</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#"> Man Accessories</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#"> Rubber made Toys</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Suporte</h4>
<ul>
<li><a href="https://preview.colorlib.com/theme/estore/#">Frequently Asked Questions</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#">Terms &amp; Conditions</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#">Privacy Policy</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#">Privacy Policy</a></li>
<li><a href="https://preview.colorlib.com/theme/estore/#">Report a Payment Issue</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">

<div class="col-md-7 container ">

  <div class="footer-copy-right d-flex flex-column justify-content-center">
    <p>Copyright ©<script>document.write(new Date().getFullYear());</script> Todos os Direitos reservados 2023  | E-commerce desenvolvido  <i class="far fa-heart" aria-hidden="true"></i> por
    <a class="d-flex justify-content-center" href="#" target="_blank">Lisandra Emprendimentos</a>
    </p>
  </div>

</div>

<div class="col-md-2">
  <div class="footer-copy-right f-right">

    <div class="footer-social">
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-behance"></i></a>
    <a href="#"><i class="fas fa-globe"></i></a>
    </div>
  </div>

</div>


</div>
</div>
</div>

</footer>

<script type="text/javascript" async="" src="{{asset('/assets/js/analytics.js.download')}}" nonce="73887af9-4474-4a23-b5b7-2aed9ab54fca"></script><script defer="" referrerpolicy="origin" src="./eCommerce HTML-5 Template_files/s.js.download"></script><script nonce="73887af9-4474-4a23-b5b7-2aed9ab54fca">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<script src="{{asset('/assets/js/modernizr-3.5.0.min.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery-1.12.4.min.js.download')}}"></script>
<script src="{{asset('/assets/js/popper.min.js.download')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery.slicknav.min.js.download')}}"></script>

<script src="{{asset('/assets/js/owl.carousel.min.js.download')}}"></script>
<script src="{{asset('/assets/js/slick.min.js.download')}}"></script>

<script src="{{asset('/assets/js/wow.min.js.download')}}"></script>
<script src="{{asset('/assets/js/animated.headline.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery.magnific-popup.js.download')}}"></script>

<script src="{{asset('/assets/js/jquery.scrollUp.min.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery.nice-select.min.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery.sticky.js.download')}}"></script>

<script src="{{asset('/assets/js/contact.js.download')}}"></script>
<script src="./eCommerce HTML-5 Template_files/jquery.form.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery.validate.min.js.download')}}"></script>
<script src="{{asset('/assets/js/mail-script.js.download')}}"></script>
<script src="{{asset('/assets/js/jquery.ajaxchimp.min.js.download')}}"></script>

<script src="{{asset('/assets/js/plugins.js.download')}}"></script>
<script src="{{asset('/assets/js/main.js.download')}}"></script><a id="scrollUp"  style="position: fixed; z-index: 2147483647; display: block;"><i class="fa fa-arrow-up"></i></a>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
