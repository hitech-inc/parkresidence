@extends('frontend.layouts.master')

@section('content')

<style>
	@if ($currentUrl != null)
    a.rasp{
        color: #95c41f !important;
    }
  @endif
</style>

<!-- Start of Background Area -->
<div class="background-area">	
	<img src="images/slider/features.jpg" alt="" title="#slider-1-caption1"/>
	<div class="banner-content static-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-content-wrapper" style="margin-top: -100px;">
						<div class="text-content text-center">
							<h1 class="title1 text-uppercase text-brown mb-10"><span class="tlt" data-in-effect="rollIn" data-out-effect="fadeOutRight">PARK RESIDENCE</span></h1>
							<h3 class="title-small text-uppercase text-brown mb-30 mytitle-small"><span class="tlt" data-in-effect="fadeInLeftBig" data-out-effect="fadeOutRight">Новый стиль загородной жизни</span></h3>
							<div class="banner-readmore mt-37">
								<a class="button slider-btn lemon" href="/about">Читать больше</a>	                
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
						<li class="active">Расположение</li> 
					</ol> 
				</div>    
			</div>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- Location image Start -->
<div class="text-area pt-100 pb-100" style="padding-top: 0; padding-bottom: 0;">
	<div class="container">
		<img src="/images/location/location.jpg" alt="" style="max-width: 100%">
	</div>
</div>
<!-- Location image End -->

<!--Text Area Start-->
<div class="text-area pt-100 pb-100" style="padding-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mt-10">
					<p><strong>Park Residence</strong> расположен в стороне от шумных дорог, и в то же время недалеко от города и имеет уникальную транспортную доступность.</p>
				</div>
			</div>
			<div class="col-md-4">
				<ul class="locInfo">
					<li>Всего 10 минута езды на автомобиле до международного аэропорта Шымкент</li>
					<li>5 минуты до Административного Центра города</li>
					<li>3 минуты до Дендропарка</li>
					<li>4 минуты до Зоопарка</li>
					<li>Шаговая доступность до Назарбаев Интеллектуальной школы</li>
				</ul>
			</div>   
		</div>
	</div>
</div>
<!--End of Text Area-->
@endsection
