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
        @foreach( $texts as $text )
          <div class="col-md-4 col-sm-12">
            <div class="main-block">
              <div class="title-block">
                <h4 class="f-title">{{$text->title}}</h4>
              </div>
              <img src="{{ 'images/textsblocks/' . $text->img }}" alt="" style="max-width: 100%" class="mImg">
              <div class="block-hidden"></div>
              <div class="desc-text">
                <h5>{{$text->title}}</h5>
                <p>{!! $text->text !!}</p>
              </div>
            </div>
          </div>
        @endforeach
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

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.main-block').hover(function(){
        //alert('hello');
        // this это значит обращаюсь к элементу в нутри блока .main-block, далее find и в нем узазываю класс элемента к которому нужно применить стили
        $(this).find('.f-title').fadeOut(100);
        $(this).find('div.desc-text').show(10).animate({
          top: '20',
        });

        $(this).find('.block-hidden').css({
          "width" : "100%",
          "height" : "100%",
          "opacity" : "1",
          "position" : "absolute",
          "top" : "0",
          "left" : "0",
          "background" : "rgba(0,0,0,0.7)",
          "transition" : "0.8s"
        });

      }, function(){
        $(this).find('div.desc-text').animate({top: '100%'}).hide(10);
        $(this).find('.f-title').fadeIn(10);
        $(this).find('.block-hidden').css({"opacity" : '0'});
      });
    });
  </script>
@endsection

width: 100%;
    height: 100%;
    opacity: 1;
    position: absolute; top: 0; left: 0;
    background: rgba(0,0,0,0.3);
    color: #fff;
    transition: 0.8s;