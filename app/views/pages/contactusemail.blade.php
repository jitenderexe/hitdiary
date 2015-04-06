<div class="header">
      	<div class="menu">
           	<a href="/index"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
        </div>
</div>
<form action="/contactusemail" method="post">
	<div class="main">
			<div class="l-diary"><p>Contact Us Form</p>
				<!--<div class="l-table">-->
					<table class="loginform">
						<tr>
							<p>@include('errors.validation')</p>
								<tr>
									<td width="29%" class="bodytext">Name:</td>
									<td width="71%"><input name="name" type="text" id="name" size="32"></td>
								</tr>
								<tr>
									<td class="bodytext">Email:</td>
									<td><input name="email" type="text" id="email" size="32"></td>
								</tr>
								<tr>
									<td class="bodytext">Message:</td>
									<td><textarea name="messsage" cols="45" rows="6" id="messsage" class="bodytext"></textarea></td>
								</tr>
								<tr>
									<td class="bodytext"> </td>
									<td align="left" valign="top"><input type="submit" name="Submit" value="Submit"></td>
								</tr>
	                  </tr>
	             </table>
	       </div>
	  </div>
</form>
