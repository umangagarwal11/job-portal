<html>

<head>
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    
	<title > Admin login and registeration </title>
	<link rel = "stylesheet " type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "./style.css" >
</head>
<body>
<div class = "login-box ml-auto mr-auto" align="center">
<div class = "col-md-6 card" style="margin-left:0 !important;">
<h2 align = "center" style = "text-decoration: underline;"><br> SIGNUP </h2><br>
<br>
<?php
include ('db.php');
session_start();	
if(isset($_POST['user'])){
$name = $_POST['user'];
$password = md5($_POST['password']);
$s = "select * from admintable where username = '$name' ";
$result = mysqli_query($con, $s);
$num  =  mysqli_num_rows($result);
if($num==0)
{
$flag=0;
$_SESSION['username']=$name;
$_SESSION['f']=1;
$_SESSION['time']=mysqli_fetch_array(mysqli_query($con,"select lastlogin from admintable where username = '$name'"))['lastlogin'];
$tim=date('Y-m-d H:i:s');
$result=mysqli_query($con,"insert into admintable values( '$name','$password',now())");
header ('location:dash.php');
}
else
{
echo 'wrong username or password';
$flag=1;
}

}
?>

<form action="" method = "post">
<div class = "form-group">

<input type = "text" name = "user" class  = "form-control" required placeholder ="USERNAME">
</div>
<div class = "form-group">

<input type = "password" name = "password" class  = "form-control" required placeholder ="PASSWORD" >

</div>

&nbsp &nbsp <div class="ml-auto mr-auto"><button type = "submit" class = "btn btn-primary"  >  LOGIN</button>  </div>
<center><a href="./login_page.php">Login to an existing account</a></center>
</form>

</div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>