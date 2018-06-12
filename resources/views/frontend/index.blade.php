@extends('frontend.layouts.master')

@section('content')
<style>

@media (max-width: 576px) {
	.area-marker {
		width: 32px;
		height: 32px;
	}
}
@media (min-width: 576px) {
	.area-marker {
		width: 20px;
		height: 20px;
	}
}
@media (min-width: 768px) {
	.area-marker {
		width: 25px;
		height: 25px;
	}
}
@media (min-width: 992px) {
	.area-marker {
		width: 30px;
		height: 30px;
	}
}
@media (min-width: 1200px) {
	.area-marker {
		width: 32px;
		height: 32px;
	}
}
</style>

<!--Start of Slider Area-->
<div class="slider-area bg-overlay">
	<div class="preview-2">
		<div id="nivoslider" class="slides">	
			<img src="images/slider/1.jpg" alt="" title="#slider-1-caption1"/>
			<img src="images/slider/2.jpg" alt="" title="#slider-1-caption2"/>
		</div> 
		<div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
			<div class="banner-content slider-1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-content-wrapper">
								<div class="text-content text-center">
									<h3 style="display: none;" class="title-small wow fadeInUp text-uppercase text-white mb-10 special" data-wow-duration="2000ms" data-wow-delay="0s">Впервые в Казахстане и Центральной Азии!</h3>
									<h1 style="display: none;" class="title1 wow fadeInUp text-uppercase text-white mb-20 special" data-wow-duration="2900ms" data-wow-delay=".5s"><span class="text-color">PARK RESIDENCE</span> <br>Новый стиль загородной жизни</h1>
									<p style="display: none;" class="sub-title wow fadeInUp hidden-xs special" data-wow-duration="3600ms" data-wow-delay=".6s"> Уникальный клубный городок Park Residence с особой инфраструктурой, который объединяет в территорию 36 гектаров: эксклюзивные виллы и таунхаусы, собственную парковую зону, современный фитнес центр, крытые и открытые бассейны, детский сад, и ресторан изысканной кухни.</p>
									<div class="banner-readmore  mt-37">
										<a class="button slider-btn  wow fadeInUp specialbutton" style="display: none !important;" href="#" data-wow-duration="4100ms" data-wow-delay=".7s">Читать больше</a>	                
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
			<div class="banner-content slider-2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-content-wrapper">
								<div class="text-content slide-2 text-center animation-1">
									<h3 class="title-small text-uppercase text-white mb-10">Впервые в Казахстане и Центральной Азии!</h3>
									<h1 class="title1 text-uppercase text-white mb-20 wow fadeInUp"><span class="text-color">PARK RESIDENCE</span> </span><br> Новый стиль загородной жизни!</h1>
									<p class="sub-title hidden-xs"> Уникальный клубный городок Park Residence с особой инфраструктурой, который объединяет в территорию 36 гектаров: эксклюзивные виллы и таунхаусы, собственную парковую зону, современный фитнес центр, крытые и открытые бассейны, детский сад, и ресторан изысканной кухни.</p>
									<div class="banner-readmore mt-37">
										<a class="button slider-btn" href="#">Читать больше</a>	                
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	 
	</div>
</div>
<!--End of Slider Area-->
<div class="slider-area" style="padding: 50px 0 0 0">
	<h2 class="uppercase wow fadeInUp" style="text-align: center; padding-bottom: 40px;">НОВЫЙ СТИЛЬ ЗАГОРОДНОЙ ЖИЗНИ</h2>
    
    <!-- Include svg -->
    <div id="map-picker" class="map" style="width: 100%; max-width: 1920px;">
        <svg viewBox="0 0 1920 754" class="svgMap"> 
        @foreach( $houses as $house )
            @if($house->slug == "vila13s") 
            <a href="{{ url('/house-details/'.$house->slug) }}" class="myHouse" title="{{ $house->title }}" data-icon="{{ asset('/images/icons/map-marker-' . $house->status . '.png') }}">
                <path d="M {{$house->coords}} Z" data-hover="/images/houses/hover/{{$house->hover_img}}">
            </a>
            @else
            <a href="{{ url('/house-details/'.$house->slug) }}" class="myHouse" title="{{ $house->title }}" data-icon="{{ asset('/images/icons/map-marker-' . $house->status . '.png') }}">
                <path d="m {{$house->coords}} z">
            </a>
            @endif
        @endforeach
        </svg>
        <img src="images/genplan.jpg" alt="" class="imgMap">
        <div class="statusBlock">
            <p> - Строится</p>
            <p> - Продается</p>
            <p> - Продан</p>
        </div>
    </div>
    <!-- End svg -->

    <!-- Image Map Generated by http://www.image-map.net/ -->
  {{--<img src="/images/genplan.jpg" usemap="#image-map" class="map wow fadeIn">

  <map name="image-map">
    @foreach( $houses as $house )
    <area class="myhouse map-tile" target="" title="#"  alt=""  href="{{ url('/house-details/'.$house->slug) }}" coords="{{ $house->coords }}" shape="{{ $house->shape }}" data-tooltip="HTML<br>подсказка">
    <div id="tooltip" style="display: none; width: 350px; height: 300px; position: absolute; z-index: 999; background: #fff; border: 5px solid blue; overflow-y: auto;">
        <!-- <h1>{{$house->name}}</h1> -->
        <!-- <img src="/images/houses/title/{{$house->img}}" alt="" style="max-width: 100%"> -->
        <p id="content">{!! $house->title !!}</p>
    </div>
    @endforeach
      <!-- <area class="myhouse" target="" alt="" title="Вила1" href="" coords="1051,707,1113,721,1095,773,1017,746" shape="poly">
      <area class="myhouse" target="" alt="" title="Вила2" href="" coords="1097,782,1088,829,980,788,1010,756" shape="poly">
      <area class="myhouse" target="" alt="" title="Таунхаус1" href="" coords="1178,743,1164,790,1105,775,1119,726" shape="poly">
      <area class="myhouse" target="" alt="" title="Таунхаус2" href="" coords="1166,795,1154,846,1091,832,1103,782" shape="poly"> -->
  </map>--}}
