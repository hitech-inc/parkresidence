@extends('frontend.layouts.master')

@section('content')
<!--Start of Banner Area-->
<div class="banner-area bg-2 ptb-165">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-title text-center">
					<h1 class="text-uppercase text-white">Детали</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Banner Area-->

<!--Start of Featured Property Area-->
<div class="property-area ptb-120">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
				<div class="property-image mb-57">
					<img src="{{ '/images/houses/house-details/' . $house->img }}" alt="">
				</div>
				<div class="property-desc mb-56">
					<h4 class="details-title mb-22">Описание</h4>
					<p class="mb-24">{!! $house->description !!}</p>
				</div>
				
			</div>
			<div class="col-md-4 pl-35">
				<!-- <div class="single-sidebar-widget fix mb-40">
					<div class="sidebar-widget-title mb-30">
						<h5>Search for Property</h5>
					</div> 
					<form action="properties-details.html#" class="">
						<div class="form-box mb-18 pr-10">
							<div class="select">
								<select name="location">
									<option>Location</option>
									<option>Dhaka</option>
									<option>Shylet</option>
									<option>Khulna</option>
									<option>Barishal</option>
									<option>Chittagong</option>
								</select>
							</div>
						</div>
						<div class="form-box mb-18 pl-10">
							<div class="select">
								<select name="sub-location">
									<option>Sub - Location</option>
									<option>Dhaka</option>
									<option>Shylet</option>
									<option>Khulna</option>
									<option>Barishal</option>
									<option>Chittagong</option>
								</select>
							</div>
						</div>
						<div class="form-box mb-18 pr-10">
							<div class="select">
								<select name="min-sqft">
									<option>Min area (sqft)</option>
									<option>Dhaka</option>
									<option>Shylet</option>
									<option>Khulna</option>
									<option>Barishal</option>
									<option>Chittagong</option>
								</select>
							</div>
						</div>
						<div class="form-box mb-400 pl-10">
							<div class="select">
								<select name="max-sqft">
									<option>Max area (sqft)</option>
									<option>Dhaka</option>
									<option>Shylet</option>
									<option>Khulna</option>
									<option>Barishal</option>
									<option>Chittagong</option>
								</select>
							</div>
						</div>
						<div class="form-box pr-10">
							<div class="select">
								<select name="bedrooms">
									<option>No of Bedroom</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</div>
						</div>
						<div class="form-box pl-10">
							<div class="select">
								<select name="bedrooms">
									<option>No of Bathroom</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-box large mt-8">
							<div class="price_filter">
								<div class="price_slider_amount mb-20">
									<div class="slider-values">
										<span>Price Range</span>
										<input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
									</div>
								</div>
								<div class="slider-range"></div>
							</div>
							<button name="search_price" type="button" class="button search_price lemon mt-36"><span><span>SEARCH PROPERTY</span></span></button>
						</div>
					</form>
				</div> -->
				<div class="single-sidebar-widget fix mb-60 hidden-sm hidden-xs">
					<div class="sidebar-widget-title mb-32">
						<h5>Все дома</h5>
					</div>  
					<div class="row">
						@forelse($houses as $house)
						<div class="col-md-6 pr-9 mb-18 col-sm-3">
							<div class="single-property hover-effect-two">
								<div class="property-title fix pl-18 pr-18 pt-9 pb-0 bg-violet">
									<div class="title-left">
										<h4 class="text-white mb-12"><a href="properties-details.html">{{ $house->title }}</a></h4>
									</div>
								</div>
								<div class="property-image">
									<a href="{{ url('/town-houses/' . $house->slug) }}" class="block dark-hover"><img src="/images/houses/small_img/{{ $house->small_img }}" alt="">
										<span class="img-button text-uppercase">Подробнее</span>
									</a>
								</div>
								<div class="property-title fix pl-18 pr-18 pt-9 pb-9 bg-violet">
									<!-- <h3>$52,354</h3> -->
								</div>
							</div>
						</div>

						@empty <h4>Нет данных</h4>

						@endforelse
					</div>
				</div>
				<!-- <div class="single-sidebar-widget fix">
					<div class="sidebar-widget-title mb-32">
						<h5>Tags</h5>
					</div>    
					<ul class="tags">
						<li><a href="properties-details.html" class="mb-15 mr-7">Real Estate</a></li>
						<li><a href="index.html" class="mb-15 ml-7 mr-7">Home</a></li>
						<li><a href="properties-details.html" class="mb-15 ml-7">Appartment</a></li>
						<li><a href="properties-details.html" class="mb-15 mr-7">Duplex Villa</a></li>
						<li><a href="properties-details.html" class="mb-15 ml-7">Buy Property</a></li>
					</ul>
				</div> -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="property-details">
					<div class="row">
						<div class="col-md-3">
							<h4 class="details-title mb-38">Детали</h4>
							<div class="bg-gray fix pl-35 pt-42 pr-35 pb-39 left-column mb-56">
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-floor.png" alt="" class="pr-8">
									<span>Площадь 450 квм</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-shower.png" alt="" class="pr-8">
									<span>Ванна 3</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-garage.png" alt="" class="pr-8">
									<span>Паркинг</span>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<h4 class="details-title mb-38">Удобства</h4>
							<div class="bg-gray fix pl-50 pr-50 pt-44 pb-38 right-column mb-56" style="padding-bottom: 20px;">
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Система кондиционирования</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Прачечная комната</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Балкон</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Кабельное ТВ</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Высокоскоростной оптоволоконный интернет</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Парковка</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Котельная комната</span>
								</div>
								<div class="desc-info mb-26">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Кладовая комната</span>
								</div>
								<div class="desc-info">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Посудомечная машина</span>
								</div>
								<div class="desc-info">
									<i class="fa fa-check-square-o mr-9"></i>
									<span>Тостер</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-4 pl-15">
							<h4 class="details-title mb-37">Поэтажный план</h4>
							<div class="desc-images">
								<img src="{{ '/images/houses/house-details/' . $house->plane }}" alt="">
							</div>
						</div>
						<!-- <div class="col-6 pr-15">
							<h4 class="details-title mb-37">Видео презинтация</h4>
							<div class="desc-video">
								<iframe src="https://player.vimeo.com/video/63953556?title=0&byline=0&portrait=0" width="475" height="267"></iframe>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Featured Property Area-->
@endsection