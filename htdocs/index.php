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
	
	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


	
	
	
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
		
		 $('.tab-content').each( function(i){
            
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
	<script type="text/javascript" src="../js/form-validator.min.js"></script>  
    <script type="text/javascript" src="../js/contact-form-script.js"></script>
    
	
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

						<li><a href="#portfolio">Services</a>
						
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
					<img src="../graphics/home.png" class="icon" alt="Me!" width="50px" height="50px">
					
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
			<div class="col-xs-12 col-sm-6 aboutcontent1">
				
				<img src="../graphics/me2.jpg" class="me2" alt="Me!" width="200px" height="200px">
			
			
			</div>
			<div class="col-xs-12 col-sm-6 aboutcontent2">
			
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

<hr class="style4"></hr>
	
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
			<div class="col-md-offset-4 col-md-4">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab" class="blue">Planning</a></li>
                <li><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" class="orange">Design</a></li>
                <li><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab" class="blue">Build</a></li>
				<li><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab" class="orange">Responsive</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active blue" id="Section1">
				
				<img src="../graphics/planning.png" class="icon" alt="Me!" width="50px" height="50px">
				
				
                    <h4>1) Planning</h4>
					<hr class="style4"></hr>
                    <p>
                        Before building a website there are many factors which influence the design. Each custom website built is <b>tailored</b> to the individual client in order to achieve the best results. Through <b>effective communication</b> the planning stage is important in determining the scope of the website, such as the functionality and information architecture.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade orange" id="Section2">
				
				<img src="../graphics/ps.png" class="icon" alt="Me!" width="50px" height="50px">
				
                    <h4>2) Design</h4>
					<hr class="style4"></hr>
                    <p>
					The design process is then carefully chosen based on the specific needs of the client, focusing on aspects such as <b>layout, colour palette and typefaces</b> in order to gain optimum results. Attention to detail is essential, keeping the design to a <b>simple yet effective</b> structure.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade blue" id="Section3">
				
				<img src="../graphics/code.png" class="icon" alt="Me!" width="50px" height="50px">
				
                    <h4>3) Build</h4>
					<hr class="style4"></hr>
                    <p>
                        One thing I look for in this stage is writing good code, <b>less is better.</b> I'm always looking to improve my coding skills, as effective code means better learning and understanding. I am passionate in staying current with the <b>latest web technologies and trends</b> to help both my clients and further my skills in both web design and development.
                    </p>
                </div>
				 <div role="tabpanel" class="tab-pane fade orange" id="Section4">
				 
				 <img src="../graphics/tab.png" class="icon" alt="Me!" width="50px" height="50px">
				 
                    <h4>4) Responsive</h4>
					<hr class="style4"></hr>
                    <p>
                       The use of mobile devices to access the Internet is rapidly increasing, it is very important that potential customers can both access and function effectively on these mediums. All my websites are built to meet the responsive needs of different devices such as Mobile Phones and Tablets, not only Computers. 
                    </p>
                </div>
            </div>
        </div>
		
		
		</div>
		
		<hr class="style4"></hr>
		<div class="row" id="about-bottom-row">
			<div class="col-xs-12 col-md-6 aboutbottom3"></div>
			<div class="col-xs-12 col-md-6 aboutbottom4"></div>
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
			
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
			
<!-- Start Contact Form -->
<form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
  <div class="form-group">
    <div class="controls">
      <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
      <div class="help-block with-errors"></div>
    </div>  
  </div>
 
  <button type="submit" id="submit" class="btn btn-effect"><i class="fa fa-check"></i> Send Message</button>
  <div id="msgSubmit" class="h3 text-center hidden"></div> 
  <div class="clearfix"></div>   
 
</form>     
<!-- End Contact Form -->
			
			</div>
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


