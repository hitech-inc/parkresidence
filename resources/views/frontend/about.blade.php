@extends('frontend.layouts.master')

@section('content')
<!-- Start of Background Area -->
<div class="background-area"> 
  <img src="images/slider/about.jpg" alt="" title="#slider-1-caption1"/>
  <div class="banner-content static-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content-wrapper">
            <div class="text-content text-center">
              <h3 class="title-small text-uppercase text-brown mb-30"><span class="tlt" data-in-effect="fadeInLeftBig" data-out-effect="fadeOutRight">Найдите дом своей мечты !</span></h3>
              <h1 class="title1 text-uppercase text-white mb-10"><span class="tlt" data-in-effect="rollIn" data-out-effect="fadeOutRight">Park residence</span></h1>
              <div class="banner-readmore mt-37">
                <a class="button slider-btn lemon" href="#">Читать больше</a>                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End of Background Area-->

<!-- Start breadcrumps -->
<div class="shortcode-area pt-100 pb-120" style="padding: 20px 0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">   
        <div class="padding">
          <ol class="breadcrumb"> 
            <li><a href="/">Главная</a></li> 
            <li class="active">O park residence</li> 
          </ol> 
        </div>    
      </div>
    </div>
  </div>
</div>
<!-- End breadcrumbs -->

<!--Start of About Area-->
<div class="about-area mt-130" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
         <div class="col-md-6"><img src="images/banner/3.png" alt=""></div>
         <div class="col-md-6">
            <div class="section-title mb-38 mt-31">
                <span class="opacity-text text-uppercase">О проекте</span>
                <h2 class="uppercase">У знайте больше о проекте <span class="text-color">Park residence</span></h2>
            </div>
            <p class="23"><span class="text-dark text-uppercase">Впервые в Казахстане и Центральной Азии.  </span> Уникальный клубный Park Residence  с особой инфраструктурой, который объединяет в территорию 36 гектаров: эксклюзивные виллы и таунхаусы, собственную парковую зону, современный фитнес центр, крытые  и открытые бассейны, детский сад, и ресторан изысканной кухни.</p>
            <p class="34"><span class="text-dark text-uppercase">Park Residence .  </span>клубный поселок класса ЛЮКС – выбор особенных людей, истинных ценителей высокого комфорта и элегантности, уважающие семейные традиции и заботящихся о своем здоровье и безопасности. Park Residence - это предпочтение леди и джентльменов с безупречным вкусом. Новый район для современного человека, полностью отличного от всего, к чему мы привыкли.</p>
            <div class="link mb-33">
              <a href="about.html#">Скачать каталог</a><span class="text pl-12">и просмотреть иллюстрации</span>
          </div>
      </div>
  </div>
</div>
</div>
<!-- End of About Area -->
<!--Start of Fun Factor Area-->
<div class="fun-factor-area pb-100 pt-60">
 <div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-3">
        <div class="single-fun-factor text-dark">
         <div class="text-icon mb-8 block">
          <img src="images/icons/home.png" alt="" class="mr-15">
          <h2><span class="counter">999</span></h2>
      </div>
      <h4>Количество домов</h4>
  </div>
</div>
<div class="col-md-3 col-sm-3">
    <div class="single-fun-factor text-dark">
     <div class="text-icon mb-8 block">
      <img src="images/icons/key.png" alt="" class="mr-15">
      <h2><span class="counter">720</span></h2>
  </div>
  <h4>Продано</h4>
</div>
</div>
<div class="col-md-3 col-sm-3">
    <div class="single-fun-factor text-dark">
     <div class="text-icon mb-8 block">
      <img src="images/icons/face.png" alt="" class="mr-15">
      <h2><span class="counter">750</span></h2>
  </div>
  <h4>Счастливые клиенты</h4>
</div>
</div>
<div class="col-md-3 col-sm-3">
    <div class="single-fun-factor text-dark">
     <div class="text-icon mb-8 block">
      <img src="images/icons/trophy.png" alt="" class="mr-15">
      <h2><span class="counter">120</span></h2>
  </div>
  <h4>Награды</h4>
</div>
</div>
</div>
</div>
</div>
<!--End of Fun Factor Area-->
<!--Start of Service Area-->
@include('frontend.partials._information')
<!--End of Service Area-->

<!--Start of bookHouse Area-->
@include('frontend.partials._bookHouse')
<!--End of bookHouse Area-->

<!--Start of Features Area-->
@include('frontend.partials._features')
<!--End of Features Area-->

<!--Start of Team Area-->
@include('frontend.partials._team')
<!--End of Team Area-->

<!--Testimonial Area Start-->
@include('frontend.partials._testimonials')
<!--End of Testimonial Area-->

<!--Start of Client area-->
@include('frontend.partials._clients')
<!--End of Client area-->
@endsection