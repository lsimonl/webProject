<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>user registeration and login</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		body{background-image: url(https://www.hnair.com/guanyuhaihang/shzr/images/P020190528503935198015.jpg);
		background-size: cover;
		background-position: center;background-repeat: no-repeat;
		}
		
		.login-box{max-width: 700px;float: none;margin: 150px auto}
		
		.login-left{background: rgb(211,211,211);padding: 30px;opacity: 0.7;}
		
		.login-right{background: #FFFFFF;padding: 30px;opacity: 0.8;}
		
		.form-control{background-color: transparent;!important}
	</style>
		
	</head>
	
	
	
	
	
	<body>
		<div class="container">
			<div class="login-box">
			<div class='row'>
				<div class="col-md-6 login-left">
				<h2>请您在此处登录</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>用户名称</label>
						<input type="text" name="user" class="form-controk" />
					</div>
					<form action="validation.php" method="post">
					<div class="form-group">
						<label>密码</label>
						<input type="password" name="password" class="form-controk" />
						<button type="submit" class="btn btn-primary">登录</button>
					</div></div>
					
					
					<div class="col-md-6 login-right" >
				<h2>请您在此处注册</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>用户名称</label>
						<input type="text" name="user" class="form-controk" required="required"/>
					</div>
					<form action="validation.php" method="post">
					<div class="form-group">
						<label>密码</label>
						<input type="password" name="password" class="form-controk" required="required"/>
						<button type="submit" class="btn btn-primary">注册</button>
					</div></div>
				</form>
				</div>
			</div>
			</div>
			
			
			
			
			
		</div>
		
		
	</body>
</html>