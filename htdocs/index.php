<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Steven Pike Designs</title>
	
	<!-- CSS -->
	
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/custom.css" type="text/css" title="myStyleSheet">
	
	
	
<link rel="stylesheet" type="text/css" href="../css/jquery.fullPage.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "linear", "swing" or "easeInOutCubic". -->
<script src="../js/jquery.easings.min.js"></script>


<!-- This following line is only necessary in the case of using the plugin option `scrollOverflow:true` -->
<script type="text/javascript" src="../js/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="../js/jquery.fullPage.js"></script>
	
	
	
	
	
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script>
	


$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.bubble').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},2000);
                    
            }
            
        }); 
		
		
		jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},4000);
	});
    
    });
    
});
</script>
	
	
 </head>
 <body>
	<!-- Bootstrap Jquery must be before Javascript -->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    
	
		<!-- Main front page properties -->

			
	<div class="container-fluid" id="main">
		
		<!-- Navigation bar-->
		
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="myNavbar">
				
					<ul class="nav navbar-nav">
						<li><a href="#main">Home</a>
						
						<script class="secret-source">
	   $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script>
						
						</li>
						
						<li><a href="#aboutanchor">About Me</a>
						<script class="secret-source">
	   $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script></li>

						<li><a href="#portfolio">Portfolio</a>
						
						<script class="secret-source">
	   $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script>
						
						</li>
						<li><a href="#contact">Contact</a>
						
						<script class="secret-source">
	   $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script>
						
						</li> 
					</ul>
				</div>
			</div>
		</nav>
		
			<div class="row" id="text">
				<div class= "col-xs-12 col-md-5 steven">

				<b>Steven

				</div>
				<div class= "col-xs-12 col-md-2 pike">
				
				<span class="bold">Pike</span>
				
				</div>
				<div class= "col-xs-12 col-md-5 designs">
				
				Designs</b>

				</div>
			</div>
			
			
			<div class="row" id="subtext">
				<div class= "col-md-12 hidden-sm hidden-xs">
				<hr class="style3"></hr>
					Freelance <span class="bold">Web Design</span> and <span class="bold">Front-End Developer</span><br>Based in Berkshire, England
					<br><hr class="style2"></hr>
				</div>
			</div>
			
			<div class="row" id="main-bottom-row">
				<div class="col-xs-12 col-md-6 aboutbottom1"></div>
				<div class="col-xs-12 col-md-6 aboutbottom2"></div>
			</div>

			
			
			<div class="row" id="button">
				<div class="col-xs-12">
					<div class="arrow animated bounce">
						<img width="60" height="60" alt="" src="../graphics/arrow.png" />
					</div>
				</div>
			</div>
			
			
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	<div class="container-fluid" id="about">
		<div class="row" id="aboutanchor">
			<div class="col-xs-12 col-md-6 abouttop1"></div>
			<div class="col-xs-12 col-md-6 abouttop2"></div>
		</div>
		
		
		<div class="row">
			<div class="col-xs-12 aboutme">
				<hr class="style4"></hr>
				<h2> About Me</h2>
				<hr class="style5"></hr>

			</div>
	
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-6 aboutcontent1">
				
				<img src="../graphics/me2.jpg" class="me2" alt="Me!" width="200px" height="200px">
			
			
			</div>
			<div class="col-xs-12 col-md-6 aboutcontent2">
			
			<div class="bubble">Hi there! <br><br>My name is Steven Pike, I design and build bespoke & responsive websites for small to medium sized businesses. <br><br> Here are some of my skills:</div>
			
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">

			
			
<div class="skillbar clearfix " data-percent="95%">
	<div class="skillbar-title"><span>HTML5</span></div>
	<div class="skillbar-bar"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="90%">
	<div class="skillbar-title"><span>CSS3</span></div>
	<div class="skillbar-bar"></div>
	<div class="skill-bar-percent">90%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title"><span>jQuery</span></div>
	<div class="skillbar-bar"></div>
	<div class="skill-bar-percent">75%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
	<div class="skillbar-title"><span>PHP</span></div>
	<div class="skillbar-bar"></div>
	<div class="skill-bar-percent">50%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="90%">
	<div class="skillbar-title"><span>SEO</span></div>
	<div class="skillbar-bar"></div>
	<div class="skill-bar-percent">90%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
	<div class="skillbar-title"><span>Photoshop</span></div>
	<div class="skillbar-bar"></div>
	<div class="skill-bar-percent">50%</div>
</div> 

<hr class="style4"><div>
			
			

			</div>
	
		</div>
		<div class="row" id="about-bottom-row">
			<div class="col-xs-12 col-md-6 aboutbottom3"></div>
			<div class="col-xs-12 col-md-6 aboutbottom4"></div>
		</div>
		
		
		
	</div>
