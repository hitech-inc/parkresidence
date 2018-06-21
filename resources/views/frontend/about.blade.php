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
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <h4 class="f-title">ЗАСТРОЙЩИК</h4>
            <div class="desc-text">
              <h5>ЗАСТРОЙЩИК</h5>
              <p>OTAU GROUP ведущий  строительный холдинг, лидер на рынке недвижимости ЮКО. Холдинг работает с 2002 года и за это время заслужил репутацию профессионала и надежного партнера.  За годы работы OTAU GROUP заработала не только высочайшую репутацию лидера строительной индустрии, но и множество наград и дважды была признана ЛУЧШЕЙ СТРОИТЕЛЬНОЙ КОМПАНИЕЙ ЮЖНО КАЗАХСТАНСКОЙ ОБЛАСТИ.</p>
              <p>OTAU GROUP  меняет облик города и сам формат жизни, создавая продуманные архитектурные проекты.    Park Residence – новый район для современного человека, полностью отличного от всего, к чему МЫ привыкли. Компания OTAU GROUP строит масштабно без ущерба эстетике, с особым вниманием к деталям и комфорту.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <h4></h4>
            <div class="desc-text">

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="main-block">
            <img src="http://via.placeholder.com/426x600" alt="" style="max-width: 100%">
            <div class="desc-text">
              
            </div>
          </div>
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

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.main-block').hover(function(){
        //alert('hello');
        $('div.desc-text').css({"display" : "block", "z-index" : "99"});
        $('.f-title').css({"display" : 'none'});
      }, function(){
        $('div.desc-text').css({"display" : "none", "z-index" : "99"});
        $('.f-title').css({"display" : 'block'});
      });
    });
  </script>
@endsection