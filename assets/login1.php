<?php
require "connect.php";
echo <<<_END
<html><head><title>Login page</title>
<link rel ="stylesheet" href="style.css" />
</head><body>
<form action="register.php" method="post" enctype = "multipart/from-data">
<div class ="container"">
<label><b>Username:</b></label><input type="text" placeholder ="Enter Name" name="uname"/>
<br>
<label><b>Password:</b></label><input type="password" placeholder= "Enter password" name="pwd"/>
<br>
<button type="submit"><a href= "index.php">Login</a></button>
<input type="submit" name="sub1" value="Sign up">
</div>
</form></body></html>
_END;
?>