<?php include 'header-new.php'; ?>
<style>
    .opacity-full.opacity-full-cust{
        z-index: 0;
    }
    p.margin-two.text-med.width-90.center-col{
        color: #828282;
    }
	.fnt-sans{
				font-family: 'Open Sans', sans-serif;
			}
			.fnt-300{
				font-weight: 300;
			}
			.fnt-400{
				font-weight: 400;
			}
			.text-black{
				color: #000;
			}
			.ttle-header{
				font-size: 45px;
				line-height: 50px;
				font-weight: bold;
				margin-top: 10px;
				color: #000;
			}
			.divider-ttle{
				background-color: #25292c;
				height: 1px;
				margin: 20px auto 25px;
				width: 100px;
			}
			.wrap-header-section{
				background-image: url('http://demo.limitless.company/rome/single/img/backgrounds/home.jpg');
				background-attachment: scroll;
				background-position: center;
				background-size: cover;
				height: 810px;
				color: #fff;
				position: relative;
			}
			.wrap-header-section .phone{
				background-image: url("http://demo.limitless.company/rome/single/img/misc/phone.png");
				background-position: center center;
				background-repeat: no-repeat;
				bottom: 100px;
				height: 621px;
				left: -80px;
				padding-left: 224px;
				padding-top: 79px;
				position: absolute;
				text-align: left;
				width: 803px !important;
			}
			.overlay {		
				background: -moz-linear-gradient(top,  rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,1)));
				background: -webkit-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				background: -o-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				background: -ms-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				background: linear-gradient(to bottom,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80000000', endColorstr='#000000',GradientType=0 );
				bottom: 0px;
				left: 0px;
				position: absolute;
				top: 0px;
				right: 0px;
			}
			.preview img {
				border: 3px solid #252527;
				border-radius: 3px;
				box-sizing: content-box !important;
				height: 391px;
				width: 218px;
			}
			.info-right{
				padding-left: 20px;
				position: absolute;
				text-align: left;
				bottom: 240px;
				right: 0;
				width: 100%;
			}
			.fnt-bold{
				font-weight: bold;
			}
			.info-right .ttle{
				font-size: 55px;
				line-height: 55px;
			}
			/* Section 2 */
			.section-2{
				background-color: #f8f8f8;
				padding: 80px 0 80px;
			}
			/* Section 3 */
			.section-3{
				padding: 100px 0;
			}
			.section-3 .divider-ttle{
				margin-bottom: 45px;
			}
			.wrap-icon-circle{
				background-color: #f8f8f8;
				border: 1px solid #e1e1e1;
				border-radius: 50%;
				display: inline-block;
				font-size: 40px;
				line-height: 90px;
				padding-left: 30px;
				padding-right: 30px;
			}
