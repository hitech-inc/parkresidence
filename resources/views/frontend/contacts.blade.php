@extends('frontend.layouts.master')

@section('content')

<style>
	@if ($currentUrl != null)
    a.contacts{
        color: #95c41f !important;
    }
  @endif
</style>

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
            iconImageSize: [156, 81],
            iconImageOffset: [-10, -60]
        });

        admincentr = new ymaps.Placemark([42.38294, 69.590929], {
  			hintContent: 'Детский садик на 200 мест, на территории парка'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '/images/icons/new/sadik.png',
            iconImageSize: [156, 81],
            iconImageOffset: [-10, -60]
        });

        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark2);
        myMap.geoObjects.add(detsad);
    }
</script>




@endsection