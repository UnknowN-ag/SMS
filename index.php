<!DOCTYPE html>
<html>
<head>
	<title>SMS</title>
</head>
<body>
	<a href="login.php" align="right">ADMIN LOGIN</a>
	<h1 align="center">Welcome to SMS</h1>
	<form>
		<table align="center" border="2px;">
			<tr>
				<td colspan="2" align="center">Student Information</td>
				
			</tr>
			<tr>
				<td>Roll no.</td>
				<td><input type="number" name="rollno"></td>
			</tr>
			<tr>
				<td>Standard</td>
				<td><select name="std" required="">
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
				</select></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Show Details"></td>
			</tr>
		</table>
	</form>
</html>