<?php
session_start();
if(isset($_SESSION['user']))
{ 

     	    if((time()-$_SESSION['last_time'])>60)
			{
				header("location:logout.php");
			}
			
			
	 
	 else
	 {
			$_SESSION['last_time']=time();
			echo "<h4 style='color:blue'>-->You will be redirected to main page in 10 sec --></h4>";
		    echo "<font face='verdana' size='4'><center>hello! you are logged in as ". $_SESSION['uname']."<br>";
			echo "<center><a href='logout.php'> logout</a></center>";
			
   
}
}
else
{
header('location:index.php');
}
echo "<script type='text/javascript'>
        
            function Redirect() {
               window.location='http://localhost/abir/index.php';
            }
            
            setTimeout('Redirect()', 10000);
         //-->
      </script>";
	  
	  
	 echo "</html>"	;

?>

