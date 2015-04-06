<div class="header">
      	<div class="menu">
           	<a href="/index"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
        </div>
</div>
<form action="/profile" method="post" enctype="multipart/form-data">
	<input type="hidden" name="usersid" value="{{$user->id}}" />
	<div class="main">
			<div class="l-diary"><p>Profile Setting</p>
				<!--<div class="l-table">-->
					<table class="loginform">
						<tr>
							<p>@include('errors.validation')</p>
								<tr class="user">
									<img src="/images/{{$user->user_image}}" style="width:200px; height:200px;"/>
									<td><input type="file" name="profileimg" class="form2" style="width:314px; padding:6px; margin-bottom:25px;" /></td>
								</tr>
								<tr class="user">
									<td><input type="text" placeholder="First Name" value="{{$user->first_name}}" name="first_name" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" /></td>
								</tr>
								<tr class="user">
									<td><input type="text" placeholder="Last Name" value="{{$user->last_name}}" name="last_name" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" /></td>
								</tr>
								<td><input type="text" placeholder="Email" name="email" value="{{$user->email}}" class="form2" style="width:314px; padding:6px; margin-bottom:21px; border:1px dashed;" /></td>
								<tr class="user">
									<td><input type="password" placeholder="Password" value="{{$user->password}}" name="password" class="form2" style="width:314px; padding:6px; margin-bottom:25px; border:1px dashed;" disabled="disabled"/></td>
								</tr>
								<tr>
									<td><input type="submit" value="Update" class="button" style=" width:120px; border-radius:3px; padding:5px; margin-top:16px; float:right; margin-right:110px; background-color:#495E95; color:#fff; border:#4560a6; box-shadow:0.1em 0.1em 0.2em #000000;" /></td>
								</tr>
	                  </tr>
	             </table>
	       </div>
	  </div>
</form>
