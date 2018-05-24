@extends('frontend.layouts.master')

@section('content')
<!--Start of Banner Area-->
<!-- Класс bg-overlay-2 придает темный фон -->
<div class="banner-area bg-2 ptb-165">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-title text-center">
					<h1 class="text-uppercase text-white">Виртуальный тур</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Banner Area-->

<!-- Start breadcrumps -->
<div class="shortcode-area pt-100 pb-120" style="padding: 20px 0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">   
				<div class="padding">
					<ol class="breadcrumb"> 
						<li><a href="/">Главная</a></li> 
						<li class="active">3D-тур</li> 
					</ol> 
				</div>    
			</div>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!--Start of Tour Area-->
<div class="tour-area mb-120 pt-90 shortcode" style="padding-top: 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title mb-40 mt-31 text-center">
					<span class="opacity-text text-uppercase center">VIDEO тур</span>
					<h2 class="uppercase mb-25">Тур по Park residence</h2>
					<p class="pb-15">Park residence<br> 3D tour</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 pr-0">
				<iframe src="https://player.vimeo.com/video/8512929?title=0&byline=0&portrait=0" width="775" height="436"></iframe>
			</div>
			<div class="col-md-4 pl-20">
				<div class="mb-13">
					<iframe src="https://player.vimeo.com/video/7558756?title=0&byline=0&portrait=0" width="375" height="211"></iframe>
				</div>
				<iframe src="https://player.vimeo.com/video/63953556?title=0&byline=0&portrait=0" width="375" height="211"></iframe>
			</div>
		</div>
	</div>
</div>
<!--End of Tour Area-->
@endsection