<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Typing2 in English</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style type="text/css">
	.body{width: 100%;
    height: 100%; position: absolute;
    top: 0;
    left: 0;
    overflow: auto; 
    margin: 0px; line-height: 1;}

	.main{text-align: center; width: 725px;  overflow: auto; margin: 60px auto; display: table; }
	.left{width:350px; height:35px;    display: inline-block;margin:auto; padding:5px;border: 1px solid blue; text-align: right; overflow: hidden;
				border-right-color:#eaeaea; color:#c0c0c0; box-sizing: content-box; font-size: 28px;     font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"; line-height: 1.3;}

	.right{width:350px; height:35px; margin:auto;  padding:5px;  border: 1px solid green; text-align: left;  display: inline-block;
				border-left-color:#eaeaea; float: right; box-sizing: content-box; font-size: 30px;     font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";}
	#counterDiv{ font-size: 20px; }	
</style>

</head>
<body class="body">
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4"> <a class="navbar-brand" href="#">Tarasov Learn English</a> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
 <div class="collapse navbar-collapse" id="navbarCollapse"> 
	<ul class="navbar-nav mr-auto"> 
		<li class="nav-item active"> <a class="nav-link" href="#">Main <span class="sr-only">(current)</span></a> </li> 
		<li class="nav-item">
            <a class="nav-link" href="#">Add texts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page/statistics" title="only for registred">Statistics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Grammer</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		<ul class="navbar-nav rm-auto">
        @if (Route::has('login'))
          @auth
              <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Cabinet</a></li>
          @else
             <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Login</a></li>
             <li class="nav-item" ><a class="nav-link" href="{{ route('register') }}">Register</a></li>
           @endauth
		@endif
		</ul>
      </div>
  </nav>
  <center><h3>{{ $pages[0]['name'] }}</h3>
  {{ $pages[0]['content'] }}
  </center>
