<?php include 'header-pages.php'; ?>

<title>Developers - Do you have projects or applications that could be used in our brands?</title>
	<meta name="title" content="Developers join us at -<?=$domain?> " />
	<meta name="description" content="Join our cause as we create web apps that makes sense in this world. Get equity and cash as well." />
    </head>
<body>
<? include 'navigation.php'; ?>
			<section class="content-top-margin page-title page-title-small bg-gray">
            <div class="container">
                <div class="row">
                    <div style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;" class="col-md-8 col-sm-12 wow fadeInUp animated" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="black-text">Developer </h1>
                        <!-- end page title -->
                    </div>
                    <div style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;" class="col-md-4 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none animated" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/developer">Developer</a></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>		
		 <!-- content section --> 
    </div>
		 <!-- content section -->
        <section class="wow fadeIn">
            <div class="container">
				<div class="row">
                    <div class="col-md-5 col-sm-8 text-center center-col">
                        <p class="title-large text-uppercase letter-spacing-1 black-text font-weight-600">We want you join us.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-11 center-col xs-no-padding">
						<div class="blur-box text-justify">
							<h2 class="ttle text-capitalize text-center">
								<?php echo $domain?> Terms of Use
							</h2>
							<br /> 
							<p class="devdesc">
								<i class="fa fa-arrows"></i>
								Do you have code or an app that could run this brand? <?php echo ucfirst($domain)?> is connected with <a href="http://contrib.com/signup/firststep?domain=<?php echo $domain?>" target="_blank">Contrib</a>. 
							</p>
							<p class="devdesc">
								<i class="fa fa-arrows"></i>
								<a href="http://contrib.com/signup/firststep?domain=<?php echo $domain?>" target="_blank">Contrib</a> is the new way to contribute and get equity building the world's biggest brands and startups. We have our own Developers platform, and we run the world's best brands on them. Do you have an app, or code that could help run <?php echo $domain?>?
							</p>
							<div class="form-group text-center">
								<a href="/contact" class="btn btn-primary">Inquire Here</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>		
            
    
    
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
        <? include 'footer.php'; ?> 

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

