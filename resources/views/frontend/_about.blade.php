@extends('frontend.layouts.master')

@section('content')
<style>
  @if ($currentUrl != null)
    a.about{
        color: #95c41f !important;
    }
  @endif
</style>

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
              <!-- <div class="banner-readmore mt-37">
                <a class="button slider-btn lemon" href="#">Читать больше</a>                  
              </div> -->
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
<div class="about-area mt-130" style="margin-top: 50px; padding-bottom: 50px;">
    <div class="container">
        <div class="row">
         <div class="col-md-6">
          <!-- <img src="images/banner/3.png" alt=""> -->
          <div class="aImgBlock">
            <img src="images/banner/203-166/3-1.png" alt="" class="wow fadeIn" data-wow-delay=".7s" data-wow-duration="1000ms">
            <img src="images/banner/203-166/3-2.png" alt="" class="wow fadeIn" data-wow-delay=".10s" data-wow-duration="2000ms">
            <img src="images/banner/203-166/3-3.png" alt="" class="wow fadeIn" data-wow-delay=".15s" data-wow-duration="3000ms">
            <img src="images/banner/203-166/3-4.png" alt="" class="wow fadeIn" data-wow-delay=".20s" data-wow-duration="4000ms">
          </div>
        </div>
         <div class="col-md-6">
            <div class="section-title mb-38 mt-31">
                <span class="opacity-text text-uppercase">О проекте</span>
                <h2 class="uppercase">У знайте больше о проекте <span class="text-color">Park residence</span></h2>
            </div>
            <p class="23"><span class="text-dark text-uppercase">Впервые в Казахстане и Центральной Азии.  </span> Уникальный клубный Park Residence  с особой инфраструктурой, который объединяет в территорию 36 гектаров: эксклюзивные виллы и таунхаусы, собственную парковую зону, современный фитнес центр, крытые  и открытые бассейны, детский сад, и ресторан изысканной кухни.</p>
            <p class="34"><span class="text-dark text-uppercase">Park Residence .  </span>клубный поселок класса ЛЮКС – выбор особенных людей, истинных ценителей высокого комфорта и элегантности, уважающие семейные традиции и заботящихся о своем здоровье и безопасности. Park Residence - это предпочтение леди и джентльменов с безупречным вкусом. Новый район для современного человека, полностью отличного от всего, к чему мы привыкли.</p>
            <!-- <div class="link mb-33">
              <a href="about.html#">Скачать каталог</a><span class="text pl-12">и просмотреть иллюстрации</span>
          </div> -->
      </div>
  </div>
</div>
</div>
<!-- End of About Area -->


<!--Start of bookHouse Area-->
@include('frontend.partials._bookHouse')
<!--End of bookHouse Area-->

<!--Start of Features Area-->
@include('frontend.partials._features')
<!--End of Features Area-->

<!--Start of Client area-->
@include('frontend.partials._clients')
<!--End of Client area-->
@endsection