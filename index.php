<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gokul Suresh</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Hi! I'm Gokul Suresh, and this is my personal portfolio website."/>
		<link rel="stylesheet"
		href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="font-awesome.min.css">
		<link rel="stylesheet" href="bootstrap-social.css">
		<link rel="stylesheet" href="ihover.css">
		<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://use.fontawesome.com/3b491fed7c.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
		<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>

	</head>
	<body id="body">
		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div> 
		<div class="pageOne">
			<nav class="navbar navbar-fixed-top navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>	
					<a class="navbar-brand" href="#body">Gokul Suresh</a>
				</div>  
				<div class="navbar-collapse collapse" id="myNavbar">      
					<ul class="nav nav-pills">
						<li class="pull-right">
							<a href="#contact">Contact Me</a>
						<li class="pull-right">
							<a href="#skill">Skills</a>
						</li>
						<li class="pull-right">
							<a href="#jumbo">Projects</a>
						</li>
					</ul>
				</div>	
			</nav>
			
			<div class="block text-center">
				<h1>Gokul Suresh</h1>
				<h4 class="typed">
					Hi there! My name's Gokul, and I'm a Computer Science student who loves to make things <span class="changer">happen. </span><span class="blinker">|</span>
				</h4>
				<div class = "btnList">
					<a class="btn btn-social-icon btn-github" href="https://github.com/gsur24">
						<span class="fa fa-github"></span>
					</a>
					<a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/gokuls24">
						<span class="fa fa-linkedin"></span>
					</a>
					<a class="btn btn-social-icon btn-dropbox" href="untitled.pdf">
						<span class="fa fa-file-text"></span>
					</a>
				</div>
			</div>

			<div class="enter-button text-center">
				<a class="ghost1-button text-center" href="#jumbo">Enter</a>
			</div>

		</div>

		<div class="pageTwo">
			<header>
				<div class="jumbotron" id="jumbo">
					<div class="container">
						<h1>Projects</h1>
						<h5>Here are some of the projects that I've worked on during my time in college. Click on the images to view the source if it's available.</h5>
					</div>
				</div>
			</header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="ih-item square effect6 from_top_and_bottom">
							<a href="https://github.com/gsur24/gs8-chip8emulator">
								<div class="img"><img src="chip8.png" alt="img"></div>
								<div class="info">
									<h3>Chip 8 Emulator</h3>
									<p>Click to view GitHub source.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="chip8 text-center">
							<h3>GS8 - A Chip 8 Emulator</h3>
						</div>	
						<div class="chip82">
							<p>Description: This is a Chip 8 emulator written in C++, which can play most Chip 8 games.</p>
							<p>Technologies Used: C++, SDL2 Graphics Library</p>
							<p>Side Effects: Took a few days to start reading numbers in decimal rather than hexadecimal again.</p>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="ih-item square effect6 from_top_and_bottom">
							<a href="">
								<div class="img"><img src="2048.png" alt="img"></div>
								<div class="info">
									<h3>A Replica 2048 Game</h3>
									<p>I didn't make this source code public because the project might be reused in the class.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="chip8 text-center">
							<h3>A Replica 2048 Game</h3>
						</div>	
						<div class="chip82">
							<p>Description: This was a project that we were assigned in one of my Computer Science Classes.</p>
							<p>Technologies Used: Java, JavaFX</p>
							<p>Side Effects: None really. If anything, I started enjoying college even more than I already did.</p>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="ih-item square effect6 from_top_and_bottom">
							<a href="https://github.com/gsur24/gsur24.github.io">
								<div class="img"><img src="website.png" alt="img"></div>
								<div class="info">
									<h3>This Website</h3>
									<p>Click to view GitHub source.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="chip8 text-center">
							<h3>This Website</h3>
						</div>	
						<div class="chip82">
							<p>Description: I had some time to spare and the domain was available, so why not make a website!</p>
							<p>Technologies Used: HTML, CSS, Bootstrap</p>
							<p>Side Effects: I remembered how much I struggle with the artistic aspect.</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="pageSkills" id="skill">
			<div class="container">
				<div class="row">
					<h1 class="text-center">Skills</h1>
					<div class="col-md-12 col-lg-12">
						<h4 class="text-center">Here are some of the technologies that I'm familiar with using</h4>
					</div>
				</div>
				<div class="language-section col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4 class="text-center">Java</h4>
					
					<div class = "progress">
   						<div class = "progress-bar progress-bar-success" role = "progressbar" 
      					aria-valuenow = "65" aria-valuemin = "0" aria-valuemax = "100" style = "width: 60%;">
      					Intermediate
   						</div>
					</div>
					<h4 class="text-center">C++</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-info" style="width: 55%" aria-valuemin="0"
						aria-valuenow="60" aria-valuemax="100">
						Intermediate
						</div>
					</div>
					<h4 class="text-center">C</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" style="width: 40%" aria-valuemin="0"
						aria-valuenow="40" aria-valuemax="100">
						Beginner
						</div>
					</div>
					<h4 class="text-center">Python</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" style="width: 30%" aria-valuemin="0"
						aria-valuenow="30" aria-valuemax="100">
						Beginner
						</div>
					</div>
					<h4 class="text-center">HTML/CSS</h4>
					<div class = "progress">
   						<div class = "progress-bar progress-bar-success progress-bar-striped" role = "progressbar" 
      					aria-valuenow = "30" aria-valuemin = "0" aria-valuemax = "100" style = "width: 30%;">
      					Beginner
   						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="tools-sectionnone row text-center">
		
						<i class="devicon-bootstrap-plain-wordmark colored fa-5x" data-toggle="tooltip" title="Bootstrap"></i>
						<i class="devicon-git-plain-wordmark colored fa-5x" data-toggle="tooltip" title="Git"></i>
						<i class="devicon-vim-plain colored fa-5x" data-toggle="tooltip" title="Vim Editor"></i>
							
					</div>
					<div class="tools-sectiontwo row text-center">
						
						<i class="devicon-android-plain-wordmark colored fa-5x" data-toggle="tooltip" title="Android Development"></i>
						<i class="devicon-ubuntu-plain-wordmark colored fa-5x" data-toggle="tooltip" title="Ubuntu"></i>
						<i class="devicon-linux-plain colored fa-5x" data-toggle="tooltip" title="Linux"></i>
						
					</div>
					<div class="tools-sectionthree row text-center">
						
						<i class="devicon-javascript-plain colored fa-5x" data-toggle="tooltip" title="Javascript"></i>
						<i class="devicon-mysql-plain colored fa-5x" data-toggle="tooltip" title="MySQL"></i>
						<i class="devicon-jquery-plain-wordmark colored fa-5x" data-toggle="tooltip" title="jQuery"></i>
						
					</div>
				</div>
				
			</div>
			<div class="resume-button text-center">
				<a class="ghost-button text-center" href="untitled.pdf">View Resume</a>
			</div>
		</div>
		<div class="pageContact" id="contact">
			<h2 class="text-center">Contact Me</h2>
			<div class="container">
				<form id="contact-form" method="post" action="contact.php" role="form">
					<div class="messages"></div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
					</div>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Your Name Here"/>
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>

		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h6>Copyright &copy; 2016 Gokul Suresh</h6>
					</div>
					<div class="col-sm-4">
						<h6>Navigation</h6>
						<ul class="unstyled">
							<li><a href="#body">Home</a></li>
							<li><a href="#jumbo">Projects</a></li>
							<li><a href="#skill">Skills</a></li>
							<li><a href="#contact">Contact Me</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h6>Links</h6>
						<ul class="unstyled">
							<li><a href="https://www.linkedin.com/in/gokuls24">LinkedIn</a></li>
							<li><a href="https://github.com/gsur24">GitHub</a></li>
							<li><a href="untitled.pdf">Resume</a></li>
						</ul>
					</div>
				</div>
			</div>

		</footer>

			<script>
			$(function() {
				  $('a[href*="#"]:not([href="#"])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html, body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
				});
		</script>
		<script>
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<script>
			$(document).ready(function(){
			    setTimeout(function() {
			    	$('body').addClass('loaded');
			    }, 3000);
			});
		</script>
	</body>

</html>
