<?php
session_start();
include ('db.php');
?>
<html>

<head>
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    
	<title >Company name</title>
	<link rel = "stylesheet " type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "./style.css" >
</head>
<body style="background-color:#ffffff !important;">
<br>
<div align="center">
<h1><i>Company name</i></h1>
</div>
<br>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarToggler">
    <form class="form-inline my-2 my-lg-0"style="margin-left:25%;" method="post" action="">
		<div class="form-group mr-2">
				<select class="form-control" name="type" id="exampleFormControlSelect1">
					<option value="">Search Jobs by Type</option>
					<?php
						$result = mysqli_query($con, "select * from jobtypes");
						while($row=mysqli_fetch_row($result))
							echo '<option value="'.$row[0].'">'.$row[0].'</option>';
					?>
				</select></div>
		<div class="form-group mr-2" >
				<select class="form-control" name="domain" id="exampleFormControlSelect2">
					<option value="">Search Jobs by Domain</option>
					<?php
						$result = mysqli_query($con, "select distinct domain from jobs");
						while($row=mysqli_fetch_row($result))
							echo '<option value="'.$row[0].'">'.$row[0].'</option>';
					?>
				</select>
		</div>
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Go</button>
    </form>
	<ul class="navbar-nav mt-2 mt-lg-0" style="margin-left:5%;">
      <li class="nav-item">
	  <?php
	  if(empty($_SESSION['email'])){
        echo'<a class="nav-link" style="color:white;" href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter">Login</a>';}
	else
	{echo'<a class="nav-link" style="color:white;" href="./user_logout.php">Logout</a>';}
      ?>
	  </li>
      <li class="nav-item">
         <?php
	  if(empty($_SESSION['email'])){
        echo'<a class="nav-link" style="color:white;" href="#exampleModalCentera" data-toggle="modal" data-target="#exampleModalCentera">Register</a>';}
	  else
	  {echo'<a class="nav-link" style="color:white;" href="./edit_profile.php">Edit Profile</a>';}
		?>
	</li>
	  
    </ul>
    
  </div>
  
