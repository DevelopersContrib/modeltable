
		<!-- footer -->
	    <footer>
	       <div class="footer-dark-1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-3">
									<h3 class="fnt-bold text-uppercase">
										<?=$domain?>
									</h3>
									<p>
										Setting the vibe for your next awesome event.
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
											<a href="contactus.php" class="text-capitalize">
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
											<a title="twitter" class="icon-button twitter" href="https://twitter.com/modeltable">
												<i class="fa fa-twitter"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="facebook" class="icon-button facebook" href="https://www.facebook.com/ModelTable-1494280144215878/">
												<i class="fa fa-facebook"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="google-plus" class="icon-button google-plus" href="https://plus.google.com/107127407471314212557/">
												<i class="fa fa-google-plus"></i>
												<span></span>
											</a>

										</li>

										<li>
											<a title="youtube" class="icon-button youtube" href="https://www.youtube.com/channel/UC2kux7Sc4UgITsb6gI1tayw">
												<i class="fa fa-youtube"></i>
												<span></span>
											</a>
										</li>
										<li>
											<a title="linkedin" class="icon-button linkedin" href="https://www.linkedin.com/company/modeltable">
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
									© 2016-2017 <a href="" class="text-capitalize "><?=$domain?></a>. All Rights Reserved. 
								</div>
								<div class="col-md-6">
									<ul class="list-inline text-right f-a-links">
										<li>
											<a href="/about" class="text-capitalize">
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
											<a href="contactus.php" class="text-capitalize">
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
	        <!-- scroll to top 
	        <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> --> 
	        <!-- scroll to top end... --> 
	    </footer>
	    <!-- end footer -->

	
	    <script>
			$(document).ready(function(){
				var shrinkHeader = 300;
				$(window).scroll(function() {
					var scroll = getCurrentScroll();
					if ( scroll >= shrinkHeader ) {
						$('.navbar-cust').addClass('shrink');
					}
					else {
						$('.navbar-cust').removeClass('shrink');
					}
				});
				function getCurrentScroll() {
					return window.pageYOffset;
				}
			});
		</script>
    </body>
</html>