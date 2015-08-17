<?php
session_start();
include_once '../admin/include/Connection.class.php';
include_once '../admin/include/User.class.php';

//print_r($_SESSION);
$user = new User();

if(isset($_POST['btn-login']))
{
	
	$umail = $_POST['txt_uname_email'];
	if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
		$error[] = 'Please enter a valid email address !';
	}else if ($user->checkEmailExist($umail)){
		$error[] = 'Email Address does not Exist! Please Try Again!';
	}else 
	{
		$user->forgotPassword($umail);
		//$user->redirect('forgotPassword.php?emailed');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password - Burpbig</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css"  />
</head>
<body>
<div class="container">
    	<div class="form-container">
        <form method="post" action="?emailed">
            <h2>Forgot Password</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}else if(isset($_GET['emailed']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; A temporary password has been sent to your mail. Please Check your mail.
                 </div>
                 <?php
			}
			?>
            <div class="form-group">
            	<input type="text" class="form-control" name="txt_uname_email" value="<?php if(isset($error)){echo $umail;}?>" placeholder="Enter Email ID" required />
           
            <div class="clearfix"></div><hr />

            	<button type="submit" name="btn-login" class="btn btn-block btn-primary">
                	<i class="glyphicon glyphicon-log-in"></i>&nbsp;Verify
                </button>
                
                

            </div>
           
        </form>
                 <br />
            <label>Login ! <a href="sign-in.php">Click Here</a></label>
       </div>

</div>

</body>
</html>