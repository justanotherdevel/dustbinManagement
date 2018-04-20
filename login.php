<html>
<?php
	function Login()
	{
	    if(empty($_POST['username']))
	    {
	        $this->HandleError("UserName is empty!");
	        return false;
	    }
	    if(empty($_POST['password']))
	    {
	        $this->HandleError("Password is empty!");
	        return false;
	    }
	    $username = trim($_POST['username']);
	    $password = trim($_POST['password']);
	    if(!$this->CheckLoginInDB($username,$password))
	    {
	        return false;
	    }
	    else  {
		    header("location: dashboard.html");
	    }
	}

	function CheckLoginInDB($username,$password)
	{
		return(strcmp($username,'admin')==0 && strcmp($password, 'admin')==0)
	}
?>
</html>