</div>


	<div class="container-fluid" id="portfolio">
		<div class="row">
			<div class="col-xs-12 col-md-6 abouttop1"></div>
			<div class="col-xs-12 col-md-6 abouttop2"></div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 aboutme">
				<hr class="style4"></hr>
				<h2>Services</h2>
				<hr class="style5"></hr>

			</div>
	
		</div>
		<div class="row">
			<div class="wrap">
  <ul class="tabs group">
    <li><a class="active" href="#/one">Tab 1</a></li>
    <li><a href="#/two">Tab 2</a></li>
    <li><a href="#/three">Tab 3</a></li>
  </ul>
  <div id="panels">
    <p id="one">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit aliquam mauris, a mattis lectus varius id. Ut dolor tortor, hendrerit et porttitor in, gravida sed felis. Donec vehicula ex nec venenatis pulvinar. Donec vel sodales neque.</p>
    <p id="two">Donec tincidunt tortor ut magna mollis sagittis. Mauris eu nibh non purus gravida hendrerit. Donec enim nisi, pretium eu libero sit amet, bibendum sagittis velit. Pellentesque non dapibus leo. Suspendisse ante tellus, volutpat ac leo eget, venenatis rhoncus sem.</p>
    <p id="three"> Aenean dapibus eleifend venenatis. Integer et suscipit dui. Nam tellus diam, mattis in ultrices et, feugiat ac libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
  </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script><script>
(function($) {

	var tabs =  $(".tabs li a");
  
	tabs.click(function() {
		var panels = this.hash.replace('/','');
		tabs.removeClass("active");
		$(this).addClass("active");
    $("#panels").find('p').hide();
    $(panels).fadeIn(200);
	});

})(jQuery);
</script>
		</div>
		
		
	</div>
	
	
	<div class="container-fluid" id="contact">
		<div class="row">
			<div class="col-xs-12 col-md-6 abouttop1"></div>
			<div class="col-xs-12 col-md-6 abouttop2"></div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 aboutme">
				<hr class="style4"></hr>
				<h2> Contact Me</h2>
				<hr class="style5"></hr>

			</div>
	
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--
	
			<div class="row" id="height">
				<div class="col-xs-12 col-md-6 profile">
					<h2>About</h2>
					<hr class="style4"></hr>
						<div class="me"><img src="../graphics/me2.jpg" class="me" alt="Me!" width="200px" height="200px"></div>
					
				
				</div>
				<div class="col-xs-12 col-md-6 skills">
					<div class="row-fluid rowheight">
						<div class="col-xs-3 design">
							<div class="top" id="red1"></div>
							<div class="inside" id="red2">
				
					<br>Web Design
					
							</div>
						</div>
				
						<div class="col-xs-3 dev">
							<div class="top" id="purple1"></div>
							<div class="inside" id="purple2">
							
					<br>Front-End Development
					
							</div>
						</div>
						
						<div class="col-xs-3 responsive">
							<div class="top" id="green1"></div>
							<div class="inside" id="green2">
							
					<br>Responsive
					
							</div>
						</div>
					</div>
					
					
					
					<div class="row-fluid rowheight">
						<div class="col-xs-3 seo">
							<div class="top" id="yellow1"></div>
							<div class="inside" id="yellow2">
				
					<br>SEO
					
							</div>
						</div>
				
						<div class="col-xs-3 bespoke">
							<div class="top" id="mid1"></div>
							<div class="inside" id="mid2">
							
					<br>Bespoke
					
							</div>
						</div>
						
						<div class="col-xs-3 latest">
							<div class="top" id="orange1"></div>
							<div class="inside" id="orange2">
							
					<br>Latest Trends
					
							</div>
						</div>
					</div>

				
				
				
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	</div> 



		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<!--<span class="logo"><img src="../graphics/logo.png" alt="light bulb" style="width:30%;height:8%;"></span>
			<h1>STEVEN PIKE <span class="yellow">DESIGNS</span></h1>
				<hr class="style"></hr>
			<h2><span class="yellow">FREELANCE WEB DESIGN & FRONT-END DEVELOPER</span><br>BASED IN BERKSHIRE, ENGLAND</h2>
				<hr class="style1"></hr>
				
	
				<a href="#" rel="" id="anchor1" class="ghost-button1">Portfolio</a>
				<script class="secret-source">
	   $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
    return false;
});
</script>

				
				<a href="#myAnchor" rel="" id="anchor1" class="ghost-button2">About</a>
				<script class="secret-source">
	   $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
    return false;
});
</script>

				
				
				<a href="#" rel="" id="anchor1" class="ghost-button3">Contact</a>
				<script class="secret-source">
					$('a').click(function(){
					$('html, body').animate({
					scrollTop: $( $(this).attr('href') ).offset().top
					}, 1000);
					return false;
					});
				</script>
				
				
			<span class="scroll-btn">
				<a href="#">
					<span class="mouse">
						<span></span>
					</span>
				</a>
					<p>scroll down</p>
			</span>
		</div>
	</div>
	
	-->
	
	
		
		
		

	
	
  </body>
</html>


