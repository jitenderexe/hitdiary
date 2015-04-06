
    	<div class="header">
        	<div class="menu">
            	<a href="/signup"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
            	<form role="form" action="/login" method="post">
                    <div class="login"><table width="400" border="0" cellspacing="10" cellpadding="20">
                                  <tr>
                                    <td><input type="text" placeholder="Email" name="email" class="ulogin" /></td>
                                    <td><input type="password" placeholder="Password" name="password" class="ulogin" name="password" /></td>
                                    <td><input type="submit" value="Login" class="loginbutton" style="width:50px; padding:3px; border-radius:1px; background-color:#495E95; color:#fff; border-color: #495E95; "/></td>
                                  </tr>
                                </table>
                     </div>
                </form>
            </div>
        </div>
    		<div class="main">
			<form role="form" action="/signup" method="post">
				<p>@include('errors.validation')</p>
        		<div class="diary">
            		<div class="form"><p>Sign up it's Free</p>
                	<input type="text" placeholder="First Name" name="first_name" class="form1" />&nbsp;&nbsp;
                	<input type="text" placeholder="Last Name" name="last_name" class="form1" /></br>
                    <input type="text" placeholder="Email" name="email" class="form2" style="width:326px; padding:7px; margin-bottom:41px; border:1px dashed;" /></br>
                    <input type="text" placeholder="Re-enter Email" name="re_email" class="form2" style="width:326px; padding:7px; margin-bottom:43px; border:1px dashed;" /></br>
                    <input type="password" placeholder="Password" name="password" class="form2" style="width:326px; padding:7px; margin-bottom:45px; border:1px dashed;" /></br>
                    <input type="radio" name="gender" value="male" class="form2" style=" margin-bottom:56px; border:1px dashed;" />&nbsp;Male&nbsp;
                    <input type="radio" name="gender" value="female"  />&nbsp;Female</br>
                    <input type="checkbox" value="on" name="checkbox" checked="checked"  />
                    <span class="term">By creating an account, I accept Terms of Service</br> and Privacy Policy.</span> </br>
                    <input type="submit" value="Submit" class="button" style=" width:120px; border-radius:3px; padding:5px; margin-top:16px; float:right; margin-right:110px; background-color:#495E95; color:#fff; border:#4560a6; box-shadow:0.1em 0.1em 0.2em #000000;" />
                
                	</div>
            	</div>
            </form>
        
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