</style>
    
      		<div class="wrap-header-section">
			<div class="overlay">
				<nav class="navbar navbar-default navbar-cust navbar-fixed-top">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand navbar-brand-cust" href="#">
								<img class="nav-logo" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/logo-modeltable-6.png" alt="">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="#">Home</a>
								</li>
								<li>
									<a href="#">About</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Contact us</a>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">
										<i class="fa fa-sign-in"></i>
										Login
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-edit"></i>
										Sign-up
									</a>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-md-5" style="height:910px;">
							<div class="phone">
								<div class="preview">
									<img src="http://easycaptures.com/fs/uploaded/1013/5665375456.jpg" alt="Download our Model Table App">
								
							</div>
						</div>
						<div class="col-md-7" style="height:910px;">
							<div class="info-right">
								<h1 class="fnt-bold ttle">ModelTable</h1>
								<h1 class="fnt-300 fnt-sans">Setting the vibe with our exclusive network.</h1>
								<a href="" class="btn btn-lg btn-danger">
									<i class="fa fa-download"></i>
									Download App
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- developers section -->
        <section id="developers" class="border-bottom" style="display:none;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center ">
                        <h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3">Developers</h3>
                        <h2>Getting results through personalization and utilization of Technology, Dietary and Education program for todays Veterans. Can you help? Join today and Support a Veteran.</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">                    	
						<div class="panel panel-default">
						  <div class="panel-body">
							<h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3"><i class="fa fa-code"></i></h3>
							Do you have code or an app that could run this brand? Veteransrehab.com is connected with Contrib.
						  </div>
						</div>
                    </div>
					<div class="col-md-6 text-center">
						<div class="panel panel-default">
						  <div class="panel-body">
							<h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3"><i class="fa fa-code"></i></h3>
							Contrib is the new way to contribute and get equity building the world's biggest brands and startups. We have our own Developers platform, and we run the world's best brands on them. Do you have an app, or code that could help run veteransrehab.com?
						  </div>
						</div>
					</div>
                    <!-- end section title -->
                </div>
				<div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center ">
                       <a class="btn btn-danger btn-bg" id="btnsubmit">
		                <i class="fa fa-thumbs-up"></i>
		                Inquire today
		               </a>
					</div>
				</div>
            </div>
        </section> 
        <!-- end developers section -->
        <!-- about us section -->
        <section id="about" class="border-bottom">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center ">
                        <h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3">About Veterans Rehab</h3>
                        <h1>We understand how to help Veterans</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 center-col text-center">
                    	<p>
						Veterans Rehab is a progressive and agile program and system for effective rehabilitation for todays Veterans. Both physical and mental rehabilitation is needed for a vast number of veterans.  We are pushing the boundaries of using and creating new technologies that can create and measure results, a collaborative and safe environment and a network of professionals focused on the well being of todays Veterans. </p>
						<p>The custom programs we create allow for greater individual growth of our Veterans while utilizing Virtual Reality, BioSensoring, Dietary Development and Management along with Education that includes are amazing Military Degree program for members of our Veterans Rehab facility. We are one of a kind and hope you consider learning more about Veterans Rehab, spreading the word or joining our network to support today's Veterans. 
						</p>
                    </div>
                    <!-- end section title -->
                </div>
              
            </div>
        </section> 
        <!-- end about us section -->

		
        <section id="features" class="features animate slow-mo even fadeIn no-padding-bottom" data-anim-type="fadeIn" data-anim-delay="200">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Our Services</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <!-- features grid -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">01</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">01</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">Customized Health Treatments</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">Personalized Health treatments include dietary analysis and customize food intake.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage xs-margin-top-ten">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">02</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">02</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">Neuro and Psychological Services</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">Neological measurement with Virtual Reality engagement </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage xs-margin-top-ten">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">03</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">03</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">Education via Gamification</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100"> Education both in terms of symptom knowledge but other growth/career related programs,Gamification structure to help keep relaps. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- end features grid -->
                </div>
                <div class="row"><div class="col-md-12 col-sm-12"><div class="wide-separator-line margin-eight  no-margin-lr"></div></div></div>
            </div>
        </section>
		
        <!-- services section -->
        <section id="services" class="fix-background no-padding-bottom" style="background-image:url('http://rdbuploads.s3.amazonaws.com/backgrounds/bg-veteran2.jpg');">
            <div class="opacity-full opacity-full-cust bg-dark-gray"></div>
            <div class="container margin-five no-margin-top sm-margin-bottom-ten">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3">Why Veterans Rehab?</h3>
                        <h1 class="white-text">What,Why and How</h1>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row margin-ten no-margin-bottom">
                    <div class="col-md-4 col-sm-4 text-center xs-margin-bottom-ten">
                        <span class="services-number font-weight-100 gray-text"></span>
                        <h3 class="section-title main-font no-padding margin-one no-margin-top black-text letter-spacing-3">What</h3>
                        <p class="margin-two text-med width-90 center-col">Veterans Rehab is a new and advanced rehabilitation programs using personalized health development in a networked and connected environmenent.
						16 veterans with 4 full time support staff on site occupy the 26,000 sq. ft private estate allowing Veterans and Growth and Wellness professionals plenty of room and opportunity to grow along side the veterans.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center xs-margin-bottom-ten">
                        <span class="services-number font-weight-100 gray-text"></span>
                        <h3 class="section-title main-font no-padding margin-one no-margin-top black-text letter-spacing-3">why</h3>
                        <p class="margin-two text-med width-90 center-col">Todays Veterans are taking there lives every 30 minutes, veterans who risked life and limb for our protection and freedom.  We believe we can do better utilizing our ability to put people and programs together that can create, measure and deliver results.   
						We have to try and make a different by utilizating our resources and Veterans Rehab is our current venture focus.  </p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center xs-margin-bottom-ten">
                        <span class="services-number font-weight-100 gray-text"></span>
                        <h3 class="section-title main-font no-padding margin-one no-margin-top black-text letter-spacing-3">how</h3>
                        <p class="margin-two text-med width-90 center-col">Using a well know estate location, Kessler Mansion, we bring together the right people and technology and programs that create personalized wellness development using technology, gamification, network effects and other strategies that help veterans in rehabilitiation.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end services section -->
      
        <!-- contact us section -->
        <section id="contact-us">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center ">
                        <h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3">Join and Help</h3>
                        <h1>Get in touch with us. Learn more about how you can help VeteransRehab.com</h1>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row margin-ten ">
                    <div class="col-md-9 text-center center-col">
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">+1 317 4143751</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">5455 N. Federal Highway Suite E., Boca Raton  FLORIDA 33438</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom"><a class="black-text" href="mailto:social@veteransrehab.com">social@veteransrehab.com</a></h6></div>
                    </div>
                </div>
                <div class="row">
                    <!-- form -->

                    <div class="col-md-8 center-col text-center">
                    <div id="emailbox">
	                         <form id="signupform" action="">
		                        <div class="form-group">
		                            <div class="input-group input-group-lg">
		                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" placeholder="your@email.com" required pattern = "^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+)*$"/>
		                                <input type="hidden" id="refid" value="0">
										<input type="hidden" id="domain" value="<?php echo $domain?>">
										<input type="hidden" id="user_ip" value="<?php echo $_SERVER['REMOTE_ADDR']?>">
		                                <span class="input-group-btn">
		                                    <a class="btn btn-danger btn-bg" id="btnsubmit">
		                                        <i class="fa fa-thumbs-up"></i>
		                                        Join or Inquire today
		                                    </a>
		                                </span>
		                            </div>
		                        </div>
	                        </form>
	                        <div class="clear"></div>
							<div id="information" style="text-align:left !important;">
							</div>
					</div>
					
					<div class="pages hidden" id="pagesubmit">
						
						
						<div id="response_wait"><div class="span12" style="width:100%;text-align:center;margin:20px 0 35px 0;color:white;min-height:20px;font-size:18px;" id="loading">Processing . . . Please wait . . .</div></div>
						<div class="row-fluid" id="response" style="margin-top: 20px;color: rgb(12, 179, 32);text-shadow: 1px 1px 1px black;display:none">
							
							<div class="span12 text-center"><h3>Thanks, your spot is reserved!</h3> Share <?php echo ucfirst($domain)?> with you friends to move up in line and reserve your VeteransRehab profile.
								<div class="addhtml">
								<?if($additional_html != ""):?>
								<?echo base64_decode($additional_html)?>
								<?endif;?>
								</div>
								<form target="_blank" action="http://www.contrib.com/signup/follow/<?php echo ucfirst($domain)?>" method="post">
									<input type="hidden" id="pemail" name="email" value=""/>
									<button class="btn btn-warning">Continue to Follow <?php echo ucfirst($domain)?> Brand</button></form><br><br>
								</div>
								
								
							</div><!-- response -->
							
							
							
							<div id="description">
								<h3 id="header_text"></h3>
								<p id="paragraph_text"></p>
								<p>To share with your friends, click &ldquo;Share&rdquo; and &ldquo;Tweet&rdquo;:</p>
								<a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
								<br><br>
								<p> <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.socialholdings.com%2F&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
								</p>
								<div id="sharebuttons"><span id="facebook" style="margin:0 0 10px 60px"></span><span id="twitter"></span></div>
							</div>
				<!--<p class="clear" style="text-align: left;">Or copy and paste the following link to share wherever you want!</p>
							<input id="shareurl" type="text" value="" />
						-->
						<!-- <a class="cs_import">Email To Friends</a>-->

					</div>	
						
						
                    </div>
                </div>
		
            
        
    
    
    <script type="text/javascript" charset="utf-8">
        	$(document).ready(function(){
        		$('#email').click(function(){
        			$(this).attr("placeholder","");
        		});
        		
        		$('#pagesubmit').hide();
        		$('#pagesubmit').removeClass('hidden');
        		$('#btnsubmit').click(function(){
        			$('#signupform').submit();
        		});
        		$('#signupform').submit(function(){
        			
        			var email = $('#email').val();
        			var user_ip = $('#user_ip').val();
        			var indexof = email.indexOf("@");
        			var name = email.slice(0,indexof);
        			var domain = $('#domain').val(); 
        			
        			
        			if(email==''){
        				alert('Email is Required.');
        				$('#email').focus();
        				return false;
        			}else if(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(email)==false){
        				alert('Please enter a valid email address.');
        				$('#email').focus();
        				return false;
        			}else{
        				
        				$("#signupform").hide();	
        				$('#response_wait').show();
        				$("#pagesubmit").slideDown('normal');
        				
        			//DOMAINDI LEADS		
        			jQuery.ajax({
        				type: "post",url: "http://www.api.contrib.com/forms/saveleads",
        				data: {'email':email, 'domain':domain,'user_ip':user_ip},
        				success: function(res){
        					$('#response_wait').hide();
        					console.log(res);
        					
        					$("#loading").hide();
        					
        					if(res.success=='false'){
        						$('#response').append('<div class="span12 text-center" id="response">Something went wrong. Sorry for the inconvenience.</div>');
        					}else if(res.success=='success'){
        						
        						
        						$('#pemail').val(email);
        						$('#response').css('display','block');
        						
        					}else{
        						$('#response').append('<div class="span12 text-center" id="response">'+res.success+'<br><br>Visit our <a href="http://www.contrib.com/brand/details/'+domain+'" target="_blank">'+domain.toUpperCase()+' brand page</a> for further details. <br><br>Thank you! <br><br></div>');
        					}
        					
        				}});	
        			
        				// SALESFORCE LEAD
        				$.post("http://www.manage.vnoc.com/salesforce/addlead",
        				{
        					'firstName':name,
        					'lastName':name,
        					'title':'',
        					'email':email,
        					'phone':'',
        					'street':'',
        					'city':'',
        					'country':'',
        					'state':'',
        					'zip':'',
        					'domain':domain,
        					'form_type':'Contrib Lead Template'
        					
        				},function(data2){
        					console.log(data2);
        				}
        				);
        				
        				
        				return false;
        				
        			}
        			
        			return false;

        		});

        });