</div>	
<!--Start of Find Area-->
                <!-- <div class="find-area pt-72 pb-72 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center mb-55">
                                    <h2 class="uppercase">Найдите дом своей мечты </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            	
                            	<img src="images/genplan18.jpg" alt="" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- End of Find Area -->
                <!--Start of About Area-->
                <div class="about-area mt-120 pb-90 banner-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-6 col-md-offset-6">
                				<div class="section-title mb-38 mt-31">
                					<span class="opacity-text text-uppercase wow fadeIn" data-wow-delay="0.5s">О нас</span>
                					<h2 class="uppercase wow fadeInUp" data-wow-delay="0.5s">O <span class="text-color">Park residence</span></h2>
                				</div>
                				<p class="23 wow fadeInUp" data-wow-delay="0.5s"><span class="text-dark text-uppercase">PARK Residence</span> это больше чем коттеджный городок, это клуб единомышленников, предпочитающих активное времяпровождение и здоровый образ жизни на лоне природы.</p>
                				<p class="34 wow fadeInUp" data-wow-delay="0.5s"><strong>Park Residence</strong> - для тех, кто ценит личный комфорт и личное пространство, сегодня существует способ окружить себя и свою семью спокойствием и достойным обществом. Жизнь за городом, это тот случай, когда место обитания человека, в буквальном смысле слова, отражает высоту его положения. Нужно лишь выбрать, где жить! </p>
                                <p class="34 wow fadeInUp" data-wow-delay="0.5s"><strong>Коттеджный городок  PARK Residence </strong> - является, на сегодняшний день, одним из лучших предложений на рынке загородной недвижимости в городе Шымкент. Городок  обладает рядом эксклюзивных преимуществ, отвечающих самым взыскательным требованиям, предъявляемым к загородному жилью класса Люкс.  Сюда, практически, не проникают городской шум и суета. Тишина, даруемая парком, располагает к комфортному наслаждению. Низкая плотность застройки, обеспеченная грамотным распределением домовладений, гарантирует комфорт и безопасность. </p>
                				<!-- <div class="link mb-33">
                					<a href="#">Скачать каталог</a><span class="text pl-12">и посмотреть илюстрации.</span>
                				</div> -->
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
                <!--Start of Featured Property Area-->
                <div class="property-area pb-120">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-12">
                				<div class="section-title mb-38 mt-31 text-center">
                					<span class="opacity-text text-uppercase center wow fadeInDown" data-wow-offset="300" data-wow-duration="2.5s">Каталог</span>
                					<h2 class="uppercase mb-25 wow fadeInDown" data-wow-offset="300" data-wow-duration="2.5s">Виллы и Таунхаусы</h2>
                					<!-- <p class="pb-15">Park residence is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p> -->
                				</div>
                			</div>
                		</div>
                		<div class="row">
                            @forelse($housesTake as $house)
                			<div class="col-lg-4 col-md-6 col-sm-6 mb-40 wow fadeInUp" data-wow-offset="300"  @if($loop->iteration % 3 == 2) data-wow-duration="2s" @endif @if($loop->iteration % 3 == 1) data-wow-duration="2.3s" @endif @if($loop->iteration % 3 == 0) data-wow-duration="1.8s" @endif>
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">

                							<h4 class="text-white mb-12"><a href="{{ url('/house-details/' . $house->slug) }}">{{ $house->name }}</a></h4>
                							<!-- <span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span> -->
                						</div>
                						<!-- <div class="fix pull_right">
                							<h3>$52,354</h3>
                						</div> -->
                					</div>
                					<div class="property-image">
                						<a href="{{ url('/house-details/' . $house->slug) }}" class="block dark-hover"><img src="/images/houses/small_img/{{ $house->small_img }}" alt="">
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
                		</div>
                	</div>
                </div>
                <!--End of Featured Property Area-->

                <!--Start of Client area-->
                @include('frontend.partials._clients')
                <!--End of Client area-->
@endsection 

@section('scripts')
<script>
    $(document).ready(function() {
        let map = $('#map-picker');
        map.css('position', 'relative');

        let markers = [];
        var mapPosition = map.offset();

    
        $('.myHouse').each(function() {
            const icon = $(this).data('icon');

            var housePosition = $(this).offset();


            var width = this.getBoundingClientRect().width / 2;
            var height = this.getBoundingClientRect().height / 2;
            
            var top = housePosition.top - mapPosition.top + height - 25;
            var left = housePosition.left - mapPosition.left + width - 12.5;

            console.log(width, height);

            let marker = $('<img class="area-marker">');
            marker.attr('src', icon);
            marker.css('position', 'absolute');
            marker.css('top', top);
            marker.css('left', left);
            marker.css('width', '25px');
            marker.css('height', '25px');
            marker.css('pointer-events', 'none');

            marker.appendTo('#map-picker');

            markers.push(marker);
        });

    });
</script>

@endsection               
               

