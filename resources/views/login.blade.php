		  
		<!-- MAIN PANEL -->
		<div id="main" role="main">
	<!-- MAIN CONTENT -->
			<div id="content">	
			
	
				<!-- row -->
				<div class="row"> 
					<div class="col-sm-offset-3 col-sm-6 col-xs-12">
					 <div id="content" class=" full-page login">					 						
				  
							<form method="post" action="login/checkUserLogin" id="login-form" class="smart-form client-form">
							 <!--img src="assets/img/logo-mundio1.png" alt class="logo"--> 
								<header>
									<b>Tariff Testing Portal</b>
								</header>
								
								<fieldset> 
									<section>
										<label class="label">Username</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="text" name="username" id="username" value="" required="required" maxlength="25" autocomplete="off">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter username</b></label>
									</section>
									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password" id="password" required="required" maxlength="25" autocomplete="off" />
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
										<!-- <div class="note">
											<a href="forgotpassword.html">Forgot password?</a>
										</div> -->
									</section> 
								</fieldset>
								<footer>
									<input type="submit" name="submit" value="Sign in" class="btn btn-primary">
								</footer>
							</form>							
							
							<div class="alert alert-danger" id="errmsg" >
							
							</div>
							
						</div>				 
				
						</div>
				
					</div>

				<!-- end row -->

			</div>
			
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

<script>
 
  $(document).ready(function() {
	 //alert('hai');
	 $("#username").focus(function(){
		$("#errmsg").hide();
	 });
	 $("#password").focus(function(){
		$("#errmsg").hide();
	 });	 
  });
	  
</script>	