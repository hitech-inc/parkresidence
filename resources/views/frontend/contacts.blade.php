@extends('frontend.layouts.master')

@section('content')
<!--Start of Banner Area-->
<div class="banner-area bg-2 bg-overlay-2 ptb-165">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-title text-center">
					<h1 class="text-uppercase text-white">Контакты</h1>
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
						<li class="active">Контакты</li> 
					</ol> 
				</div>    
			</div>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!--Start of Google Map-->
<div class="google-map-area pt-120" style="padding-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--Start of Map Section-->
				<div id="contacts" class="map-area">
					<div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>
					<!--End of Map Section-->
				</div>
				<div class="contact-information">
					<div class="single-contact-info"> 
						<div class="pull_left contents ml-8"> 
							<img src="images/icons/c-map.png" alt="">
							<div class="info-text pl-40">
								<span class="block mb-7">Казахстан, ЮКО</span>
								<span class="block mb-7">г.Шымкент, ул. Мадели Кожа 48Б</span>
							</div>
						</div>
					</div>
					<div class="single-contact-info"> 
						<div class="contents"> 
							<img src="images/icons/c-phone.png" alt="">
							<div class="info-text pl-40">
								<span class="block mb-7">Телефон : +7 7252 953595</span>
								<span class="block mb-7">Телефон : +7 701 505 0807</span>
							</div>
						</div>
					</div>
					<div class="single-contact-info"> 
						<div class="pull_right contents mr-8"> 
							<img src="images/icons/c-globe.png" alt="">
							<div class="info-text pl-40">
								<span class="block mb-7">Email : info@example.com</span>
								<span class="block mb-7">Web : www.parkresidence.kz</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Google Map-->
<!--Start Contact Form Area-->
<div class="contact-form-area fix ptb-120">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h4 class="details-title text-center mb-43">Отправьте нам сообщение</h4>
				<form id="contact-form" action="http://themeshub.io/preview/dominno-preview/dominno/mail.php" method="post">
					<input type="text" name="name" class="mb-22" placeholder="Ваше имя">
					<input type="text" name="email" class="mb-22" placeholder="Ваш email">
					<textarea name="message" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
					<div class="col-10 fix text-center">
						<button type="submit" class="button submit-btn lemon mt-35">Отправить</button>
					</div>
					<p class="form-messege"></p>
				</form>
			</div>
		</div>
	</div>
</div>
<!--End of Contact Form Area-->
@endsection