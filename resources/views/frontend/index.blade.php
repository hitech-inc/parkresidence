@extends('frontend.layouts.master')

@section('content')
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
									<h3 class="title-small wow fadeInUp text-uppercase text-white mb-10" data-wow-duration="2000ms" data-wow-delay="0s">Найти дом своей мечты!</h3>
									<h1 class="title1 wow fadeInUp text-uppercase text-white mb-20" data-wow-duration="2900ms" data-wow-delay=".5s"><span class="text-color">Park Residence</span> Всегда с Вами!</h1>
									<p class="sub-title wow fadeInUp hidden-xs" data-wow-duration="3600ms" data-wow-delay=".6s"> Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit<br> amet contetur  adipiscing elit, sed do  eiusmod tempor incididunt</p>
									<div class="banner-readmore wow fadeInUp mt-37" data-wow-duration="4100ms" data-wow-delay=".7s">
										<a class="button slider-btn" href="index.html#">Чиать больше</a>	                
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
									<h3 class="title-small text-uppercase text-white mb-10">НАЙТИ ДОМ СВОЕЙ МЕЧТЫ! !</h3>
									<h1 class="title1 text-uppercase text-white mb-20"><span class="text-color">Park Residence</span> </span> Всегда с Вами!</h1>
									<p class="sub-title hidden-xs"> Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit<br> amet contetur  adipiscing elit, sed do  eiusmod tempor incididunt</p>
									<div class="banner-readmore mt-37">
										<a class="button slider-btn" href="index.html#">Читать больше</a>	                
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
	<h2 class="uppercase" style="text-align: center; padding-bottom: 40px;">Найдите дом своей мечты </h2>
    <!-- Image Map Generated by http://www.image-map.net/ -->
  <img src="/images/genplan18.jpg" usemap="#image-map">

  <map name="image-map">
    @foreach( $houses as $house )
    <area class="myhouse" target="" alt="" title="{{ $house->title }}" href="{{ url('/'.$house->slug) }}" coords="{{ $house->coords }}" shape="{{ $house->shape }}">
    @endforeach
      <!-- <area class="myhouse" target="" alt="" title="Вила1" href="" coords="1051,707,1113,721,1095,773,1017,746" shape="poly">
      <area class="myhouse" target="" alt="" title="Вила2" href="" coords="1097,782,1088,829,980,788,1010,756" shape="poly">
      <area class="myhouse" target="" alt="" title="Таунхаус1" href="" coords="1178,743,1164,790,1105,775,1119,726" shape="poly">
      <area class="myhouse" target="" alt="" title="Таунхаус2" href="" coords="1166,795,1154,846,1091,832,1103,782" shape="poly"> -->
  </map>
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
                <div class="about-area mt-120 pb-90 banner-1">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-6 col-md-offset-6">
                				<div class="section-title mb-38 mt-31">
                					<span class="opacity-text text-uppercase">О нас</span>
                					<h2 class="uppercase">Узнать больше о <span class="text-color">Park residence</span></h2>
                				</div>
                				<p class="23"><span class="text-dark text-uppercase">Впервые в Казахстане и Центральной Азии</span> Уникальный клубный Park Residence  с особой инфраструктурой, который объединяет в территорию 36 гектаров: эксклюзивные виллы и таунхаусы, собственную парковую зону, современный фитнес центр, крытые  и открытые бассейны, детский сад, и ресторан изысканной кухни.</p>
                				<p class="34"><strong>Park Residence</strong> - клубный поселок класса ЛЮКС – выбор особенных людей, истинных ценителей высокого комфорта и элегантности, уважающие семейные традиции и заботящихся о своем здоровье и безопасности. Park Residence - это предпочтение леди и джентльменов с безупречным вкусом. Новый район для современного человека, полностью отличного от всего, к чему мы привыкли.</p>
                				<div class="link mb-33">
                					<a href="index.html#">Скачать каталог</a><span class="text pl-12">и посмотреть илюстрации.</span>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!-- End of About Area -->
                <!--Start of Service Area-->
                @include('frontend.partials._information')
                <!--End of Service Area-->
                <!--Start of Price Drop Property Area-->
                <div class="property-area pt-55 bg-light pb-75">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-12">
                				<div class="section-title mb-38 mt-31 text-center">
                					<span class="opacity-text text-uppercase center">Дома по низким ценам</span>
                					<h2 class="uppercase mb-25">Скидки</h2>
                					<p class="pb-15">Успейте купить дом своей мечты по скидке!</p>
                				</div>
                			</div>
                		</div>
                		<div class="row">
                			<div class="property-carousel">
                				<div class="col-md-12">
                					<div class="single-property hover-effect-two">
                						<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                							<div class="title-left pull_left">
                								<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                								<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                							</div>
                							<div class="fix pull_right">
                								<h3>$52,354</h3>
                							</div>
                						</div>
                						<div class="property-image">
                							<a href="/house-details" class="block dark-hover"><img src="images/properties/taunhaus2.jpg" alt="">
                								<span class="img-button text-uppercase">Узнать больше</span>
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
                				<div class="col-md-12">
                					<div class="single-property hover-effect-two">
                						<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                							<div class="title-left pull_left">
                								<h4 class="text-white mb-12"><a href="#">Вилла</a></h4>
                								<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                							</div>
                							<div class="fix pull_right">
                								<h3>$62,354</h3>
                							</div>
                						</div>
                						<div class="property-image">
                							<a href="/house-details" class="block dark-hover"><img src="images/properties/vila.jpg" alt="">
                								<span class="img-button text-uppercase">Узнать больше</span>
                							</a>
                							<div class="hover-container pl-15 pr-15 pt-16 pb-15">
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/floor.png" alt="">
                									<span>550 sqft</span>
                								</div>
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/bed.png" alt="">
                									<span>6</span>
                								</div>
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/shower.png" alt="">
                									<span>4</span>
                								</div>
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/garage.png" alt="">
                									<span>3</span>
                								</div>
                							</div>
                						</div>
                					</div>
                				</div>
                				<div class="col-md-12">
                					<div class="single-property hover-effect-two">
                						<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                							<div class="title-left pull_left">
                								<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                								<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                							</div>
                							<div class="fix pull_right">
                								<h3>$45,354</h3>
                							</div>
                						</div>
                						<div class="property-image">
                							<a href="/house-details" class="block dark-hover"><img src="images/properties/taunhaus1.jpg" alt="">
                								<span class="img-button text-uppercase">Узнать больше</span>
                							</a>
                							<div class="hover-container pl-15 pr-15 pt-16 pb-15">
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/floor.png" alt="">
                									<span>350 sqft</span>
                								</div>
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/bed.png" alt="">
                									<span>4</span>
                								</div>
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/shower.png" alt="">
                									<span>3</span>
                								</div>
                								<div class="hover-item">
                									<img class="mr-10" src="images/icons/garage.png" alt="">
                									<span>1</span>
                								</div>
                							</div>
                						</div>
                					</div>
                				</div>
                				<div class="col-md-12">
                					<div class="single-property hover-effect-two">
                						<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                							<div class="title-left pull_left">
                								<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                								<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                							</div>
                							<div class="fix pull_right">
                								<h3>$52,354</h3>
                							</div>
                						</div>
                						<div class="property-image">
                							<a href="#" class="block dark-hover"><img src="images/properties/taunhaus1.jpg" alt="">
                								<span class="img-button text-uppercase">Узнать больше</span>
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
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Price Drop Property Area-->
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
                					<span class="opacity-text text-uppercase center">Каталог</span>
                					<h2 class="uppercase mb-25">Наш каталог</h2>
                					<p class="pb-15">Park residence is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                				</div>
                			</div>
                		</div>
                		<div class="row">
                			<div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">
                							<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                						</div>
                						<div class="fix pull_right">
                							<h3>$52,354</h3>
                						</div>
                					</div>
                					<div class="property-image">
                						<a href="#" class="block dark-hover"><img src="images/properties/taunhaus1.jpg" alt="">
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
                			<div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">
                							<h4 class="text-white mb-12"><a href="#">Вилла</a></h4>
                							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                						</div>
                						<div class="fix pull_right">
                							<h3>$62,354</h3>
                						</div>
                					</div>
                					<div class="property-image">
                						<a href="#" class="block dark-hover"><img src="images/properties/vila.jpg" alt="">
                							<span class="img-button text-uppercase">Узнать больше</span>
                						</a>
                						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/floor.png" alt="">
                								<span>550 sqft</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/bed.png" alt="">
                								<span>6</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/shower.png" alt="">
                								<span>4</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/garage.png" alt="">
                								<span>3</span>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">
                							<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                						</div>
                						<div class="fix pull_right">
                							<h3>$45,354</h3>
                						</div>
                					</div>
                					<div class="property-image">
                						<a href="#" class="block dark-hover"><img src="images/properties/taunhaus2.jpg" alt="">
                							<span class="img-button text-uppercase">Узнать больше</span>
                							<span class="p-tag bg-light-violet">Сдается</span>
                						</a>
                						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/floor.png" alt="">
                								<span>350 sqft</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/bed.png" alt="">
                								<span>4</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/shower.png" alt="">
                								<span>3</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/garage.png" alt="">
                								<span>1</span>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 col-md-6 col-sm-6">
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">
                							<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                						</div>
                						<div class="fix pull_right">
                							<h3>$78,322</h3>
                						</div>
                					</div>
                					<div class="property-image">
                						<a href="#" class="block dark-hover"><img src="images/properties/taunhaus2.jpg" alt="">
                							<span class="img-button text-uppercase">Узнать больше</span>
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
                			<div class="col-lg-4 col-md-6 col-sm-6">
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">
                							<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                						</div>
                						<div class="fix pull_right">
                							<h3>$22,876</h3>
                						</div>
                					</div>
                					<div class="property-image">
                						<a href="#" class="block dark-hover"><img src="images/properties/taunhaus1.jpg" alt="">
                							<span class="img-button text-uppercase">Узнать больше</span>
                							<span class="p-tag bg-light-violet">Сдается</span>
                						</a>
                						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/floor.png" alt="">
                								<span>550 sqft</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/bed.png" alt="">
                								<span>6</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/shower.png" alt="">
                								<span>4</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/garage.png" alt="">
                								<span>3</span>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 col-md-6 col-sm-6">
                				<div class="single-property hover-effect-two">
                					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
                						<div class="title-left pull_left">
                							<h4 class="text-white mb-12"><a href="#">Таун хаус</a></h4>
                							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E ул. Мадели Кожа, Шымкент</span>
                						</div>
                						<div class="fix pull_right">
                							<h3>$90,654</h3>
                						</div>
                					</div>
                					<div class="property-image">
                						<a href="#" class="block dark-hover"><img src="images/properties/taunhaus2.jpg" alt="">
                							<span class="img-button text-uppercase">Узнать больше</span>
                							<span class="p-tag bg-lemon">Продается</span>
                						</a>
                						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/floor.png" alt="">
                								<span>350 sqft</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/bed.png" alt="">
                								<span>4</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/shower.png" alt="">
                								<span>3</span>
                							</div>
                							<div class="hover-item">
                								<img class="mr-10" src="images/icons/garage.png" alt="">
                								<span>1</span>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Featured Property Area-->
                <!--Start of Fun Factor Area-->
                <div class="fun-factor-area bg-1 bg-overlay-1 ptb-90">
                	@include('frontend.partials._factors')
                </div>
                <!--End of Fun Factor Area-->

                <!--Start of Team Area-->
                @include('frontend.partials._team')
                <!--End of Team Area-->

                <!--Testimonial Area Start-->
                @include('frontend.partials._testimonials')
                <!--End of Testimonial Area-->

                <!--Start of Blog Area-->

                <!-- <div class="blog-area pt-70 pb-80 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-40 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">Наш блог</span>
                                    <h2 class="uppercase mb-25">Блог</h2>
                                    <p class="pb-15">DOM-INNO is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="blog-carousel carousel-none">
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="images/blog/1.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">10 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Smith</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>15</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>10</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Latest Architectural Design</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="images/blog/2.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">05 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Alfred</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>18</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>15</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Real Estate Festival - 2016</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="images/blog/3.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">01 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Zenefer</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>10</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>08</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Visual Design Concept of Real Estate</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End of Blog Area-->
                <!--Start of Client area-->
                @include('frontend.partials._clients')
                <!--End of Client area-->
@endsection()                