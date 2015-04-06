<div class="header">
        	<div class="menu">
            	<a href="/index"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
               		<input placeholder="Search..." id="searchbar" style="width:400; padding:5px; float:left; margin-left:60px; margin-top:10px;" />
               		 
               		 
                    	<div class="menubar">
                        	<ul>
								<li><a href=""/>Home</a></li>
								<li><a href="/invitefriends"/>Invite Friends</a></li>
								<li><a href="/contactusemail"/>Contact Us</a></li>
								<li><a href=""/>Account</a>
									<ul class="sub-menu">
										<li><a href="/profile/{{Auth::user()->id}}"/>Profile Setting</a></li>
										<li><a href="/logout"/>Logout</a></li>
									</ul>
								 </li>
                            </ul>
                        	
                        </div>
        	</div>
        </div>
        	<div class="mainarea">
            	<div class="leftarea">
                    
                    	<div class="account">
                        	<div class="auth-image"><img src="/assets/image/imagesa.jpg" class="authimage" width="160px" height="140px" margin="0px" /></div>
                            	<div class="auth-profile"><h3>Hardeep Singh</h3>
                                						  <h5>Internet Marketing</h5>
                                </div>
                                	<div class="message"><img src="/assets/image/massege.png" /></div>
                        </div>
                        	<div class="left-options">
                            	<div class="add-new-page"><img src="/assets/image/add new.png" /> <p>Add New Page</p>
                                </div>
                                <!--notes-content-->
                                @foreach($notes as $note)
                                <div class="add-new-page" id="pagelinkid"><a href="/updatenotes/{{$note->id}}"><p>{{$note->title}}</p></a></div>
                                @endforeach
                                
                                <!--pagination-->
                                <input type="button" value="More.." class="pagelink">
                                <input type="hidden" name="currentpage" value="1" id="currentpageid"/>
                                
                            		<div class="photo"><img src="/assets/image/photo.png" /> <p>Photo</p>
                                    </div>
                                    	<div class="games"><img src="/assets/image/games.png" /> <p>Games</p>
                                        </div>
											
											<div class="friends"><img src="/assets/image/friends.png" /> <p>Friends</p>
											
                                        </div>
                            </div>
                    </div>
                <div class="rightarea">
				</div>
				<form role="form" action="/savenotes" method="post">
                    <div class="textarea">
							<div class="textheader">
<div class="image-video" style=" margin:10px 0 0 25px; "><img src="/assets/image/image or video.png" name="Add Images-Video" />&nbsp;Add Photo/Video</div>
                            	<!--<div class="pagestyle">
									<select id="pageselected" style="width:130px; padding:3px; float:left; margin:0 auto;">
										<option value="Page_Style">Page Style</option>
										<option value="1">Plain Page</option>
										<option value="2">Line Page</option>
									</select>
								</div>
                                <div class="postbox">
									<input type="button" value="Post" class="postbutton" />
									<textarea class="textbox" placeholder="Your Note's Here..." style="width:460px; padding:10px 8px 10px; margin: 0 10px; border:0px; word-wrap: break-word; resize: none; font-family:Arial; font-size:14px; "></textarea>
                                </div>
                            </div>-->
                            <div>
								<p>@include('errors.validation')</p>
								<input type="text" name="title" class="txttitle"/>
								<input type="submit" value="Save">
                                <div class="pagestyle">
									<select id="pageselected" style="width:130px; padding:3px; float:left; margin:0 auto;">
										<option value="Page_Style">Page Style</option>
										<option value="1">Plain Page</option>
										<option value="2">Line Page</option>
									</select>
								</div>
								
                            </div>
                            
                            
                            	<div class="plains" id="plainsid">
                                		<div class="date"><p>DD | MM | YEAR</p></div>
										<textarea class="checkAuth normal" id="textareap" placeholder="Your Note's Here..." name="txtplains" style="overflow: hidden; word-wrap: break-word; resize: none; line-height:35px;"></textarea>
                                </div>
                                <!--linepageselected plains-text -->
                                <div class="plains-text" id="plains-textid">
                                	<div class="date"><p>DD | MM | YEAR</p></div>
                                	<textarea class="checkAuth normal" placeholder="Your Note's Here..." name="txtlines" style="overflow: hidden; word-wrap: break-word; resize: none; line-height:34px; padding-top: 10px;"></textarea>
                                </div>
                                <div class="share"><img src="/assets/image/shares.png"/></div>
                                 <div class="share"><img src="/assets/image/like.png"/></div>
						</div>
				</form>	
    </div><!--main-->
                        
                        
                      
