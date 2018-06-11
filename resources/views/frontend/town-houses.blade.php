@extends('frontend.layouts.master')

@section('content')
<!-- Start of Background Area -->
<div class="background-area">	
	<img src="images/slider/cottages.jpg" alt="" title="#slider-1-caption1"/>
	<div class="banner-content static-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-content-wrapper">
						<div class="text-content text-center">
							<h3 class="title-small text-uppercase text-brown mb-30"><span class="tlt" data-in-effect="fadeInLeftBig" data-out-effect="fadeOutRight">Найдите дом своей мечты !</span></h3>
							<h1 class="title1 text-uppercase text-brown mb-10"><span class="tlt" data-in-effect="rollIn" data-out-effect="fadeOutRight">Park residence</span></h1>
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
						<li class="active">Таунхаусы</li>
					</ol> 
				</div>    
			</div>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!--Start of Cottages Area-->
<div class="property-area ptb-120 property-page" style="padding-top: 50px;">
	<div class="container">
		<div class="row">
			@forelse($townhouses as $townhouse)
			<div class="col-lg-4 col-md-6 col-sm-6 mb-40">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">

							<h4 class="text-white mb-12"><a href="#">{{ $townhouse->name }}</a></h4>
							<!-- <span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span> -->

						</div>
						<!-- <div class="fix pull_right">
							<h3>$52,354</h3>
						</div> -->
					</div>
					<div class="property-image">
						<a href="{{url('town-houses/' . $townhouse->slug)}}" class="block dark-hover"><img src="/images/houses/small_img/{{$townhouse->small_img}}" alt="">
							<span class="img-button text-uppercase">Узнать больше</span>
							<span class="p-tag bg-lemon">Продается</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>450 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>5</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>2</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			@empty <h3>Нет данных</h3>
			@endforelse

			{{ $townhouses->links() }}
			<div class="col-md-12">
				<div class="pagination-content text-center block">
					<ul class="pagination fix mt-40 mb-0">
						<li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="current"><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Cottages Area-->
@endsection