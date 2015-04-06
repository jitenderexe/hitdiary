<form role="form" action="/postReset" method="post" >
	<input type="hidden" name="token" value="{{ $token }}">
		<div class="main">
			<div class="l-diary"><p>Reset Password</p>
				<!--<div class="l-table">-->
					<table class="loginform">
						<tr>
							<p>@include('errors.validation')</p>
								<td><input type="text" placeholder="Email" name="email" value="{{Input::old('email')}}" class="form2" style="width:314px; padding:6px; margin-bottom:21px; border:1px dashed;" /></td>
								<tr class="user">
									<td><input type="password" placeholder="Password" value="{{Input::old('password')}}" name="password" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" /></td>
								</tr>
								<tr class="user">
									<td><input type="password" placeholder="Re-Password" value="{{Input::old('password_confirmation')}}" name="password_confirmation" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" /></td>
								</tr>
		
								<tr>
									<td><input type="submit" value="Submit" class="button" style=" width:120px; border-radius:3px; padding:5px; margin-top:16px; float:right; margin-right:110px; background-color:#495E95; color:#fff; border:#4560a6; box-shadow:0.1em 0.1em 0.2em #000000;" /></td>
								</tr>
	                  </tr>
	             </table>
	       </div>
	  </div>
</form>
