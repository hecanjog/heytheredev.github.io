<!DOCTYPE html> 
<html> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Erik Schoster, Web Developer</title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
	<script type="text/javascript" src="http://www.heythere.org/js/jquery.cycle.all.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Lato:light,bold' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	
	<script type="text/javascript"> 
	$(document).ready(function() {
	    $('#work').cycle({
			fx: 'fade',
			speed: 500, 
			next: '.next', 
			prev: '.prev',
			timeout: 0
		});
	});
	</script>
</head>

<body>
	<div id="wrapper">
		<div id="welcome">
			<p><b>My name is <a href="mailto:erik@heythere.org">Erik Schoster</a> and I write software.</b></p>

			<p class="arrows"><span class="prev">&larr;</span> &nbsp; <span class="next">&rarr;</span></p>
		</div>

		<div id="work">
			<div>
<!--				<p>
					I work primarily with <a href="http://python.org">Python</a>, <a href="http://php.net" target="new">PHP</a>, 
					<a href="http://en.wikipedia.org/wiki/JavaScript" target="new">Javascript</a>, <a href="http://www.w3.org/standards/webdesign/htmlcss" target="new">HTML5</a>,
					and <a href="http://www.w3.org/standards/webdesign/htmlcss" target="new">CSS3</a>.
-->

				</p>
				
				<p>
					I have more than ten years of experience writing clean and compliant code for the web and I'd love to put 
					that experience to work on your project.
				</p>

				<p>
					Please <a href="#" class="next">have a look at my work</a> and <a href="mailto:erik@heythere.org">get in touch</a> for an estimate!
				</p>
			</div>
			
			
			<div>
				<img src="/img/habitat-small.gif" class="next" />
				<p>
					 I developed a robust and full featured content management system for 
					the Milwaukee chapter of <a href="http://www.milwaukeehabitat.org" target="new">Habitat for Humanity.</a> My CakePHP web application allows their 
					content administrators to easily manage their schedule, upload media, and automatically format 
					photos from a custom built dashboard.
				</p>
			</div>
			
			<div>
				<img src="/img/lp-small.gif" class="next" />
				<p>
					Working within an artist's budget, I used a number of great hosted technologies to build a 
					store and social network for this <a href="http://www.listeningpartyrecords.com" target="new">boutique vinyl record label.</a>
				</p>
			</div>
			
			<div>
				<img src="/img/cmwf-small.gif" class="next" />
				<p>
					I designed the mockup above for the prototype of this heavily trafficked <a href="http://www.whynotthebest.org" target="new">industry leading healthcare 
					website.</a> During my time in the web team at the Island Peer Review Organization in New York, I went on to 
					help develop the first generation of this CakePHP powered behemoth, capable of crunching through millions of 
					rows of hospital quality data without breaking a sweat.
				</p>
			</div>
		
			<div>
				<img src="/img/recycle-small.gif" class="next" />
				<p>
					Catral Doyle of Milwaukee provided the look, and I cooked up a lightweight backend administration 
					system in raw PHP and HTML for this <a href="http://www.recyclemorewisconsin.org" target="new">State of Wisconsin</a> 
					recycling initiative.
				</p>
			</div>
		</div>
	
	</div>
</body>
</html>
