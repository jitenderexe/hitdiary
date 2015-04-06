<div class="header">
      	<div class="menu">
           	<a href="/index"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
        </div>
</div>
<form action="/sendemailinvite" method="post">
	<div class="main">
			<div class="l-diary"><p>Invite Friends</p>
				<!--<div class="l-table">-->
					<table class="loginform">
						<tr>
							<p>@include('errors.validation')</p>
							<td><input type="text" placeholder="Your Email Id" name="email" value="" class="form2" style="width:314px; padding:6px; margin-bottom:21px; border:1px dashed;" /></td>
						</tr>
						<tr>
							<td><input type="submit" value="Submit" class="button" style=" width:120px; border-radius:3px; padding:5px; margin-top:16px; float:right; margin-right:110px; background-color:#495E95; color:#fff; border:#4560a6; box-shadow:0.1em 0.1em 0.2em #000000;" /></td>
						</tr>
	             </table>
	       </div>
	  </div>
</form>
