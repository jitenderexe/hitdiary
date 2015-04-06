<div class="header">
        	<div class="menu">
            	<a href="/"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
            </div>
        </div>
        <form role="form" action="/login" method="post">
			<div class="main">
				<div class="l-diary"><p>Hitdiary Login</p>
        		<!--<div class="l-table">-->
                    	<table class="loginform">
						<tr>
							<p>@include('errors.validation')</p>
							<td><input type="text" placeholder="Email" name="email" class="form2" style="width:314px; padding:6px; margin-bottom:21px; border:1px dashed;" /></td>
								<tr class="user">
									<td><input type="password" placeholder="Password" name="password" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" /></td>
								</tr>
							<tr>
								<td><input type="checkbox" name="logincheckbox"  />&nbsp;&nbsp;<span class="keep">Keep me logged in</span></td>
						    </tr>
						   <tr>
							  <td><input type="submit" value="Login" class="button" style=" width:120px; border-radius:3px; padding:5px; margin-top:16px; float:right; margin-right:110px; background-color:#495E95; color:#fff; border:#4560a6; box-shadow:0.1em 0.1em 0.2em #000000;" /></td>
							  
						   </tr>
						 </tr>
                    	</table>
                    	
                    </form>
                    	<form action="/postRemind" method="POST">
                        	<span class="forgot-p">Forgot your Password?</span>
                            <table class="lostpassword">
                            	<tr class="user">
									<td><input type="text" placeholder="Your Email Id" name="email" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" /></td>
								</tr>
								<tr>
									<td><input type="submit" value="Submit" class="button" style=" width:120px; border-radius:3px; padding:5px; margin-top:10px; float:right; margin-right:110px; background-color:#495E95; color:#fff; border:#4560a6; box-shadow:0.1em 0.1em 0.2em #000000;" /></td>
                                </tr>
                            </table>
                          </form>
                                <span class="or">or</span>
								<a href="/signup"><span class="sign-up">sign up for Hitdairy</span></a>
                	</div>
                </div>
        </div>
        				<div class="footer">
                               		<div class="f-size">
                                       <div class="languages"><p id="language">
                                    <a href="">English (UK)</a>&nbsp;
                                    <a href="">English (US)</a>&nbsp;
                                    <a href=""ব>हिन्दी</a>&nbsp;
                                    <a href="">ਪੰਜਾਬੀ</a>&nbsp;        
                                    <a href="">தமிழ்</a>&nbsp;
                                    <a href="">తెలుగు</a>&nbsp;
                                    <a href="">മലയാളം</a>&nbsp;
                                    <a href="">Español</a>&nbsp;
                                    <a href="">Português (Brasil)</a>&nbsp;....
                                    </br>
                                     <span class="c-r">Hitdairy &#169; 2013</span>
                            </p></div>
                            
                            </div>
                    </div>
        