</nav>
<br>
<?php
		
		if(isset($_POST['email1'])){
		$name = $_POST['email1'];
		$password = md5($_POST['password1']);
		$s = "select * from usertable where email = '$name' and password = '$password'";
		$result = mysqli_query($con, $s);
		$num  =  mysqli_num_rows($result);
		if($num==1)
		{
		$flag=0;
		$_SESSION['email']=$name;
		header('location: user_home.php');
		}
		else
		{
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Wrong Email or Password</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		$flag=1;
		}
		}	
		if(empty($_SESSION['email'])){
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Login or Register for free to be able to apply to these Jobs</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';	
}else{
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Logged in</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
		?>
<!-- login Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		<form action="" method = "post">
		<div class = "form-group">

		<input type = "email" name = "email1" class  = "form-control" required placeholder ="EMAIL">
		</div>
		<div class = "form-group">

		<input type = "password" name = "password1" class  = "form-control" required placeholder ="PASSWORD" >

		</div>
		<div class="modal-footer">
        <button type="submit" class="btn btn-primary">Login</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
	  </form>
      </div>
    </div>
  </div>
</div>

<?php
if (isset($_POST['email'])) {
			
			$file_name  = $_FILES['file']['name'];
			$file_type = $_FILES['file']['type'];
			$file_size = $_FILES['file']['size'];
			$file_tem_Loc = $_FILES['file']['tmp_name'];
			$file_store = "upload/".$file_name;
			$fileextension = (explode('.',$file_name));
			$fileextension = strtolower(end($fileextension));
			$uploadPath = "./upload/";
			$extensions = array("pdf");
			$name = $_POST['fullname'];
			$email = $_POST['email'];
			$result=mysqli_query($con,"select * from usertable where email='$email'");
			if(mysqli_num_rows($result)!=0)
				$err=3;
			else{
			$pass = md5($_POST['password']);
			$phno = $_POST['phno'];
			    if (! in_array($fileextension,$extensions)) {
            $err =1;
        }

        else if ($file_size > 20000000000000) {
            $err=2;
        }

        else {
          
          $didUpload=move_uploaded_file($_FILES["file"]["tmp_name"], $uploadPath.strtolower(join(explode(".",$email,-1),'.')).'.'.$fileextension);
          if ($didUpload) {
				
              $err=0;
			  $res=strtolower(join(explode(".",$email,-1),'.'));
              $query="INSERT INTO usertable values('$name','$email','$pass','$phno','$res')";
              if(!mysqli_query($con,$query))
              {
				
                $err=4;
              }
              else {
				
                $err=0;
              }
                //echo "DONE";

            } else {
                $err=5;
            }
        }
		}
        
    }
    else {
      //echo "NOT THERE";
    }
    if(isset($_GET))
    {
      extract($_GET);
    }
	  if(isset($err))
	  {
		if( $err == 1){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Registration Failed.Only .pdf is supported!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		else if( $err == 2){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Registration Failed. File size exceeded!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		else if( $err == 3){
		echo'<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Registration Failed.Account with this email already exists.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'; 
		}
		else if( $err > 3){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Registration Failed.File not uploaded.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		else {
		$_SESSION['email']=$email;
		header("location:user_home.php");
		}
		
		}
	  ?>

<!-- Registration Modal -->
<div class="modal fade" id="exampleModalCentera" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitlea" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		<form action="" method = "post" enctype="multipart/form-data">
		<div class = "form-group">

		<input type = "email" name = "email" class  = "form-control" required placeholder ="EMAIL">
		</div>
		<div class = "form-group">

		<input type = "text" name = "fullname" class  = "form-control" required placeholder ="FULL NAME" >

		</div>
		<div class = "form-group">

		<input type = "password" name = "password" class  = "form-control" required placeholder ="PASSWORD" >

		</div>
		<div class = "form-group">

		<input type = "number" name = "phno" class  = "form-control" required placeholder ="CONTACT NUMBER" >

		</div>
		<div class = "form-group">

		<input type = "file" name = "file" class  = "form-control" required placeholder ="RESUME" >

		</div>
		<div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
	  </form>
      </div>
    </div>
  </div>
</div>

<?php
	if(isset($_SESSION['email']))
	$username=strtolower(join(explode(".",$_SESSION['email'],-1),'.'));
    $cond_sql  = "SELECT * FROM jobs WHERE vacancy=1  ";
	if(!empty($_POST['type'])){
		$cond_sql .= " AND jobs.type='".$_POST['type']."'";
	}
	if(!empty($_POST['domain'])){
		$cond_sql .= " AND jobs.domain='".$_POST['domain']."'";
	}
    $result=mysqli_query($con,$cond_sql);
	if(mysqli_num_rows($result)<1)
		echo "<h4 align="."center".">No Results Found</h4>";
	while($row=mysqli_fetch_row($result)){
					echo '<div class="card" style="width:100%; padding:1% 1% 1% 1% ;">
							<h4>'.$row['0'].', '.$row[2].'</h4><br>
							<p>'.$row[3].'</p><br>
							Salary: '.$row[4].'<br>
							Experience required: '.$row[1].'<br>';
							if(!empty($_SESSION['email'])){
								echo '<div class="modal-footer">
										<a class="btn btn-success" style="color:white;" href="#exampleModalCenter'.$row[6].'" data-toggle="modal" data-target="#exampleModalCenter'.$row[6].'">Apply</a>
										<div class="modal fade" id="exampleModalCenter'.$row[6].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[6].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure you want to apply?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" class="btn btn-success" value='.$row[6].'>Apply</button>
	  </form>
      </div></div>
    </div>
  </div>
</div>';}echo '</div><br>';}
							

							
							
	function apply($username,$job)
	{
		include('db.php');
		$result=mysqli_query($con,"SELECT * FROM applications WHERE username='$username' AND job='$job'");
		if(mysqli_num_rows($result)>0)
		{
			echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>You have Already Applied to this job!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	return;}
		$result=mysqli_query($con,"INSERT INTO applications VALUES('$username','$job')");
		echo  '<div class="alert alert-success alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Application Successful</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

	require( './PHPMailer.php');
				require('./SMTP.php');
				$result=mysqli_query($con,"select * from usertable where resume='$username'");
				$to=mysqli_fetch_row($result)[1];
				$email = 'jobseekingportal@gmail.com';
				$password = 'jobseeker123';
				$message = "You have applied for a job.";
				$subject = "Job Application";

				// Configuring SMTP server settings
				$mail = new PHPMailer\PHPMailer\PHPMailer();
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = $email;
				$mail->Password = $password;
				$mail->SetFrom("jobseekingportal@gmail.com.com","Name");

				// Email Sending Details
				$mail->addAddress($to);
				$mail->Subject = $subject;
				$mail->msgHTML($message);
				
				if(!$mail->Send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message has been sent";
				}
	}
	if (isset($_POST['test'])) {
    apply($username,$_POST['test']);
  }
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>