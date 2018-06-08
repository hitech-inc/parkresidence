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

@section('script')
<!-- google map api -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC2oz2oxzEiJyNIgde7-Ef30-EthG6Oac&callback=initMap"
  type="text/javascript"></script> 
<script>
            var markersData = [
                {
                    lat: 42.38294,     // Широта
                    lng: 69.590929,    // Долгота
                    name: "Park residence", // Произвольное название, которое будем выводить в информационном окне
                    address:"Адрес 1",   // Адрес, который также будем выводить в информационном окне
                    icon: "images/icons/new/mapMarker.png"
                },
                {
                    lat: 42.381042,     // Широта
                    lng: 69.594169,    // Долгота
                    name: "Школа Назарбаева", // Произвольное название, которое будем выводить в информационном окне
                    address:"Адрес 1",   // Адрес, который также будем выводить в информационном окне
                    icon: "images/icons/new/ns-map-icon.png"
                }
            ];
            // initMap
            var map;
            function initMap() {
                var centerLatLng = new google.maps.LatLng(42.38294, 69.590929);
                var mapOptions = {
                    center: centerLatLng,
                    zoom: 15,
                    mapTypeId: 'satellite'
                 };
                map = new google.maps.Map(document.getElementById("map"), mapOptions);
                
                // Перебираем в цикле все координата хранящиеся в markersData
                for (var i = 0; i < markersData.length; i++){
                    var latLng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
                    var name = markersData[i].name;
                    // var address = markersData[i].address;
                    var icon = markersData[i].icon;
                    // Добавляем маркер
                    addMarker(latLng, name, icon);
                }
            }

            //google.maps.event.addDomListener(window, "load", initMap);
            // Функция добавления маркера
            function addMarker(latLng, name, icon) {
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title: name,
                    icon: icon,
                    animation: google.maps.Animation.BOUNCE
                });
            }

            // function initMap() {
            //     var coordinates = {lat: 42.38294, lng: 69.590929};
            //     var map = new google.maps.Map(document.getElementById('map'), {
            //           zoom: 15,
            //           center: coordinates,
            //           mapTypeId: 'satellite'
            //         });

            //     var image = 'images/icons/new/mapMarker.png';
            //     var marker = new google.maps.Marker({
            //         position: coordinates,
            //         map: map,
            //         animation: google.maps.Animation.BOUNCE,
            //         icon: image
            //         });
            //     
            // }

        </script>
@endsection