</script>
                    <!-- end form -->
                </div>
            </div>
        </section>
        <!-- end contact us section -->
        <!-- footer -->
        <footer>
    
    <div style="position:relative;">
        <div class="animated rotateIn r-d">
            <a alt="Contrib" target="_blank" href="<?=$domain_affiliate_link;?>">
                <img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/badge-contrib-8.png">
            </a>
        </div>
    </div>
           <div class="footer-dark-1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-3">
									<h3 class="fnt-bold text-uppercase">
										VeteransRehab.com
									</h3>
									<p>
										Getting results through personalization and utilization of Technology, Dietary and Education program for todays Veterans.
									</p>
								</div>
								<div class="col-md-3">
									<h3 class="fnt-bold text-uppercase">
										get started
									</h3>
									<ul class="list-unstyled f-a-links">
										<li>
											<a href="/partners" class="text-capitalize">
												Partner with us
											</a>
										</li>
										<li>
											<a href="/staffing" class="text-capitalize">
												Apply now
											</a>
										</li>
										<li>
											<a href="/referral" class="text-capitalize">
												referral
											</a>
										</li>
										<li>
											<a href="/fund" class="text-capitalize">
												fund
											</a>
										</li>
										<li>
											<a href="/developers" class="text-capitalize">
												developers
											</a>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<h3 class="fnt-bold text-uppercase">
										company
									</h3>
									<ul class="list-unstyled f-a-links f-a-links-mrgBtm">
										<li>
											<a href="/about" class="text-capitalize">
												About us
											</a>
										</li>
										<li>
											<a href="/terms" class="text-capitalize">
												Terms
											</a>
										</li>
										<li>
											<a href="/privacy" class="text-capitalize">
												Privacy
											</a>
										</li>
										<li>
											<a href="/contact" class="text-capitalize">
												Contact us
											</a>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<h3 class="fnt-bold text-uppercase">
										partners
									</h3>
									<p>
										<a href="http://www.rackspace.com">
											<img style="height:45px;" title="Rackspace" alt="Rackspace" src="http://c15162226.r26.cf2.rackcdn.com/Rackspace_Cloud_Company_Logo_clr_300x109.jpg">
										</a>
									</p>
									<h3 class="fnt-bold text-uppercase">
										Socials
									</h3>
									<ul class="list-inline socials-ul">
										<li>
											<a title="twitter" class="icon-button twitter" href="https://twitter.com/veteransrehab">
												<i class="fa fa-twitter"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="facebook" class="icon-button facebook" href="https://www.facebook.com/VeteransRehab-141614676191190/timeline/">
												<i class="fa fa-facebook"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="google-plus" class="icon-button google-plus" href="https://plus.google.com/114242285179025456153/about/p/pub">
												<i class="fa fa-google-plus"></i>
												<span></span>
											</a>

										</li>

										<li>
											<a title="youtube" class="icon-button youtube" href="https://www.youtube.com/channel/UC78-fAdt4ujp8mm7HbyzFGQ?guided_help_flow=3">
												<i class="fa fa-youtube"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="pinterest" class="icon-button pinterest" href="https://www.pinterest.com/veteransrehab/">
												<i class="fa fa-pinterest"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="github" class="icon-button github" href="https://github.com/veteransrehab">
												<i class="fa fa-github"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="linkedin" class="icon-button linkedin" href="https://www.linkedin.com/company/veteransrehab">
												<i class="fa fa-linkedin"></i>
												<span></span>
											</a>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-dark-2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 f-a-links">
									© 2015 <a href="" class="text-capitalize ">VeteransRehab.com</a>. All Rights Reserved. 
								</div>
								<div class="col-md-6">
									<ul class="list-inline text-right f-a-links">
										<li>
											<a href="#about" class="text-capitalize">
												<i class="fa fa-bookmark-o"></i>
												About us
											</a>
										</li>
										<li>
											<a href="/terms" class="text-capitalize">
												<i class="fa fa-book"></i>
												Terms
											</a>
										</li>
										<li>
											<a href="/privacy" class="text-capitalize">
												<i class="fa fa-cube"></i>
												privacy
											</a>
										</li>
										<li>
											<a href="/contact" class="text-capitalize">
												<i class="fa fa-phone-square"></i>
												contact us
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
                <!-- scroll to top --> 
                <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
                <!-- scroll to top end... --> 
        </footer>
        <!-- end footer -->

        <!-- javascript libraries --> 
        <!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script> 
        <script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" src="js/skrollr.min.js"></script>  
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- easy piechart-->
        <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <!--portfolio with shorting tab --> 
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
        <!-- owl slider  -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <!-- magnific popup  -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/popup-gallery.js"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="js/text-effect.js"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.revolution.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit videos  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- one page navigation-->
        <script type="text/javascript" src="js/one-page-main.js"></script>
        <!-- setting --> 
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>