<?php

class AdminController extends BaseController {

	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Login
	|
	*/
	public function login()
	{
			$rules = array(
    			'email'=>'required',
    			'password'=>'required'
    		);
			$validator = Validator::make(Input::all(), $rules);
	    		if($validator->fails()){
					//return Redirect::back()->withErrors($validator)->withInput();
					$notification[]=array('message'=>'Invalid Email or Password',
										  'type'=>'error',
						                  'timeout'=>'10'
										);
						Session::flash('notification', $notification);
						return Redirect::back();
				}
			else{
				$userdata = array(
            	'email' => Input::get('email'),
            	'password' => Input::get('password'));
            	
				if(Auth::attempt($userdata))
				{
					$notification[]=array('message'=>'Welcome To HitDiary',
										  'type'=>'success',
						                  'timeout'=>'10'
										);
						Session::flash('notification', $notification);
					    return Redirect::to('/index');
				}else{
					 return Redirect::to('/');
					}
			}
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Index View
	|
	*/
	public function indexView()
	{
			 $notes  = Note::paginate(2);
			 if(Auth::check())
			 return View::make('main')->with('page','index')->with('notes', $notes);
		else
			 return Redirect::to('/');
			
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Signup
	|
	*/
	public function signup()
	{
			$rules = array(
				'first_name'		=> 'required',
				'last_name'			=> 'required',
				'email'             => 'required|email|unique:users',
				're_email'          => 'required|email|same:email',
				'password'          => 'required|alpha_num|between:4,12',
				'gender'            => 'required'
			);
			
			$validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
						return Redirect::back()->witherrors($validator)->withInput();
					}else{
							$user = new User;
							$user->first_name  = Input::get('first_name');
							$user->last_name   = Input::get('last_name');
							$user->email       = Input::get('email');
							$user->password    = Hash::make(Input::get('password'));
							$user->gender      = Input::get('gender');
							$user->save();
								if($user->id){
									   Auth::loginUsingId($user->id);
									   return Redirect::to('/index');
									}else
									   return Redirect::to('/');
						 }
		
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Save Notes
	|
	*/
	public function savenotes()
	{		
			if(!Input::get('txtplains') && Input::get('txtlines'))
				return Redirect::back();
			else
				$rules = array(
    			'title'     => 'required'
    		);
			$validator = Validator::make(Input::all(), $rules);
	    		if($validator->fails()){
					return Redirect::back()->withErrors($validator)->withInput();
				}
			else{
				$table=	new Note();
            	$table->user_id  = Auth::user()->id;
				$table->title    = Input::get('title');
				if(Input::get('txtplains'))
				$table->content = Input::get('txtplains');
				else
				$table->content = Input::get('txtlines');
				$table->save();
					return Redirect::to('/index');
				}
				return Redirect::to('/');
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Update Notes View
	|
	*/
	public function updatenotesView($id)
	{
		 $notes = Note::all();
		 $notesid = Note::where('id',$id)->first();
		 return View::make('main')->with('page','updatenotes')->with('notes', $notes)->with('notesid', $notesid);
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Update Notes
	|
	*/
	public function updatenotes()
	{
		 $noteid = Input::get('id');
		 $table = Note::find($noteid);
		 if(!Input::get('updtxtplains') && Input::get('updtxtlines'))
				return Redirect::back();
			else
				$rules = array(
    			'updtitle'     => 'required'
    		);
			$validator = Validator::make(Input::all(), $rules);
	    		if($validator->fails()){
					return Redirect::back()->withErrors($validator)->withInput();
				}
			else{
				if($table->id)
				$table->user_id  = Auth::user()->id;
				$table->title    = Input::get('updtitle');
				if(Input::get('updtxtplains'))
				$table->content = Input::get('updtxtplains');
				else
				$table->content = Input::get('updtxtlines');
				$table->save();
					return Redirect::back();
				}
				return Redirect::to('/index');
		 
	}
	
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Profile Setting View
	|
	*/
	public function profileView($id)
	{
		$user = User::where('id',$id)->first();
		return View::make('main')->with('page','profile')->with('user', $user);
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Profile Setting
	|
	*/
	public function profile()
	{
		$userid = Input::get('usersid');
		$user   = User::find($userid);
		
		$file   = Input::file('profileimg');
		$destinationPath = 'images/';
		$extension = $file->getClientOriginalExtension(); 
		$filename = str_random(6).".".$extension;
		$upload_success = $file->move($destinationPath, $filename);
		
		if($user->id){
		$user->first_name  = Input::get('first_name');
		$user->last_name   = Input::get('last_name');
		$user->user_image = $filename;
		$user->email       = Input::get('email');
	    $user->save();
		return Redirect::to('/index');
	    }else
	    return Redirect::back();
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Invite Friends View
	|
	*/
	public function invitefriendsView()
	{
		return View::make('main')->with('page','invitefriends');
	}
	
	/*
	|----------------------------------------------------
	| Admin Controller
	|----------------------------------------------------
	|	Admin Controller For Send Email To Invite Friends
	|
	*/
	public function sendemailinvite()
	{
		$token      = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
		$link      = "http://$_SERVER[HTTP_HOST]/$token";
		$user_email = Input::get('email');
		
		
		$data     = array('email'=>$user_email, 'token'=>$token, 'link'=>$link);
		Mail::send('pages.sendemail', $data,function($message) use($data){
			$message->to($data['email'])->subject("Invite Friends : ");
		});
		
		$invite = new Invite();
		$invite->user_id      = Auth::user()->id;
		$invite->invite_email = $user_email;
		$invite->token        = $token;
		$invite->save();
		
		$notification[]=array('message'=>'Email Send Successfully',
										  'type'=>'success',
						                  'timeout'=>'20'
										);
						Session::flash('notification', $notification);
						return Redirect::to('/index');
				
	}
	
	/*
	|----------------------------------------------------
	| Admin Controller
	|----------------------------------------------------
	|	Admin Controller For Send Email To Invite Friends
	|
	*/
	public function loginView(){
			
			return View::make('main')->with('page', 'login');
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Delete Notes
	|
	*/
	public function deletenotes()
	{
		$id = Input::get('id');
		$notesid = Note::where('id', $id)->first();
		if($notesid){
			$notesid->delete();
		  }
			return 'success';
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Page Link
	|
	*/
	public function pagelink()
	{
		$notes  = Note::paginate(2);
		return $notes;
	}
	
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Contact Us Email View Page
	|
	*/
	public function contactusemailView()
	{
		return View::make('main')->with('page', 'contactusemail');
	    
	}
	
	/*
	|------------------------------------
	| Admin Controller
	|------------------------------------
	|	Admin Controller For Contact Us Page
	|
	*/
	public function contactusemail()
	{
		$ToEmail = Input::get('email');
		$name    = Input::get('name');
		$messsage = Input::get('messsage');
		
		$data    = array('email'=>$ToEmail, 'name'=>$name, 'messsage'=>$messsage);
		Mail::send('pages.contactus', $data,function($message) use($data){
			$message->to($data['email'])->subject("Notification Mail : ");
		});
		
		return Redirect::back();
	    
	}
	
	

}
