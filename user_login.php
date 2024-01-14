<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=1024,initial-scale=1.0,maximum-scale=1,shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeBinary Initiatives Opportunities</title>
    <link rel="icon" href="./images/logoicon.ico">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main" style="padding-bottom:7.5%; padding-top:7.5%;">

	

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <?php
include ('db.php');
session_start();	
if(isset($_POST['user'])){
$name = $_POST['user'];
if (strpos($name,'@')!=false){
	$name=mysqli_fetch_row(mysqli_query($con, "select href from userdata where mail = '$name'"))[0];
	if ($name==null)
		$name="1";
}
$password = md5($_POST['password']);
$s = "select * from usertable where href = '$name' && password = '$password'";
$result = mysqli_query($con, $s);
$num  =  mysqli_num_rows($result);
$row=mysqli_fetch_row($result);
if($num==1)
{
    if($row[5]==0){
$flag=0;
$_SESSION['fu']=0;
$_SESSION['email']=$name;
$_SESSION['time']=mysqli_fetch_array(mysqli_query($con,"select lastlogin from usertable where href = '$name'"))['lastlogin'];
$tim=date('Y-m-d H:i:s');
$result=mysqli_query($con,"update usertable set lastlogin='$tim', online=1 where href = '$name'");
header('location:user_home.php'); 
}
    else{
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <center>User restricted! Contact the administrator for further details.</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
$flag=1;
    }
}
else
{
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <center>Wrong username or password.</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
$flag=1;
}

}
?>
                <div class="signin-content" style="padding-bottom:5%;">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.png" alt="sign-in image"></figure>
                        </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user" id="your_name" placeholder="HRef Code or E-mail address" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"required/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
                    <center style="padding-bottom:2%;">
                        <p class="text-center mb-md">Not a User? &nbsp <a href="./index.php" >Login as Admin</a></p>
                    <p class="text-center text-muted mb-md"><a href="http://codebinary.in/" target="_blank">CodeBinary Initiatives</a><br> Registered Under Ministry of Micro, Small &amp; Medium Enterprises, GoI.</p>
                    </center>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>