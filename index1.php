<!DOCTYPE html>
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"> </script>
<script src="script/my_script.js" type="text/javascript"> </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogIn</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<script>

function myFunction(x) 
{
    x.style.background = "#F8F8FF";
}

/*
function tryLogin() {

var email = document.getElementById("semail").value;
var pass = document.getElementById("mpass").value;

var xmlhttp = null;
if (window.XMLHttpRequest)
xmlhttp = new XMLHttpRequest(); 
else 
xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');

xmlhttp.onreadystatechange=function(){

if(xmlhttp.readyState== 4){
if(xmlhttp.status==200)
{
var res= xmlhttp.responseText;

if(res != "True") {


document.getElementById('flag').innerHTML=xmlhttp.responseText;

setTimeout(function(){document.getElementById('flag').innerHTML=" ";},2000);}
else
{
	window.location.href= "index.php;   
}

}
}
}

xmlhttp.open('get','./views/home.php,true);
xmlhttp.send();
}
*/


jQuery(function($) 
{
	$("#test").submit( function () 
	{
		$.ajax( 
		{
			url:"testing.php",
			tpye:"post",
			data:{  email: $("#email").val(), password: $("#pass").val() },
			success:function(data)
			{ 
			if(data == "Successfully Logged In") 
			{
				window.location.href="home.php";		 
			} 
			else
				$("#error").html(data); 
//				setTimeout(function(){document.getElementById('flag').innerHTML=" ";},2000);}
			}
			});
				
		return false;
		});
		
		})(jQuery);

</script>
</head>
<body>
<center>
<div id="login-form">
<h2> Member Log In Form </h2> <br/>
<form id="test" name="test">

<table align="center" width="30%" border="0">

<tr>
<td><input type="text" onFocus="myFunction(this)" name="email" id="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="password" onFocus="myFunction(this)" name="pass" id="pass" placeholder="Your Password" required /></td>
</tr>

<tr>
<td>  <div id="error"></div>  </td>
</tr>

<tr>
<td><button type="submit" name="login" id="login">Sign In</button></td>
</tr>

<tr>
<td><a href="register.php">Don't have an account? Sign Up Here</a></td>
</tr>

</table>
</form>

</body>
</html>
