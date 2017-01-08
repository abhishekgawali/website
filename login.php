<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
a:link
{
	color:green;
}
.container
{
	border:2px solid #ededed;
}
.navbar-header{
	padding-right:10px;
}
.menu{
	padding:5px;
	width:100%;
	height:60px;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
.footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
</style>
</head>
<body bgcolor="#F5FFFA">
<div class="container-fluid">
			<div class="row1">
				<div class="header">
					<figure><img class="img-responsive" src="Logo.jpg" alt="logo"></figure>
				</div>
			</div>
			<div class="navbar navbar-inverse" role="navigation">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
				</button>
				<span class="visible-xs navbar-brand"><b>Menu</b></span>
			</div>
			<div class="navbar-collapse collapse sidebar-navbar-collapse">
				<ul class="nav navbar-nav">
								    <li class="active"><a href="#">Talent Home</a></li>
									<li><a href="employee1.php">Sign Up</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	<div  class="table" align="center" style="padding-top: 5%">
		<table align="center" style="border-collapse:separate; border-spacing:10px 40px;">
			<form action="home.php" method="POST">
			<thead>
				<tr>
					<th valign="middle">Username</th>
					<td><input type="email" placeholder="Enter your email-id" name="email" required></td>
				</tr>
				<tr>
					<th valign="middle">Password</th>
					<td><input type="password" placeholder="Enter your password" name="password" required></td>
				</tr>
				<tr>
					<td colspan=2 align="center"><input type="submit" value="Login"></td>
				</tr>
				<tr>
					<td colspan=2 align="center"><a href="">Forgot Password</a></td>
				</tr>
			</thead>
			</form>
		</table>
	</div>
</div>
</body>
</html>