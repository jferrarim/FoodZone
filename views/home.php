<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>FoodZone</title> 
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/home.css" type="text/css" media="screen" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type ="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(window).load(function() {
    $('#slider').nivoSlider({
    		effect: 'fade',
    		directionNav: false
    	});
	});
	</script>
</head> 
<body>
	<div id="page">
		<div id="wrapper">
			<div id="nav">
				<a id="logo">
					<h1>FoodZone</h1>
					<h2>International Supermarket</h2>
				</a>
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="?controller=blog">Blog</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>	
			</div>	
			<!-- Nivo Slider -->
			<div class="slider-wrapper">
		    	<div id="slider" class="nivoSlider">
		        	<img src="slider/1.jpg" alt="" title="FoodZone open for business"/>
		        	<img src="slider/2.jpg" alt="" title="8,000 Square feet"/>
		        	<img src="slider/3.jpg" alt="" title="For your shopping pleasure"/>
		        	<img src="slider/4.jpg" alt="" title="Save big on purchases"/>
		    	</div>
			</div>
			<div id="htmlcaption" class="nivo-html-caption">
		    	<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
			</div>
			<div id="center-panel">
				<div class="column">
					<h3>Column1</h3>
					<img src="images/column1.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dolor lacus, vehicula vitae consequat et, convallis eget enim.</p>	
				</div>
				<div class="column">
					<h3>Column2</h3>
					<img src="images/column2.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dolor lacus, vehicula vitae consequat et, convallis eget enim.</p>	
				</div>
				<div class="column">
					<h3>Column3</h3>
					<img src="images/column3.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dolor lacus, vehicula vitae consequat et, convallis eget enim.</p>	
				</div>
				<div class="column">
					<h3>Column4</h3>
					<img src="images/column4.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dolor lacus, vehicula vitae consequat et, convallis eget enim.</p>	
				</div>				
			</div>
			<div id="footer">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>	
			</div>	
		</div>
	</div>
</body>
</html>


