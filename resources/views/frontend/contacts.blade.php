@extends('frontend.layouts.master')

@section('content')

<style>
	@if ($currentUrl != null)
    a.contacts{
        color: #95c41f !important;
    }
  @endif
</style>

<!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '1998979796789112'); 
        fbq('track', 'ViewContent');
        </script>
        <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=1998979796789112&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

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
					<div id="map" style="width: 100%; height: 475px;"></div>
					<!-- <div id="map" style="width: 100%; height: 750px;"></div> -->

					<!--End of Map Section-->
				</div>
				<div class="contact-information">
					<div class="single-contact-info"> 
						<div class="pull_left contents ml-8"> 
							<img src="images/icons/c-map.png" alt="">
							<div class="info-text pl-40">
								<span class="block mb-7">Казахстан, г. Шымкент</span>
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
								<span class="block mb-7">Email : sales@otaugroup.kz</span>
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
				<form action="/feedback" method="post">
					{{ csrf_field() }}
					<input type="text" name="name" class="mb-22" placeholder="Ваше имя">
					<input type="text" name="email" class="mb-22" placeholder="Ваш email">
					<textarea name="text" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	@if ( Session::has('status') )
	<!-- The Modal -->
        <div id="myModal" class="modal" style="display: block">

          <!-- Modal content -->
          <div class="modal-content">
            <span id="btnClose" class="close">&times;</span>
            {!! Session::get('status') !!}
            <div id="cls" style="cursor: pointer; text-align: center;"><h3>Закрыть</h3></div>
          </div>

        </div>
	@endif


@endsection

@section('scripts')

<script type="text/javascript">
  ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){     
        myMap = new ymaps.Map("map", {
            center: [42.38217392, 69.59299179],
            zoom: 14
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
            iconImageHref: '/images/icons/new/naz.png',
            iconImageSize: [156, 81],
            // iconImageHref: '/images/icons/new/nMarker.svg',
            // iconImageSize: [80, 80],
            iconImageOffset: [-125, -3]
        });

        detsad = new ymaps.Placemark([42.382872, 69.593807], {
  			hintContent: 'Детский садик на 200 мест, на территории парка'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/sadik.png',
            iconImageSize: [150, 80],
            iconImageOffset: [-10, -60]
        });

        admincentr = new ymaps.Placemark([42.38294, 69.590929], {
  			hintContent: 'Администранивный центр'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/admincentr.png',
            iconImageSize: [150, 35],
            iconImageOffset: [60, 100]
        });

        dendro = new ymaps.Placemark([42.372594, 69.616655], {
  			hintContent: 'Дендропарк'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/dendro.png',
            iconImageSize: [116, 35],
            iconImageOffset: [-60, -20]
        });

        zoopark = new ymaps.Placemark([42.376317, 69.618629], {
  			hintContent: 'Зоопарк'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/zoopark.png',
            iconImageSize: [116, 35],
            iconImageOffset: [-25, -30]
        });

        sadik280 = new ymaps.Placemark([42.377463, 69.609302], {
  			hintContent: 'Детский сад на 280 мест'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/sadik280.png',
            iconImageSize: [130, 70],
            iconImageOffset: [7, -70]
        });

        ippodrom = new ymaps.Placemark([42.382872, 69.620131], {
  			hintContent: 'Зоопарк'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/ippodrom.png',
            iconImageSize: [156, 81],
            iconImageOffset: [-130, -70]
        });

        fitness = new ymaps.Placemark([42.383062, 69.586442], {
  			hintContent: 'Фитнес клуб parkresidence'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/fitness.png',
            iconImageSize: [90, 50],
            iconImageOffset: [-80, 0]
        });

        sadik280_2 = new ymaps.Placemark([42.388662, 69.582995], {
  			hintContent: 'Детский сад на 280 мест'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/sadik280.png',
            iconImageSize: [130, 70],
            iconImageOffset: [7, -70]
        });

        shkola600 = new ymaps.Placemark([42.389743, 69.581922], {
  			hintContent: 'Школа на 600 мест'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/shkola600.png',
            iconImageSize: [150, 80],
            iconImageOffset: [-150, -70]
        });

        shkola1200 = new ymaps.Placemark([42.387580, 69.570807], {
  			hintContent: 'Школа на 1200 мест'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/shkola1200.png',
            iconImageSize: [150, 80],
            iconImageOffset: [-150, -5]
        });

        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark2);
        myMap.geoObjects.add(detsad);
        myMap.geoObjects.add(admincentr);
        myMap.geoObjects.add(dendro);
        myMap.geoObjects.add(zoopark);
        myMap.geoObjects.add(sadik280);
        myMap.geoObjects.add(ippodrom);
        myMap.geoObjects.add(fitness);
        myMap.geoObjects.add(sadik280_2);
        myMap.geoObjects.add(shkola600);
        myMap.geoObjects.add(shkola1200);
    }
</script>




@endsection