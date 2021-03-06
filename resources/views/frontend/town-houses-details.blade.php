@extends('frontend.layouts.master')

@section('content')
<!--Start of Banner Area-->
<div class="banner-area bg-2 ptb-165">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-title text-center">
					<h1 class="text-uppercase text-white">Параметры</h1>
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
						<li><a href="/town-houses">Таунхаусы</a></li> 
						<li class="active">{{ $house->name }}</li>
					</ol> 
				</div>    
			</div>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!--Start of Featured Property Area-->
<div class="property-area ptb-120" style="padding-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3 style="padding-bottom: 35px;">{{ $house->name }}</h3>
				<div class="property-image mb-57">
					<img src="{{ '/images/houses/house-details/' . $house->img }}" alt="">
				</div>
				<div class="property-desc mb-56">
					<h4 class="details-title mb-22">Описание</h4>
					<p class="mb-24">{!! $house->description !!}</p>
				</div>
				
			</div>
			<div class="col-md-4 pl-35">
				<div class="single-sidebar-widget fix mb-60 hidden-sm hidden-xs">
					<div class="sidebar-widget-title mb-32">
						<h5>Таунхаусы</h5>
					</div>  
					<div class="row housesSidebar">
						@forelse($houses as $h)
							{{--@if ($loop->index % 2 == 0)--}}
								<div class="col-md-6 pr-9 mb-18 col-sm-3">
									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-9 pb-0 bg-violet" @if($loop->index == 1 ) style="height: 80px;" @endif>
											<div class="title-left">
												<h4 class="text-white mb-12"><a href="{{ url('/town-houses/' . $h->slug) }}">{{ $h->name }}</a></h4>
											</div>
										</div>
										<div class="property-image">
											<a href="{{ url('/town-houses/' . $h->slug) }}" class="block dark-hover"><img src="/images/houses/small_img/{{ $h->small_img }}" alt="">
												<span class="img-button text-uppercase">Подробнее</span>
											</a>
										</div>
										<div class="property-title fix pl-18 pr-18 pt-9 pb-9 bg-violet">
											<!-- <h3>$52,354</h3> -->
										</div>
									</div>
								</div>
							{{--@endif--}}
						@empty <h4>Нет данных</h4>

						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="property-details">
					<div class="row">
						<div class="col-md-3">
							<h4 class="details-title mb-38">Детали</h4>
							<div class="bg-gray fix pl-35 pt-42 pr-35 pb-39 left-column mb-56" style="padding-left: 30px;">
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-floor.png" alt="" class="pr-8">
									<span>Площадь {{$house->kvadratura}} кв.м</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-garage.png" alt="" class="pr-8">
									<span>Участок {{$house->uchastok}} соток</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-garage.png" alt="" class="pr-8">
									<span>Высота потолка {{$house->visota_potolka}} м</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-bed.png" alt="" class="pr-8">
									<span>Спальные комнаты {{$house->spalnie_comnati}}</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-shower.png" alt="" class="pr-8">
									<span>Ванные комнаты {{$house->vannie_comnati}}</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-garage.png" alt="" class="pr-8">
									<span>Терраса {{$house->terrasa}}</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-garage.png" alt="" class="pr-8">
									<span>Паркинг на {{$house->parking}}</span>
								</div>
								<div class="desc-info mb-37" style="float: initial; width: 100%">
									<img src="/images/icons/g-garage.png" alt="" class="pr-8">
									<span>Зона барбекю</span>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<h4 class="details-title mb-38">Удобства</h4>
							<div class="bg-gray fix pl-50 pr-50 pt-44 pb-38 right-column mb-56" style="padding-bottom: 20px;">
								@if( $house->udobstva !== "" )

									@foreach( explode( ",", $house->udobstva ) as $ud )
										<div class="desc-info mb-26">
											<i class="fa fa-check-square-o mr-9"></i>
											<span>{{ trim($ud) }}</span>
										</div>
									@endforeach	
								
								@endif
							</div>
						</div>
						<div class="row">	
							<div class="col-md-3 col-sm-12 pl-15">
								<h4 class="details-title mb-37">Первый этаж</h4>
								<div class="desc-images">
									<a href="{{ '/images/houses/house-details/' . $house->big_plane1 }}" data-lightbox="roadtrip">
										<img src="{{ '/images/houses/house-details/' . $house->plane }}" alt="">
									</a>
								</div>
							</div>
							@if ($house->plane2 != null)
							<div class="col-md-3 col-sm-12 pl-15">
								<h4 class="details-title mb-37">Второй этаж</h4>
								<div class="desc-images">
									<a href="{{ '/images/houses/house-details/' . $house->big_plane2 }}" data-lightbox="roadtrip">
										<img src="{{ '/images/houses/house-details/' . $house->plane2 }}" alt="">
									</a>
								</div>
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Featured Property Area-->
@endsection