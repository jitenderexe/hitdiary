@extends('layouts.default')
@section('content')
	
	@if($page=='login')
		@include('pages.auth.login')
		
	@elseif($page=='signup')
		@include('pages.auth.signup')
		
	@elseif($page=='index')
		@include('pages.index')
		
	@elseif($page=='reset')
		@include('pages.reset')
		
	@elseif($page=='updatenotes')
		@include('pages.updatenotes')
		
	@elseif($page=='profile')
		@include('pages.profile')
		
	@elseif($page=='invitefriends')
		@include('pages.invitefriends')
		
	@elseif($page=='contactusemail')
		@include('pages.contactusemail')
		
	@endif

@endsection
