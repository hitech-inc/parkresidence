<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Главная || Park residence</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->		
        <!-- <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"> -->
        
        <!-- Google Fonts
        ============================================ -->		
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet"> 
        <link rel="stylesheet" href="/css/fonts.css">
        
        <!-- All css files are included here
        ============================================ -->    
        <!-- Bootstrap CSS
        ============================================ -->		
        <link rel="stylesheet" href="/css/bootstrap.min.css"> 
        
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="/css/core.css">
        
        <!-- Theme shortcodes/elements style
        ============================================ -->  
        <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
        
        <!--  Theme main style
        ============================================ -->  
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/mystyle.css">
        
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="/css/responsive.css">  
        
		<!-- Style Customizer CSS
		============================================ -->
        <link rel="stylesheet" href="/css/style-customizer.css">
    	<link href="index.html#" data-style="styles" rel="stylesheet">  
        
        <!-- Modernizr JS -->
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script> 

        <!-- <link rel="shortcut icon" href="{{ asset('images/icons/favicon.png') }}" type="image/png"> -->   
    </head>  
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->  

        <!--Main Wrapper Start-->
        <div class="wrapper bg-white fix">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header class="header-area">
                    @include('frontend.partials._header')  
                </header>
                
                <!-- Start content area -->
				@yield('content')
                <!-- End content area -->
                
                <!--Start of Footer area-->
                @include('frontend.partials._footer')
                <!-- End of Footer area -->
            </div>   
            <!--End of Bg White--> 
			
        </div>    
        <!--End of Main Wrapper Area--> 
       
        
        <!-- jquery latest version
		========================================================= -->	
        <script src="/js/vendor/jquery-1.12.4.min.js"></script>
        
        <!-- Bootstrap framework js
		========================================================= -->			
        <script src="/js/bootstrap.min.js"></script>
        
        <!-- Owl Carousel js
		========================================================= -->		
        <script src="/js/owl.carousel.min.js"></script>
        
        <!-- nivo slider js
		========================================================= -->	    
		<script src="/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="/lib/nivo-slider/home.js" type="text/javascript"></script>
        
        <!-- Waypoint Js
		========================================================= -->	
        <script src="/js/waypoints.min.js"></script>
        
		<!-- Video Player JS
		========================================================= -->			
        <script src="/js/jquery.mb.YTPlayer.js"></script>
        
		<!-- AJax Mail JS
		========================================================= -->			
        <script src="/js/ajax-mail.js"></script>
        
		<!-- Mail Chimp JS
		========================================================= -->			
        <script src="/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Slick Carousel JS
		========================================================= -->			
        <script src="/js/slick.min.js"></script>
        
		<!-- Style Customizer JS
		========================================================= -->		
        <script src="/js/style-customizer.js"></script>
        
        <!-- Plugin Js
		========================================================= -->	
        <script src="/js/plugins.js"></script>
        
        <!-- Main js file contents all jQuery plugins activation
		========================================================= -->		
        <script src="/js/main.js"></script>
        <!-- Начало Plugin для респонсивной адаптации карты изображения на разных дисплеях -->
        <script src="/js/imageMapResizer.min.js"></script>
        <script type="text/javascript" src="/js/jquery.maphilight.min.js"></script>
        <!-- <script src="https://unpkg.com/tippy.js@2.5.2/dist/tippy.all.min.js"></script> -->
        <script>
            $(document).ready(function() {
                $('map').imageMapResize();

                //initialize highlight это подсветска при наведении мыши на объект на карте
                var data = {};
                $('.map').maphilight();
                data.alwaysOn = true;
                data.fillColor = 'ffff00';
                data.fillOpacity = '0.6';
                data.fill = true;
                data.stroke = true;
                data.strokeColor = 'ff0000';
                data.strokeOpacity = 1;
                data.strokeWidth = 1;
                data.fade = true;
                data.neverOn = false;
                data.groupBy = false;
                data.wrapClass = true;
                // plenty of shadow:
                data.shadow = false;
                data.shadowX = 0;
                data.shadowY = 0;
                data.shadowRadius = 6;
                data.shadowColor = '000000';
                data.shadowOpacity = 0.8;
                data.shadowPosition = 'outside';
                data.shadowFrom = false;

            });//End ready
        </script>
        <!-- Конец Plugin для респонсивной адаптации карты изображения на разных дисплеях -->
        
    </body>
</html>