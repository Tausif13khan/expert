<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8"?>
	<meta name="viewport" content="width=device-width">
	 <link rel="stylesheet" href="styles/index.css">




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


</head>
<?php
	include_once('header1.php')
	?>

</head>
<body>


   <table  font-color="red" border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1>.....Registration Form</h1></td>
</tr><center>
 <form action="RegisterSubmit.php">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'><b>Name:</b><strong>*</strong></td>
    <td><input type='text' name='name' placeholder="Username" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Gender:</b><strong>*</strong></td>
    <td><input type='radio' name='gender' value="male" checked required>Male
<input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other 
</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Password:</b><strong>*</strong></td>
    <td><input type='password' name='pwd' maxlength='8' placeholder='max 8 characters' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Select age group:</b></td>
    <td><select>
  <option value="<20"><20</option>
  <option value="20-50">21-50</option>
  <option value="50+">50+</option>
</select></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Address:</b></td>
    <td><input type='text' name='name' placeholder='Area'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Phone:</b><strong>*</strong></td>
    <td><input type='text' name='name' maxlength='10' placeholder='only 10 digits' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Email:</b></td>
    <td><input type='text' name='name' placeholder='xyz@email.com'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Zip:</b></td>
    <td><input type='text' name='zip' placeholder='5XXXX2'></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td><h2>
<class="current"><a href="RegisterSubmit.php"><input type="submit" name="submit" value="Submit"> 
</h2></td>



<td ><h2>
<input type="reset" value="Reset"></h2></td>

<td><h2>
<class="current"><a href="index.php"><button type="button">Back</button></h2></td>

</form>






</tr>
</table>

  </body>
</html>