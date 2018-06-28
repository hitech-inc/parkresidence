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

    @if ($currentUrl == null)
        a.mainIn{
            color: #95c41f !important;
        }
    @endif
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
										<a class="button slider-btn  wow fadeInUp specialbutton" style="display: none !important;" href="/about" data-wow-duration="4100ms" data-wow-delay=".7s">Читать больше</a>	                
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
										<a class="button slider-btn" href="/about">Читать больше</a>	                
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
              @php
                
                $url = url('/house-details/'.$house->slug);
                $title = '<div style="width: 324px">' . $house->title . '</div>';
                $href = 'href=' . $url . '';

                if($house->alias == "prodan")
                {
                  $title = $house->title;
                  $url = "#";
                  $href = "";
                } 

              @endphp

              @if($house->slug == "vila13s") 
              <a id="link-{{ $house->slug }}" {{ $href }} class="myHouse" title="{{ $title }}" data-icon="{{ asset('/images/icons/map-marker-' . $house->status . '.png') }}" data-slug="{{ $house->slug }}" data-icon-highlight="{{ asset('/images/highlights/' . $house->slug . '.png') }}">
                  <path d="M {{$house->coords}} Z" data-hover="/images/houses/hover/{{$house->hover_img}}" >
              </a>

              @elseif($house->slug == "villa13" )
              <a id="link-{{ $house->slug }}" {{ $href }} class="myHouse" title="{{ $title }}" data-icon="{{ asset('/images/icons/map-marker-' . $house->status . '.png') }}" data-slug="{{ $house->slug }}" data-icon-highlight="{{ asset('/images/highlights/' . $house->slug . '.png') }}">
                  <path d="M {{$house->coords}} Z" data-hover="/images/houses/hover/{{$house->hover_img}}" >
              </a>
              
              @else
              <a id="link-{{ $house->slug }}" {{ $href }} class="myHouse" title="{{ $title }}" data-icon="{{ asset('/images/icons/map-marker-' . $house->status . '.png') }}" data-slug="{{ $house->slug }}"  data-icon-highlight="{{ asset('/images/highlights/' . $house->slug . '.png') }}">
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
            <p> - Административное здание</p>
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
                <!-- End of Find Area -->
                <!--Start of About Area-->
                <div class="about-area mt-120 pb-90 banner-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-6 col-md-offset-6 aboutBlockTitle">
                				<!-- <div class="section-title mb-38 mt-31" style="margin-top: 0">
                					<span class="opacity-text text-uppercase wow fadeIn" data-wow-delay="0.5s">О нас</span>
                					<h2 class="uppercase wow fadeInUp" data-wow-delay="0.5s">ПОЧЕМУ<span class="text-color">PARK RESIDENCE</span></h2>
                				</div> -->
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
                      <!-- Показываем 2 таунхауса черный и коричневый -->
                      @forelse($townHouses as $town)
                        {{--@if($town->slug == 'town-house-14')--}}
                          <div class="col-lg-4 col-md-6 col-sm-6 mb-40 wow fadeInUp" data-wow-offset="300"  @if($loop->iteration % 3 == 2) data-wow-duration="2s" @endif @if($loop->iteration % 3 == 1) data-wow-duration="2.3s" @endif @if($loop->iteration % 3 == 0) data-wow-duration="1.8s" @endif>
                            <div class="single-property hover-effect-two">
                              <div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                                <div class="title-left pull_left">
                                  <h4 class="text-white mb-12"><a href="{{ url('/house-details/' . $town->slug) }}">{{ $town->name }}</a></h4>
                                  <!-- <span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span> -->
                                </div>
                                <!-- <div class="fix pull_right">
                                  <h3>$52,354</h3>
                                </div> -->
                              </div>
                              <div class="property-image">
                                <a href="{{ url('/house-details/' . $town->slug) }}" class="block dark-hover"><img src="/images/houses/small_img/{{ $town->small_img }}" alt="">
                                  <span class="img-button text-uppercase">Узнать больше</span>
                                  <span class="p-tag bg-lemon">Продается</span>
                                </a>
                                <div class="hover-container pl-15 pr-15 pt-16 pb-15">
                                  <div class="hover-item">
                                    <img class="mr-10" src="images/icons/floor.png" alt="">
                                      <span>{{ $town->kvadratura }}</span>
                                  </div>
                                  <div class="hover-item">
                                    <img class="mr-10" src="images/icons/bed.png" alt="">
                                      <span>{{ $town->spalnie_comnati }}</span>
                                  </div>
                                  <div class="hover-item">
                                    <img class="mr-10" src="images/icons/shower.png" alt="">
                                    <span>{{$town->vannie_comnati}}</span>
                                  </div>
                                  <div class="hover-item">
                                    <img class="mr-10" src="images/icons/garage.png" alt="">
                                    <span>{{$town->parking}}</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        {{--@endif--}}
                      
                      @empty <h3>Нет данных</h3>
                      
                      @endforelse
                      <!-- Конец показ танхаусов -->

                      <!-- Показываем все виллы -->
                      @forelse($villas as $house)
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
                  								<span>{{ $house->kvadratura }}</span>
                  							</div>
                  							<div class="hover-item">
                  								<img class="mr-10" src="images/icons/bed.png" alt="">
                  								<span>{{ $house->spalnie_comnati }}</span>
                  							</div>
                  							<div class="hover-item">
                  								<img class="mr-10" src="images/icons/shower.png" alt="">
                  								<span>{{$house->vannie_comnati}}</span>
                  							</div>
                  							<div class="hover-item">
                  								<img class="mr-10" src="images/icons/garage.png" alt="">
                  								<span>{{$house->parking}}</span>
                  							</div>
                  						</div>
                  					</div>
                  				</div>
                  			</div>
                      @empty <h3>Нет данных</h3>
                      @endforelse
                      <!-- Конец показ вилл -->
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

        // Определяю ширину окна
        var size = $(window).width();

        // Если ширина окна больше 991px то только в этом случае инициализируем tippy, это для того что бы при мобильной версии при щелчке на карте изображения по дому, не выходил всплывающий блок с информацией. Он будет срабатывать только при desktop версии.
        if(size > '991')
        {
          // tippy
          const tip = tippy('.myHouse', {
            delay: 100,
            arrow: true,
            arrowType: 'round',
            size: 'large',
            duration: 500,
            animation: 'scale',
            theme: 'parkresidence',
            onHide(instance) {
                let slug = instance.reference.id.substring(instance.reference.id.indexOf("-") + 1);
                $('.hi-' + slug).fadeOut(200);
            },
            wait(show, event) {
                // console.log(event.target.id);

                // show highlight
                let slug = event.target.id.substring(event.target.id.indexOf("-") + 1);
                const villa = VILLAS[slug];
                console.log(slug, villa);

                let markerWidth = MARKER_WIDTH * RATIO;
                let markerHeight = markerWidth;
                let top = villa.top * RATIO;
                let left = villa.left * RATIO;
                let bottom = villa.bottom * RATIO;
                let right = villa.right * RATIO;
                let width = (villa.right - villa.left) * RATIO;
                let height = (villa.bottom - villa.top) * RATIO;

                let position = {
                    top: top - markerHeight / 2,
                    left: left + (right - left) / 2 - markerWidth / 2
                }

                let center = {
                    top: position.top + markerHeight,
                    left: position.left + markerHeight / 2
                }

                const villaId = 'hi-' + slug;
                let hInfo = villa.hightlight;
                let hWidth = hInfo.width * RATIO;
                let hHeight = hInfo.height * RATIO;

                let hightlight = $('<img id="' + villaId + '" class="area-highlight hi-' + slug + '">');
                hightlight.attr('src', hInfo.icon + '/' + slug + '.png');
                hightlight.css('position', 'absolute');

                if (villaId.indexOf("town-house-") !== -1) {
                    // console.log(villaId);
                    hightlight.css('top', center.top - hHeight / 2 - 5.0 * RATIO);
                } else {
                    hightlight.css('top', center.top - hHeight / 2 + 7.5 * RATIO);
                }

                hightlight.css('left', center.left - hWidth / 2);
                hightlight.css('width', hWidth + 'px');
                hightlight.css('height', hHeight + 'px');
                hightlight.css('pointer-events', 'none');
                hightlight.css('display', 'none');
                hightlight.appendTo('#map-picker');
                hightlight.fadeIn(200);

                show();
            }
          });
        } 

        // map markers
        let map = $('#map-picker');
        map.css('position', 'relative');

        const MAP_WIDTH = 1920;
        const MARKER_WIDTH = 32;
        const RATIO = map.width() / MAP_WIDTH;
        const MAP_POSITION = map.offset();
        const BORDER_POSITIONS = {};

        const VILLAS = {
            'vila13s': {
                left: 564, 
                top: 487,
                right: 652,
                bottom: 533,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 100,
                    height: 57,
                }
            },
            'vila15-62': {
                left: 646, 
                top: 504,
                right: 736,
                bottom: 554,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 100,
                    height: 57,
                }
            },
            'vila11': {
                left: 696, 
                top: 481,
                right: 764,
                bottom: 521,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 81,
                    height: 51,
                }
            },
            'villa33': {
                left: 1279, 
                top: 482,
                right: 1364,
                bottom: 531,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 84,
                    height: 51,
                }
            },
            'villa36': {
                left: 1592, 
                top: 539,
                right: 1652,
                bottom: 591,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 68,
                    height: 60,
                }
            },
            'villa32': {
                left: 1533, 
                top: 480,
                right: 1620,
                bottom: 524,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 99,
                    height: 56,
                }
            },
            'villa46': {
                left: 1266, 
                top: 350,
                right: 1324,
                bottom: 395,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 58,
                    height: 45,
                }
            },
            'villa47': {
                left: 1322, 
                top: 361,
                right: 1380,
                bottom: 405,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 61,
                    height: 47,
                }
            },
            'villa13-4c': {
                left: 859, 
                top: 497,
                right: 931,
                bottom: 555,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 72,
                    height: 58,
                }
            },
            'villa10-6c': {
                left: 1056, 
                top: 526,
                right: 1131,
                bottom: 577,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 80,
                    height: 51,
                }
            },
            'villa10-7c': {
                left: 950, 
                top: 514,
                right: 1027,
                bottom: 566,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 77,
                    height: 53,
                }
            },
            'villa39': {
                left: 1339, 
                top: 407,
                right: 1413,
                bottom: 455,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 77,
                    height: 51,
                }
            },
            'villa13': {
                left: 741, 
                top: 492,
                right: 861,
                bottom: 548,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 123,
                    height: 57,
                }
            },
            'vila37': {
                left: 902, 
                top: 346,
                right: 996,
                bottom: 389,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 95,
                    height: 44,
                }
            },
            'villa9': {
                left: 554, 
                top: 453,
                right: 663,
                bottom: 500,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 109,
                    height: 50,
                }
            },
            'detskyi-sad': {
                left: 1687, 
                top: 366,
                right: 1833,
                bottom: 413,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '4.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 157,
                    height: 60,
                }
            },
            'fitness-club': {
                left: 57, 
                top: 401 + 32.5,
                right: 348,
                bottom: 519,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '4.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 304,
                    height: 130,
                }
            },
            'town-house-36': {
                left: 826, 
                top: 238,
                right: 853,
                bottom: 269,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 34,
                    height: 37,
                }
            },
            'town-house-35': {
                left: 853, 
                top: 242,
                right: 883,
                bottom: 273,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 34,
                    height: 37,
                }
            },
            'town-house-34': {
                left: 892, 
                top: 246,
                right: 923,
                bottom: 278,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 34,
                    height: 37,
                }
            },
            'town-house-33': {
                left: 917, 
                top: 251,
                right: 950,
                bottom: 280,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-32': {
                left: 961, 
                top: 256,
                right: 992,
                bottom: 278,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-31': {
                left: 992, 
                top: 260,
                right: 1021,
                bottom: 288,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-30': {
                left: 1033, 
                top: 264,
                right: 1065,
                bottom: 292,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-29': {
                left: 1059, 
                top: 268,
                right: 1092,
                bottom: 292,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-28': {
                left: 1106, 
                top: 274,
                right: 1140,
                bottom: 303,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-27': {
                left: 1132, 
                top: 278,
                right: 1166,
                bottom: 308,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-26': {
                left: 1179, 
                top: 284,
                right: 1214,
                bottom: 314,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-25': {
                left: 1207, 
                top: 289,
                right: 1242,
                bottom: 319,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-24': {
                left: 1257, 
                top: 294,
                right: 1292,
                bottom: 324,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-23': {
                left: 1285, 
                top: 299,
                right: 1320,
                bottom: 329,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-22': {
                left: 1336, 
                top: 305,
                right: 1369,
                bottom: 336,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-21': {
                left: 1365, 
                top: 309,
                right: 1400,
                bottom: 341,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-20': {
                left: 1426, 
                top: 316,
                right: 1440,
                bottom: 346,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 48,
                    height: 40,
                }
            },
            'town-house-19': {
                left: 1452, 
                top: 321,
                right: 1476,
                bottom: 352,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-18': {
                left: 1512, 
                top: 328,
                right: 1526,
                bottom: 358,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-17': {
                left: 1528, 
                top: 334,
                right: 1562,
                bottom: 362,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-16': {
                left: 1585, 
                top: 338,
                right: 1623,
                bottom: 368,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },
            'town-house-15': {
                left: 1617, 
                top: 342,
                right: 1652,
                bottom: 375,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 38,
                }
            },

            // Мои переделки
            'town-house-14': {
                left: 1602, 
                top: 378,
                right: 1628,
                bottom: 295,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 45,
                }
            },
            'town-house-13': {
              left: 1572, 
                top: 375,
                right: 1598,
                bottom: 282,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 45,
                }
            },

            'town-house-12': {
                left: 1512, 
                top: 365,
                right: 1538,
                bottom: 384,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 45,
                }
            },

            'town-house-11': {
              left: 1482, 
                top: 359,
                right: 1508,
                bottom: 380,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 45,
                }
            },

            'town-house-10': {
              left: 1428, 
                top: 352,
                right: 1445,
                bottom: 373,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-09': {
              left: 1396, 
                top: 349,
                right: 1416,
                bottom: 370,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-08': {
              left: 1341, 
                top: 341,
                right: 1360,
                bottom: 363,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-07': {
              left: 1316, 
                top: 338,
                right: 1327,
                bottom: 360,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-06': {
              left: 1252, 
                top: 328,
                right: 1290,
                bottom: 351,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-05': {
              left: 1222, 
                top: 325,
                right: 1259,
                bottom: 348,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-04': {
              left: 1172, 
                top: 317,
                right: 1206,
                bottom: 343,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-03': {
              left: 1145, 
                top: 314,
                right: 1180,
                bottom: 340,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-02': {
              left: 1095, 
                top: 307,
                right: 1132,
                bottom: 335,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }
            },

            'town-house-01': {
              left: 1068, 
                top: 304,
                right: 1106,
                bottom: 332,
                icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 50,
                    height: 41,
                }  
            },
            // Конец мои переделки

            // Старый код рабочий
            // 'town-house-14': {
            //     left: 1068, 
            //     top: 304,
            //     right: 1106,
            //     bottom: 332,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-13': {
            //     left: 1095, 
            //     top: 307,
            //     right: 1132,
            //     bottom: 335,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-12': {
            //     left: 1145, 
            //     top: 314,
            //     right: 1180,
            //     bottom: 340,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-11': {
            //     left: 1172, 
            //     top: 317,
            //     right: 1206,
            //     bottom: 343,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-10': {
            //     left: 1222, 
            //     top: 325,
            //     right: 1259,
            //     bottom: 348,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-09': {
            //     left: 1252, 
            //     top: 328,
            //     right: 1290,
            //     bottom: 351,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-08': {
            //     left: 1316, 
            //     top: 338,
            //     right: 1327,
            //     bottom: 360,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-07': {
            //     left: 1341, 
            //     top: 341,
            //     right: 1360,
            //     bottom: 363,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-06': {
            //     left: 1396, 
            //     top: 349,
            //     right: 1416,
            //     bottom: 370,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-05': {
            //     left: 1428, 
            //     top: 352,
            //     right: 1445,
            //     bottom: 373,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 41,
            //     }
            // },
            // 'town-house-04': {
            //     left: 1482, 
            //     top: 359,
            //     right: 1508,
            //     bottom: 380,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 45,
            //     }
            // },
            // 'town-house-03': {
            //     left: 1512, 
            //     top: 365,
            //     right: 1538,
            //     bottom: 384,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 45,
            //     }
            // },
            // 'town-house-02': {
            //     left: 1572, 
            //     top: 375,
            //     right: 1598,
            //     bottom: 282,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 45,
            //     }
            // },
            // 'town-house-01': {
            //     left: 1602, 
            //     top: 378,
            //     right: 1628,
            //     bottom: 295,
            //     icon: '{{ asset('/images/icons/map-marker-') }}' + '1.png',
            //     hightlight: {
            //         icon: '{{ asset('/images/highlights/') }}',
            //         width: 50,
            //         height: 45,
            //     }
            // },

            //Проданные Вилы
            'prodan-1': {
                left: 1483, 
                top: 530,
                right: 1581,
                bottom: 576,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 106,
                    height: 54,
                }
            }, 

            'prodan-2': {
                left: 1375, 
                top: 510,
                right: 1475,
                bottom: 563,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 128,
                    height: 73,
                }
            }, 

            'prodan-3': {
                left: 1260, 
                top: 530,
                right: 1336,
                bottom: 581,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 78,
                    height: 60,
                }
            },

            'prodan-4': {
                left: 1195, 
                top: 475,
                right: 1251,
                bottom: 514,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 57,
                    height: 43,
                }
            },

            'prodan-5': {
                left: 1157, 
                top: 502,
                right: 1239,
                bottom: 550,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 84,
                    height: 50,
                }
            },

            'prodan-6': {
                left: 1097, 
                top: 468,
                right: 1164,
                bottom: 506,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 72,
                    height: 39,
                }
            },

            'prodan-7': {
                left: 1056, 
                top: 486,
                right: 1133,
                bottom: 537,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 81,
                    height: 54,
                }
            },

            'prodan-8': {
                left: 1001, 
                top: 448,
                right: 1070,
                bottom: 486,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 70,
                    height: 36,
                }
            },

            'prodan-9': {
                left: 966, 
                top: 476,
                right: 1031,
                bottom: 519,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 73,
                    height: 51,
                }
            },

            'prodan-10': {
                left: 921, 
                top: 431,
                right: 969,
                bottom: 469,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 55,
                    height: 45,
                }
            },

            'prodan-11': {
                left: 872, 
                top: 460,
                right: 931,
                bottom: 498,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 68,
                    height: 46,
                }
            },

            'prodan-12': {
                left: 831, 
                top: 417,
                right: 879,
                bottom: 454,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 54,
                    height: 45,
                }
            },

            'prodan-13': {
                left: 800, 
                top: 450,
                right: 846,
                bottom: 480,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 54,
                    height: 37,
                }
            },

            'prodan-14': {
                left: 675, 
                top: 425,
                right: 762,
                bottom: 468,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 94,
                    height: 49,
                }
            },

            'prodan-15': {
                left: 742, 
                top: 401,
                right: 796,
                bottom: 439,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 54,
                    height: 38,
                }
            },

            'prodan-16': {
                left: 442, 
                top: 472,
                right: 570,
                bottom: 519,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 135,
                    height: 54,
                }
            },

            'prodan-17': {
                left: 1539, 
                top: 441,
                right: 1616,
                bottom: 419,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 83,
                    height: 56,
                }
            },

            'prodan-18': {
                left: 1452, 
                top: 429,
                right: 1524,
                bottom: 468,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 77,
                    height: 45,
                }
            },

            'prodan-19': {
                left: 1419, 
                top: 462,
                right: 1518,
                bottom: 503,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 105,
                    height: 48,
                }
            },

            'prodan-20': {
                left: 1319, 
                top: 450,
                right: 1388,
                bottom: 487,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 75,
                    height: 40,
                }
            },

            'prodan-21': {
                left: 1190, 
                top: 395,
                right: 1277,
                bottom: 432,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 95,
                    height: 41,
                }
            },

            'prodan-22': {
                left: 1163, 
                top: 420,
                right: 1250,
                bottom: 463,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 94,
                    height: 45,
                }
            },

            'prodan-23': {
                left: 1027, 
                top: 370,
                right: 1115,
                bottom: 406,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 94,
                    height: 38,
                }
            },

            'prodan-24': {
                left: 996, 
                top: 394,
                right: 1079,
                bottom: 433,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 88,
                    height: 44,
                }
            },

            'prodan-25': {
                left: 854, 
                top: 370,
                right: 936,
                bottom: 410,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 87,
                    height: 40,
                }
            },

            'prodan-26': {
                left: 1534, 
                top: 393,
                right: 1573,
                bottom: 436,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 47,
                    height: 46,
                }
            },

            'prodan-27': {
                left: 1435, 
                top: 383,
                right: 1497,
                bottom: 417,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 65,
                    height: 37,
                }
            },

            'prodan-28': {
                left: 1387, 
                top: 375,
                right: 1426,
                bottom: 409,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 46,
                    height: 32,
                }
            },

            'prodan-29': {
                left: 1223, 
                top: 345,
                right: 1261,
                bottom: 389,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 44,
                    height: 43,
                }
            },

            'prodan-30': {
                left: 1160, 
                top: 337,
                right: 1199,
                bottom: 376,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 47,
                    height: 43,
                }
            },

            'prodan-31': {
                left: 1103, 
                top: 328,
                right: 1146,
                bottom: 369,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 48,
                    height: 42,
                }
            },

            'prodan-32': {
                left: 1061, 
                top: 323,
                right: 1098,
                bottom: 366,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 44,
                    height: 43,
                }
            },

            'prodan-33': {
                left: 998, 
                top: 314,
                right: 1039,
                bottom: 352,
                alias: "prodan",
                icon: '{{ asset('/images/icons/map-marker-') }}' + '2.png',
                hightlight: {
                    icon: '{{ asset('/images/highlights/') }}',
                    width: 47,
                    height: 41,
                }
            },

        };

        let world = {};

        // place div (hover) &  markers
        for (var villa in VILLAS) {
            if (VILLAS.hasOwnProperty(villa)) {
                let linkHolder = '#link-' + villa;

                let icon = VILLAS[villa].icon;
                let markerWidth = MARKER_WIDTH * RATIO;
                let markerHeight = markerWidth;
                let top = VILLAS[villa].top * RATIO;
                let left = VILLAS[villa].left * RATIO;
                let bottom = VILLAS[villa].bottom * RATIO;
                let right = VILLAS[villa].right * RATIO;
                let width = (VILLAS[villa].right - VILLAS[villa].left) * RATIO;
                let height = (VILLAS[villa].bottom - VILLAS[villa].top) * RATIO;

                let position = {
                    top: top - markerHeight / 2,
                    left: left + (right - left) / 2 - markerWidth / 2
                }

                let center = {
                    top: position.top + markerHeight,
                    left: position.left + markerHeight / 2
                }
                
                // marker
                if (VILLAS[villa].alias == "prodan")
                {
                  continue;
                }

                let marker = $('<img class="area-marker">');
                marker.attr('src', icon);
                marker.css('position', 'absolute');
                marker.css('top', position.top);
                marker.css('left', position.left);
                marker.css('width', markerWidth);
                marker.css('height', markerHeight);
                marker.css('pointer-events', 'none');
                // marker.css('outline', '1px solid red');
                marker.appendTo('#map-picker');
            }
        }

    });
</script>

@endsection               
               

