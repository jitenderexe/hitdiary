<div class="header">
        	<div class="menu">
            	<a href="/index"><div class="logo"><img width="180" height="35" src="/assets/image/logos.png"></div></a>
               		<input placeholder="Search..." id="searchbar" style="width:400; padding:5px; float:left; margin-left:60px; margin-top:10px;" />
                    	<div class="menubar">
                        	<ul>
								<li><a href="/index"/>Home</a></li>
								<li><a href=""/>Invite Friends</a></li>
								<li><a href=""/>Account</a>
									<ul class="sub-menu">
										<li><a href=""/>Profile Setting</a></li>
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
                                <div class="notes-content"><a href="/updatenotes/{{$note->id}}"><p>{{$note->title}}</p></a></div>
                                @endforeach
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
				
				<form role="form" action="/updatenotes" method="post">
				<input type="hidden" name="id" value="{{$notesid->id}}"/>
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
								
								<input type="text" name="updtitle" value="{{$notesid->title}}" class="txttitle"/>
								
										@if(Auth::user()->id==$notesid->user_id)
									    <input type="submit" value="Update">
										<input type="button" value="Delete" class="btndelete" data-id="{{$notesid->id}}">
							            @endif
								<!--<a href="/deletenotes/{{$notesid->id}}">Delete</a>-->
								
                                <div class="pagestyle">
									<select id="pageselected" style="width:130px; padding:3px; float:left; margin:0 auto;">
										<option value="Page_Style">Page Style</option>
										<option value="1">Plain Page</option>
										<option value="2">Line Page</option>
									</select>
								</div>
								
                            </div>
                            
								<div class="plains" id="plainsid">
									{{--*/
										$timestamp = $notesid->created_at;
										$splitTimeStamp = explode(" ",$timestamp);
										$date = $splitTimeStamp[0];
										$notesdate = date('F j, Y',strtotime($date));
										$time = $splitTimeStamp[1];
								   /*--}}
									
										<div class="date"><p>{{$notesdate}}</p></div>
										<textarea class="checkAuth normal" id="textareap" placeholder="{{$notesid->content}}" name="updtxtplains" style="overflow: hidden; word-wrap: break-word; resize: none; line-height:35px;"></textarea>
                                </div>
                                
                                <!--linepageselected plains-text -->
                                <div class="plains-text" id="plains-textid">
                                	<div class="date"><p>{{$notesdate}}</p></div>
                                	<textarea class="checkAuth normal" placeholder="{{$notesid->content}}" name="updtxtlines" style="overflow: hidden; word-wrap: break-word; resize: none; line-height:34px; padding-top: 10px;"></textarea>
                                </div>
                                
                                <div class="share"><img src="/assets/image/shares.png"/></div>
                                 <div class="share"><img src="/assets/image/like.png"/></div>
						
						</div>
						
					</form>
					
    </div><!--main-->
                    
                      
