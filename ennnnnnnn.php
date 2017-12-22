
<body class='b' bgcolor="#74AFAD">
<center>

<fieldset class='pk'>
<h2 class='h1' style='background-color:#fff5ee'>Online Encrypter of hashed algorithms</h2> 
<form action='' method='post'><br>
<input type="text" class='in' placeholder='  &#128270;      Enter the input' autocomplete='off' name='t1'>&nbsp;&nbsp;&nbsp;
<div class="dropdown">
  

  
  
  
  <select name="options">
  <option class='op' value="MD5">MD5</option>
  <option class='op' value="SHA1">SHA1</option>
  <option class='op' value="SHA2">SHA2</option>
  <option class='op' value="SHA512">SHA 512</option>
  <option class='op' value="Ripemd160">Ripemd160</option>
  <select>
  
  
  
  
  
  
  

  </div>
</div>
<br><br>
&nbsp;&nbsp;<button class="b1" type='submit' name='su'>Encrypt</button>

</form>


</fieldset>

<style>
.dropbtn {
  
   
    cursor: pointer;
	 height:40px;
	 width:150px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #91a5ae;}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #91a5ae;
}
.in{ 
	
	 border-radius: 25px;
	 height:38px;
	 width:300px;
	 box-shadow: 10px 10px 5px #888888;
}

.b{
	
margin:0;padding:0;
}

.h1{
	color:black;
	box-shadow: 10px 10px 5px #888888;
}
.pk{
	
	margin-left:80px;
	margin-right:80px;
	margin-top:20px;
	width:600;
	height:200;
	background-color:#ffe1a9;
}
.mk{
	
	margin-left:80px;
	margin-right:80px;
	margin-top:20px;
	width:600;
	height:200;
    background-color:#585858;	
	
}
.b1{
	
	 height:40px;
	 width:80px;
}
.b1:hover{
	background-color:#D0FA58;
	
	
}
.tan{
	
	background-color:#585858;
}
.p1{
font-family: 'Open Sans', sans-serif;	
	
}

.op{
	
	 height:40px;
	 width:80px;
}

</style>
</center>
<?php
if(isset($_POST['su']))
{
	
	$pass=$_POST['t1'];
	//$hashed=$_POST['t2'];
	
	$pa=md5($pass);
	$pa1=sha1($pass);
	$hash = hash('sha256', $pass);
	$hash1=hash('sha512',$pass);
	$hash2=hash('ripemd160',$pass);
	echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>The Input String is</p></th> <td><p style='color:white'>".$pass. "</p></td></tr><br>";
	
	if($_POST['options']=="MD5")
	{	echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>MD5 encrypted password is</p></th> <td><p style='color:white'>".$pa. "</p></td></tr><br>";
	}
		 if ($_POST['options']=="SHA1"){
			 
			 echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>SHA1 encrypted password is</p></th> <td><p style='color:white'>".$pa1. "</p></td></tr><br>";
	
		
	}
	 if ($_POST['options']=="SHA2"){
		echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>SHA2 encrypted password is</p></th> <td><p style='color:white'>".$hash. "</p></td></tr><br>";
	}
	 if ($_POST['options']=="SHA521"){
		echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>HASH512 encrypted password is</p></th> <td><p style='color:white'>".$hash1. "</p></td></tr><br>";
}
	 if ($_POST['options']=="Ripemd160"){
		echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>Ripemd160 encrypted password is</p></th> <td><p style='color:white'>".$hash2. "</p></td></tr><br>";
}
	echo "</table>";
	echo "</center>";
}



?>