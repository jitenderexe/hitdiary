<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hit Diary</title>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="/assets/css/custom.css" />
<!--rtnotify.css-->
<link href="/assets/css/jquery.rtnotify.css" rel="stylesheet" type="text/css">

<script src="/assets/js/jquery-1.7.2.js"></script>
<script src="/assets/js/custom.js"></script>

<!--rtnotify.js-->
<script src="/assets/js/jquery.rtnotify.js" type="text/javascript"></script>


 
</head>

<body>
	<div class="contanier">
	
		@yield('content')
		
	</div>
	@include('includes.notifications')
</body>
</html>
