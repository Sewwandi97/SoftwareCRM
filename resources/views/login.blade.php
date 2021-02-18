<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<style>

	body {
		background: linear-gradient(0deg, rgba(128, 128, 128, 0.4), rgba(128, 128, 128, 0.4)),url('{{asset("/img/background.jpg")}}');
		background-attachment: fixed;
		background-size: cover;
		font-family: 'Ubuntu', sans-serif;
	}
	
    
    .main {
		background-color: white;
		background: linear-gradient(0deg, rgba(192, 192, 192, 0.9), rgba(192, 192, 192, 0.9));
        width: 400px;
        height: 600px;
        margin: 3em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #233554;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 35px;
    }
    
    .un {
		width: 76%;
		color: rgb(38, 50, 56);
		font-weight: 700;
		font-size: 14px;
		letter-spacing: 1px;
		background: white;
		padding: 10px 20px;
		border: none;
		border-radius: 20px;
		outline: none;
		box-sizing: border-box;
		border: 2px solid rgba(0, 0, 0, 0.02);
		margin-bottom: 50px;
		margin-left: 46px;
		text-align: center;
		margin-bottom: 27px;
		font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
        width: 76%;
		color: rgb(38, 50, 56);
		font-weight: 700;
		font-size: 14px;
		letter-spacing: 1px;
		background: white;
		padding: 10px 20px;
		border: none;
		border-radius: 20px;
		outline: none;
		box-sizing: border-box;
		border: 2px solid rgba(0, 0, 0, 0.02);
		margin-bottom: 50px;
		margin-left: 46px;
		text-align: center;
		margin-bottom: 27px;
		font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
        cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #233554, #1a84b8);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 15px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #1a84b8;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #1a84b8;
        text-decoration: none
	}
	
	.images {
		display: block;
		padding-top: 55px;
		margin-left: auto;
		margin-right: auto;
	}   
	</style>
</head>

<body>
	
	
	<div class="main">
	<div>
		<img src="/img/logo.png" class="images">
	</div>
		<p class="sign" style="text-align:center">Login</p>

		@if ($message = Session::get('error'))
			<div class="alert alert-dangr alert-block">
				<button type="button" class="close" data-dismiss="alert">Close</button>
				<strong>{{$message}}</strong>
			</div>
		@endif

		@if (count($errors)>0)
			<div class="alert alert-danger" role="alert">
				<ul>
					@foreach($errors->all as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form class="form1" method="post" action="{{url('/main/checklogin')}}">
		@csrf
		<div class="form-group">
		<input type= "text" class="form-control" name="User_Name"  style="text-align:center" placeholder="Username">
		</div>
		<div class="form-group">
		<input type="password" class="form-control" name="Password"  style="text-align:center" placeholder="Password">
		</div>
		<div class="form-group">
		<a href="/main/checklogin" class="submit" style="text-align:center">Login</a>
		</div>
		<div class="form-group">
		<p class="forgot" style="text-align:center"><a href="#">Forgot Password?</p>
		</div>          
    </div>
     
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>