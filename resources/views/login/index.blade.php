<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/customstyle.css') }}" >
</head>
<body style="background-color: #F0F0F0;">
	<form method="post" style="background: none">
		{{csrf_field()}}
		<div id="logindiv">
			<table align="center">
				<tr>
					<td colspan="2" align="right"><h3 style="text-shadow: 2px 2px 4px #000000;">Welcome To 
						                                                       <br>User Management System</h3></td>
				</tr>
				<tr>
					<th colspan="2" align="center"><font style="font-size: 12px">Login With Your Name and Password</font></th>
				</tr>
				<tr>
					<td colspan="2" align="center"><font color="red">{{session('msg')}}</font></td>
				</tr>
				<tr>
					<td>Student Name</td>
					<td><input id="admininput" type="text" name="studentname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input id="admininput" type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input id="admininput" type="submit" name="adminLogin" value="Login"></td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>