<?php include('header-new-2.php');?>
	<style>
		.link-c-a{
			color: #551A8B;
		}
	</style>
	<div class="section-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="ttle-header fnt-sans">About ModelTable</h1>
					<div class="divider-ttle"></div>
					<p>
						ModelTable, a division of Talent Direct Agency (TDA) is a targeted and curated matching and <br> marketing network for restaurants, events and professionals who enjoy being in and around good vibes.  
					</p>
					<p>
						ModelTable helps create The Vibe. The simple to use mobile app and web-based interface provide a <br>foundation around a curated list of talent and venues with a strong social system.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="ttle-header fnt-sans">Who uses our ModelTable Services</h1>
					<div class="divider-ttle"></div>
				</div>
				<div class="col-md-4 text-center">
					<div class="wrap-icon-circle">
						<i class="fa fa-search"></i>
					</div>
					<h3 class="text-black fnt-300 fnt-sans text-uppercase">Upscale Restaurants, Trendy/New Venues</h3>
					<p>
						ModelTable works with upscale restaurant, clubs, bars and venues to help create customer experiences by placing attractive and influential ModelTable members during set places and times to help set the vibe.    
						We work with you to outline the most effective utilization of our talent.

					</p>
					<br />
				</div>
				<div class="col-md-4 text-center">
					<div class="wrap-icon-circle">
						<i class="fa fa-desktop"></i>
					</div>
					<h3 class="text-black fnt-300 fnt-sans text-uppercase">Nightclubs/Bars</h3>
					<p>
						After Launching ModelTable, we received alot of demand from upscale bars and clubs to help in creating excitement during there down time slots, often upon venue opening or during off days.
					</p>
					<br />
				</div>
				<div class="col-md-4 text-center">
					<div class="wrap-icon-circle">
						<i class="fa fa-object-ungroup"></i>
					</div>
					<h3 class="text-black fnt-300 fnt-sans text-uppercase">Event Venues</h3>
					<p>
						No one wants 95% guys at a party, at least not in our world.  ModelTable gives venues the ability to quickly submit a request to have anyone from 1-100 professional and socialable models are you venue within a few days notice.
					</p>
					<br />
				</div>
			</div>
		</div>
	</div>
	<div class="section-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 fnt-300 fnt-sans sign-up text-center">
                    <h2 class="text-white">Get started with Modeltable, absolutely free</h2>
                    <p class="text-black">ModelTable is an exclusive network of Attractive and Fun professionals who enjoy traveling, going to nice restaurants, attending great events and are intellectually appealing.  If you fit the profile, join us at ModelTable and experience the great opportunities available with our upscale restaurants, clubs and venues.  <br />
					Grab our app today, exclusively from Contrib</p>
                    <br />
                    <div class="signup-form" id="signUpForm">
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
	                                        Join and download our app
	                                    </a>
	                                </span>
	                            </div>
	                        </div>
                        </form>
                        <div class="clear"></div>
						<div id="information" style="text-align:left !important;"></div>
						<div class="pages hidden" id="pagesubmit">
							<div id="response_wait">
								<div class="span12" style="width:100%;text-align:center;margin:20px 0 35px 0;color:white;min-height:20px;font-size:18px;" id="loading">	
									Processing . . . Please wait . . .
								</div>
							</div>
							<div id="response" style="margin-top: 20px;display:none">
								<div class="text-center">
									<h3 style="color: rgb(225, 255, 32);text-shadow: 1px 1px 1px black;">Thanks, Please register below to download this app.</h3> 
									<ul class="list-inline">
										<li>
											<a href="/post-bar.php" class="btn btn-danger">
												<i class="fa fa-fort-awesome"></i> 
												Post your Bar
											</a>
										</li>
										<li>
											<a href="/post-restaurant.php" class="btn btn-danger">
												<i class="fa fa-building-o"></i> 
												Post your Restaurant
											</a>
										</li>
										<li>
											<a href="/signup-talent.php" class="btn btn-danger">
												<i class="fa fa-diamond"></i> 
												Signup as Talent
											</a>
										</li>
									</ul>
								</div>
							</div><!-- response -->
							<div id="description">
								<h3 id="header_text"></h3>
								<p id="paragraph_text"></p>
								<p style="color:#fff;">To share with your friends, click &ldquo;Share&rdquo; and &ldquo;Tweet&rdquo;:</p>
								<a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
								<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
								<br><br>
								<p>
									<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.socialholdings.com%2F&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
								</p>
								<div id="sharebuttons">
									<span id="facebook" style="margin:0 0 10px 60px"></span>
									<span id="twitter"></span>
								</div>
							</div>
							<!--<p class="clear" style="text-align: left;">Or copy and paste the following link to share wherever you want!</p>
								<input id="shareurl" type="text" value="" />
							-->
							<!-- <a class="cs_import">Email To Friends</a>-->
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
                    </div>
                </div>
			</div>
		</div>
	</div>
<?php include('footer-new-2.php');?>