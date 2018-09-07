
	   <?php

if($user)die("unable to connect" . mysql_error());
if(isset($_POST['sub']))
{
	extract($_POST);
	$uname = $_POST['Name'];
	$pwd = $_POST['pwd'];
	$cnfpwd = $_POST['cnfpwd'];
	$email = $_POST['email'];
	
	
	
	
	mysql_select_db("user") or die("unable to select");
	
	foreach($_POST as $key=>$value)
	{
		if(empty($_POST[$key]))
		{
			echo ucwords($key) .  " Field is required";
		break;
		}
	}
	
	if($pwd != $cnfpwd)
	{	
		echo "passwords must be same";
		
	}
	  
	else
	{
			

	$result = mysql_query("INSERT INTO register ( name, pwd,cnfpwd,email) VALUES ('$name','$pwd','$cnfpwd','$email')") or die(mysql_error());   
		if(!empty($result)) {
	echo  "You have registered successfully!";	
	unset($_POST);
		}
	else 
	{
	echo  "Problem in registration. Try Again!";	
    }
	}
}

?>
<!DOCTYPE html>
<html>
<head>

<html >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>



    <title>User Registration Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <center><span class="sr-only">REPORT DESIGN</span></center>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
               
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                   <center> <legend>Sign Up</legend></center>

                    <center><div class="form-group">
                        
                        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <label for="name">User Id</label>
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div></center>
                    
                    <center> <div class="form-group">
                       
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                         <label for="name">Email Id</label>
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div></center>

                    <center><div class="form-group">
                       
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <label for="name">Password</label>
					   <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div></center>

                    <center><div class="form-group">
                       
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                         <label for="name">Confirm Password</label>
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div></center>

                    <center><div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                    </div></center>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
   <center> <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div></center>
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>	   
	   
</body>
</html>
















