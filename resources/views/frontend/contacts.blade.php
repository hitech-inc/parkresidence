@extends('frontend.layouts.master')

@section('content')
<!--Start of Banner Area-->
<!-- Класс bg-overlay-2 придает темный фон -->
<div class="banner-area bg-2 ptb-165">
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
					<!-- <div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div> -->
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4895.27257631729!2d69.58868927840562!3d42.38246798611687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDIyJzU4LjYiTiA2OcKwMzUnMjYuOSJF!5e1!3m2!1sru!2skz!4v1528192267461" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
					<div id="map" style="width: 100%; height: 475px;"></div>
					<!--End of Map Section-->
				</div>
				<div class="contact-information">
					<div class="single-contact-info"> 
						<div class="pull_left contents ml-8"> 
							<img src="images/icons/c-map.png" alt="">
							<div class="info-text pl-40">
								<span class="block mb-7">Казахстан, ЮКО</span>
								<span class="block mb-7">ул. К. Тулеметова — угол ул. Утегенова</span>
							</div>
						</div>
					</div>
					<div class="single-contact-info"> 
						<div class="contents"> 
							<img src="images/icons/c-phone.png" alt="">
							<div class="info-text pl-40">
								<span class="block mb-7">Телефон : +7 (7252) 95-35-95</span>
								<span class="block mb-7">Телефон : +7 (701) 911-77-44</span>
								<span class="block mb-7">Телефон : +7 (701) 505-08-07</span>
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

@section('scripts')

<script type="text/javascript">
  ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){     
        myMap = new ymaps.Map("map", {
            center: [42.38217392, 69.59299179],
            zoom: 16
        });

        myPlacemark = new ymaps.Placemark([42.38294, 69.590929], { 
            hintContent: 'Park Residence'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/mapMarker.svg',
            iconImageSize: [60, 115],
            iconImageOffset: [-30, -115]
        });

        myPlacemark2 = new ymaps.Placemark([42.381042, 69.594169], {
  			hintContent: 'Назарбаев Интеллектуальная школа'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/nMarker.svg',
            iconImageSize: [80, 80],
            iconImageOffset: [-40, -80]
        });
        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark2);
    }
</script>

@endsection