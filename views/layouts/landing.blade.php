<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SIMASET | DISKOMINFO</title>

		<!--Bagian CSS-->
		{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
		{!! Html::script('assets/jquery/jquery-3.1.1.min.js')!!}
		<!--/Akhir bagian CSS-->
		<style type="text/css" media="screen">
			body{overflow: hidden;}
			.btn-primary{
				background-color: transparent;
				border-color: white;
				width: 3cm; 
			}
			.btn-primary:hover, 
			.btn-primary:focus, 
			.btn-primary:active, 
			.btn-primary.active, 
			.open .dropdown-toggle.btn-primary { 
  				color: #ffffff; 
  				background-color: #990F4D; 
  				border-color: #E51DF0; 
			}

        	.homepage-hero-module {
    			border-right: none;
    			border-left: none;
    			position: relative;
    			z-index: -1;
			}
			.no-video .video-container video,
			.touch .video-container video {
    			display: none;
			}
			.no-video .video-container .poster,
			.touch .video-container .poster {
    			display: block;
			}
			.video-container {
    			position: relative;
    			bottom: 0%;
    			left: 0%;
    			height: 100%;
    			width: 100%;
    			overflow: hidden;
    			background: #000;
    			z-index: -1;
			}
			.video-container .poster img {
    			width: 100%;
    			bottom: 0;
    			position: absolute;
			}
			.video-container .filter {
    			z-index: 100;
    			position: absolute;
    			background: rgba(0, 0, 0, 0.4);
    			width: 100%;
			}
			.video-container video {
    			position: absolute;
    			z-index: 0;
    			bottom: 0;
			}
			.video-container video.fillWidth {
    			width: 100%;
			}
    	</style>

		<!--Bagian Java Script-->

    	<script type="text/javascript">
    		//jQuery is required to run this code
		$( document ).ready(function() {

    		scaleVideoContainer();

    			initBannerVideoSize('.video-container .poster img');
    			initBannerVideoSize('.video-container .filter');
    			initBannerVideoSize('.video-container video');

    		$(window).on('resize', function() {
        		scaleVideoContainer();
        		scaleBannerVideoSize('.video-container .poster img');
        		scaleBannerVideoSize('.video-container .filter');
        		scaleBannerVideoSize('.video-container video');
    		});

		});

		function scaleVideoContainer() {
    		var height = $(window).height() + 5;
    		var unitHeight = parseInt(height) + 'px';
    		$('.homepage-hero-module').css('height',unitHeight);
		}

		function initBannerVideoSize(element){
    		$(element).each(function(){
        		$(this).data('height', $(this).height());
        		$(this).data('width', $(this).width());
    		});

		scaleBannerVideoSize(element);

		}

		function scaleBannerVideoSize(element){

    		var windowWidth = $(window).width(),
    		windowHeight = $(window).height() + 5,
    		videoWidth,
    		videoHeight;

    	// console.log(windowHeight);

    		$(element).each(function(){
        		var videoAspectRatio = $(this).data('height')/$(this).data('width');

        		$(this).width(windowWidth);

        		if(windowWidth < 1000){
            		videoHeight = windowHeight;
            		videoWidth = videoHeight / videoAspectRatio;
            		$(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            		$(this).width(videoWidth).height(videoHeight);
        	}

        	$('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    		});
		}
    	</script>

	</head>
	<body>
		<div class="homepage-hero-module">
			<div class="video-container">
				<div class="filter"></div>
				<video autoplay loop class="fillWidth">
					<source src="assets/video/MP4/Fade-To-Black.mp4" type="video/mp4" />
					<source src="assets/video/WEBM/Fade-To-Black.webm" type="video/webm" />
				</video>
				<div class="poster hidden">
					<img src="assets/video/Snapshots/Fade-To-Black.jpg" alt="image">
				</div>
			</div>
		</div>

		<div style="position: fixed;">
			@yield('content')
		</div>

		
		{!! Html::script('assets/bootstrap/js/jquery.min.js') !!}
		{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
	</body>
</html>