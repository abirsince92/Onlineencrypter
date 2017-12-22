
<body class='b' bgcolor="#7D9CF7">

<center>

<fieldset class='pk'>
<h2 class='h1' style='background-color:#fff5ee'>Online Encrypter of hashed algorithms</h2> 
<form  name='myform' action='' method='post' action="<?php echo $PHP_SELF; ?>"><br>
<textarea placeholder="type text for encryption your message" rows="10" cols="70" name='t1'></textarea>
<select class='se' name='se'>
  <option class='op' value="MD5">MD5</option>
  <option class='op' value="SHA1">SHA1</option>
  <option class='op' value="SHA2">SHA2</option>
  <option class='op' value="SHA512">SHA 512</option>
  <option class='op' value="Ripemd160">Ripemd160</option>
</select>


<br><br>

<button class="b1" type='submit' name='su'>Encrypt</button>&nbsp;&nbsp;
<button class="b2" type='submit' onclick="resetform()" name='su1'>Reset</button><br><br>
<style>

.b1,.b2{
	width:80px;
	height:30px;
	
	
}
b1:hover{
	background-color:#ffe1a9;
}
.se{
 height:40px;
	 width:80px;	
	
	
}
se:hover{
	 background-color:powderblue;
}
	.op{
		height:40px;
	 width:80px;	
	}
	
	

.in{ 
	
	 border-radius: 25px;
	 height:78px;
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
	height:320;
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


.tan{
	
	background-color:#585858;
}
.p1{
font-family: 'Open Sans', sans-serif;	
	
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
	
	
	echo "<br>";
	echo "<center><table border='2'  WIDTH='75%' class='tan'><tr><th><p class='p1' style='color:white'>Original message is</p></th> <td><p style='color:white'>".$pass. "</p></td></tr>";
	
	if($_POST['se']=="MD5")
	{	echo "<center><table border='2'  WIDTH='75%' class='tan'><tr><th><p class='p1' style='color:white'>MD5 encrypted password is</p></th> <td><p style='color:white'>".$pa. "</p></td></tr><br>";
	}
		 if ($_POST['se']=="SHA1"){
			 
			 echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>SHA1 encrypted password is</p></th> <td><p style='color:white'>".$pa1. "</p></td></tr><br>";
	
		
	}
	 if ($_POST['se']=="SHA2"){
		echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>SHA2 encrypted password is</p></th> <td><p style='color:white'>".$hash. "</p></td></tr><br>";
	}
	 if ($_POST['se']=="SHA521"){
		echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>HASH512 encrypted password is</p></th> <td><p style='color:white'>".$hash1. "</p></td></tr><br>";
}
	 if ($_POST['se']=="Ripemd160"){
		echo "<center><table border='2'  WIDTH='95%' class='tan'><tr><th><p class='p1' style='color:white'>Ripemd160 encrypted password is</p></th> <td><p style='color:white'>".$hash2. "</p></td></tr><br>";
}
	echo "</table>";
	echo "</center>";
}



?>
<script>
function resetform() {
document.getElementByName("myform").reset();
}
</script>