<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Douglas Snook's Web Developer portfolio.'">
	<meta name="author" content="">
	<link rel="icon" type="image/png" href="img/favicon.png">

	<title>Douglas Snook - Web Developer Portfolio</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/hover-min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<link rel="stylesheet" href="css/aos.css" />

	<script src="js/aos.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<script>
		AOS.init({
			offset: 200,
			duration: 800,
			easing: 'ease-in-sine',
			delay: 100,
			once: true,
		});
	</script>
	<!-- Navigation -->
	<nav class="navbar bg-primary">
		<a class="navbar-brand" href="#top">Home</a>
		<a class="navbar-brand" href="#about">About</a>
		<a class="navbar-brand" href="#portfolio">Portfolio</a>
		<a class="navbar-brand" href="#footer">Contact</a>
	</nav>

	<!-- Header -->
	<header id="top" class="header">
		<div class="text-vertical-center" data-aos="fade-up">
			<h1>Douglas Snook</h1>
			<h3>Web Dev / Programmer</h3>
			<br>
			<a href="#about" class="btn btn-primary btn-lg">About Me</a>
			<a href="/pdf/Resume.pdf" target="_blank" class="btn btn-primary btn-lg">View Resume</a>
		</div>
	</header>


	<!-- About -->
	<section id="about" class="about bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" data-aos="slide-right">
					<h2>Hi, I'm Douglas.</h2>
					<p class="lead">With a background in Web Development, I can create pixel perfect web pages with great quality in a timely manner.<br>I love the ability to
					take an idea and be able to create something from that idea. I enjoy the endless amount of learning that comes along with programming and have a strong desire to add to my skill set on a daily basis.
					As well as Web Development, I also enjoy creating applications and other random projects. A good example of this would be my discord bot.
					</p>
					<p class="lead">
					Please feel free to take a look at my portfolio to see some past projects that I have worked on and to see some of the skills that I possess. If you feel that I can
					be of service to you, please feel free to contact me below! Thank you for taking the time to look at my portfolio.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Portfolio -->
	<section id="portfolio" class="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<h2>My Work</h2>
					<hr class="small">
					<div class="row">
						<div class="col-md-6">
							<a href="#" data-toggle="modal" data-target="#portfolio-modal-discord">
								<div class="card hvr-float-shadow">
									<h4 class="card-title">Discord Bot</h4>
									<img class="card-img-top img-responsive" src="img/portfolio-discord.jpg" alt="Card image cap">
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="#" data-toggle="modal" data-target="#portfolio-modal-comcast">
								<div class="card  hvr-float-shadow">
									<h4 class="card-title">Comcast Website</h4>
									<img class="card-img-top img-responsive" src="img/portfolio-comcast.jpg" alt="Card image cap">
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="#" data-toggle="modal" data-target="#portfolio-modal-tmm">
								<div class="card  hvr-float-shadow">
									<h4 class="card-title">TMMData Website</h4>
									<img class="card-img-top img-responsive" src="img/portfolio-tmm.jpg" alt="Card image cap">
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="#" data-toggle="modal" data-target="#portfolio-modal-form">
								<div class="card  hvr-float-shadow">
									<h4 class="card-title">AS3 Form Submit</h4>
									<img class="card-img-top img-responsive" src="img/portfolio-form.jpg" alt="Card image cap">
								</div>
							</a>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.col-lg-10 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<!-- Call to Action -->
	<aside class="call-to-action bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Skill Set</h2>
					<hr class="small">
					<div class="col-md-4 col-lg-offset-2">
						<ul class="list-group">
							<li class="list-group-item">HTML</li>
							<li class="list-group-item">CSS</li>
							<li class="list-group-item">PHP</li>
							<li class="list-group-item">Git/SVN</li>
							<li class="list-group-item">A/B Testing</li>
							<li class="list-group-item">Analytics</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-group">
							<li class="list-group-item">Javascript</li>
							<li class="list-group-item">jQuery</li>
							<li class="list-group-item">Node.js</li>
							<li class="list-group-item">C#</li>
							<li class="list-group-item">SSRS Reports / SSIS Packages</li>
							<li class="list-group-item">SQL</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</aside>

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 style="text-align:center;">Looking to hire? Get in touch with me!</h1>
					<div class="alert" role="alert" id="result" style="display:none;">
					</div>
                    <form id="contactForm" method="post" role="form">
						<div class="row">
							<div class="col-md-6" style="height:70px;">
								<div class="form-group">
									<label for="form_name">Name *</label>
									<input type="text" class="form-control" placeholder="Name" name="name" pattern=".{4,}" required>
								</div>
							</div>
							<div class="col-md-6"  style="height:70px;">
								<div class="form-group">
									<label for="form_company">Company</label>
									<input type="text" class="form-control" placeholder="Company" name="company">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6"  style="height:70px;">
								<div class="form-group">
									<label for="form_email">Email *</label>
									<input type="text" class="form-control" placeholder="Email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
								</div>
							</div>
							<div class="col-md-6" style="height:70px;">
								<div class="form-group">
									<label for="form_phone">Phone</label>
									<input type="text" class="form-control" placeholder="Phone" name="phone">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" style="height:200px;">
								<div class="form-group">
									<label for="form_message">Message *</label>
									<textarea name="message" class="form-control" style="height:100px;max-height:150px;max-width:750px;" placeholder="Message here." required></textarea>
								</div>
							
							</div>
						</div>
						<div class="row" style="text-align:center;">
							<input name="Submit" type="submit" class="btn btn-primary submit-btn" value="Send">
						</div>
					</form> 
                </div>
            </div>
			
        </div>
		<div class="footer-links">
			<a href="https://www.linkedin.com/in/douglas-snook-08166392/"><img src="img/linkedin.png"/></a>
			<a href="https://github.com/Dsnook100"><img src="img/github.png"/></a>
			<p>Copyright © 2017 Douglas Snook</p>
		</div>
	</footer>



	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<script src="js/main.js"></script>

	<div class="modal fade" id="portfolio-modal-tmm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">TMMData Website</h4>
				</div>
				<div class="modal-body">
					<h4>Description:</h4>
					<p>Worked on TMMData's Website during Dec 2013 - Jan 2016.<br>The website started out as a Wordpress website which I would maintain and make small updates to.
					Eventually, we decided to stray away from Wordpress and to recreate the website with plain HTML/CSS and to create our own Blog/News area with PHP.</p>

					<h4>Langauges/Tools Used</h4>
					<ul>
						<li>Wordpress</li>
						<li>Html</li>
						<li>CSS</li>
						<li>Javascript/jQuery</li>
						<li>PHP</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="portfolio-modal-comcast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Comcast Website</h4>
				</div>
				<div class="modal-body">
					<h4>Description:</h4>
					<p>Worked with Adobe and Comcast to implement test plans onto Comcast's live website. I would create scripts that would change the appearance and
					functionality of certain pages of the website. I would then put these scripts into Adobe campaigns that were created in Adobe Target.</p>

					<h4>Langauges/Tools Used</h4>
					<ul>
						<li>Javascript/jQuery</li>
						<li>Html</li>
						<li>CSS</li>
						<li>Adobe Target (Test & Target)</li>
						<li>Adobe Analytics</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="portfolio-modal-discord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Discord Bot</h4>
				</div>
				<div class="modal-body">
					<h4>Description:</h4>
					<p>Creating a discord bot to help get information quickly while on discord.</p>
					<p>Using various node modules to connect to API's to gather information when requested from the bot. Web scraping for information not directly available from an API.
					   Bot has the ability to join voice channels and to play sound from youtube videos as well as many other commands.
					</p>

					<a href="https://github.com/Dsnook100/SnookBot" target="_blank">View Code</a>

					<h4>Langauges/Tools Used</h4>
					<ul>
						<li>Node.js</li>
						<li>Node Modules</li>
						<li>Javascript/jQuery</li>
						<li>Discord API</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="portfolio-modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">HTML Post Form to Amazon S3</h4>
				</div>
				<div class="modal-body">
					<h4>Description:</h4>
					<p>Created a simple form that allowed a file upload to an Amazon S3 storage space.</p>
					<a href="https://github.com/Dsnook100/Form-Upload-to-Amazon-S3" target="_blank">View Code</a>

					<h4>Langauges/Tools Used</h4>
					<ul>
						<li>Html</li>
						<li>CSS</li>
						<li>Javascript/jQuery</li>
						<li>Amazon Web Services</li>
						<li>SHA Hashing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	
    <script>
		//Contact same page submit.
        $("#contactForm").submit(function(event) {
			
            /* stop form from submitting normally */
            event.preventDefault();
			var $form = $(this);

			if($form.find('input[name="name"]').val() != "" && $form.find('input[name="email"]').val() != "" && $form.find('textarea[name="message"]').val() != ""){
				/* get some values from elements on the page: */ 
				var $submit = $form.find('button[type="submit"]'),
                name_value = $form.find('input[name="name"]').val(),
				phone_value = $form.find('input[name="phone"]').val(),
                email_value = $form.find('input[name="email"]').val(),
				company_value =  $form.find('input[name="company"]').val(),
                message_value = $form.find('textarea[name="message"]').val();

				/* Send the data using post */
				var posting = $.post('/php/contact.php', { 
					name: name_value, 
					email: email_value, 
					phone: phone_value,
					company: company_value,
					message: message_value 
				});

				posting.done(function(data){
					$('#result').text('Your message has been successfully sent.');
					$('#result').addClass('alert-success');
					$('#result').removeClass('alert-danger');
					$('#result').show();
					name_value = $form.find('input[name="name"]').val(''),
					phone_value = $form.find('input[name="phone"]').val(''),
					email_value = $form.find('input[name="email"]').val(''),
					company_value = $form.find('input[name="company"]').val(''),
					message_value = $form.find('textarea[name="message"]').val('');
				});
			} else {
				$('#result').text('Your message has not been successfully sent. Please fill out the forms and resubmit.');
				$('#result').addClass('alert-danger');
				$('#result').removeClass('alert-success');
				$('#result').show();
			}
        });
    </script>

</body>

</html>