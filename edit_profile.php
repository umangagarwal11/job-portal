
<?php
include('db.php');
session_start();
$email = $_SESSION['email'];
$result = mysqli_query($con,"select * from usertable where email='$email'");
$rows=mysqli_fetch_row($result);
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
				<select class="form-control" name="type" disabled id="exampleFormControlSelect1">
					<option value="">Search Jobs by Type</option>
					<?php
						$result = mysqli_query($con, "select * from jobtypes");
						while($row=mysqli_fetch_row($result))
							echo '<option value="'.$row[0].'">'.$row[0].'</option>';
					?>
				</select></div>
		<div class="form-group mr-2" >
				<select class="form-control" name="domain" disabled id="exampleFormControlSelect2">
					<option value="">Search Jobs by Domain</option>
					<?php
						$result = mysqli_query($con, "select distinct domain from jobs");
						while($row=mysqli_fetch_row($result))
							echo '<option value="'.$row[0].'">'.$row[0].'</option>';
					?>
				</select>
		</div>
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" disabled>Go</button>
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
        echo'<a class="nav-link" style="color:white;" href="#exampleModalCenter1" data-toggle="modal" data-target="#exampleModalCenter1">Register</a>';}
	  else
	  {echo'<a class="nav-link" style="color:white;" href="./user_home.php">Home</a>';}
		?>
	</li>
	  
    </ul>
    
  </div>
  
</nav>
<br>
<div align="center">
<h3><i>Edit Your Profile</i></h3>
<h5 align="center">Note: 1.Do not type anything in the fields you do not want to change.<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2.You can not edit your email id.&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5>
</div>
<?php
if (isset($_POST)) {
			if(!empty($_FILES['fil'])){
			$file_name  = $_FILES['fil']['name'];
			$file_type = $_FILES['fil']['type'];
			$file_size = $_FILES['fil']['size'];
			$file_tem_Loc = $_FILES['fil']['tmp_name'];
			$file_store = "upload/".$file_name;
			$fileextension = (explode('.',$file_name));
			$fileextension = strtolower(end($fileextension));
			$uploadPath = "./upload/";
			$extensions = array("pdf");
			
			    if (! in_array($fileextension,$extensions)) {
            $err =1;
        }

        else if ($file_size > 20000000000000) {
            $err=2;
        }

        else {
			if(file_exists("./upload/".$rows[4].".pdf"))
			$ab=unlink("./upload/".$rows[4].".pdf");
		  $didUpload=move_uploaded_file($_FILES["fil"]["tmp_name"], $uploadPath.strtolower(join(explode(".",$email,-1),'.')).'.'.$fileextension);
          if ($didUpload) {
				
              $err=0;
			  
                //echo "DONE";

            } else {
                $err=5;
            }
        }
		
        }
			$c=0;
			$condi="update usertable set ";
			if(!empty($_POST['fullname'])){
			$name = $_POST['fullname'];
			if($c==1)
			$condi.=",fullname='$name'";
			else
			$condi.="fullname='$name'";
			$c=1;
			}
			if(!empty($_POST['password'])){
			$pass = md5($_POST['password']);
			if($c==1)
			$condi.=",password='$pass'";
			else
			$condi.="password='$pass'";
			$c=1;
			}
			
			if(!empty($_POST['phno'])){
			$phno = $_POST['phno'];
			if($c==1)
			$condi.=",no='$phno'";
			else
			$condi.="no='$phno'";
			$c=1;
			}
			$condi.=" where email='$rows[1]'";
			
		$up=mysqli_query($con,$condi);
		if($up)
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Updation Successful!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else {
      //echo "NOT THERE";
    }
    if(isset($_GET))
    {
      extract($_GET);
    }
	  if(!empty($err))
	  {
		if( $err == 1){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Updationtion Failed.Only .pdf is supported!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		else if( $err == 2){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Updation Failed. File size exceeded!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		
		else if( $err > 2){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%;">
  <strong>Updation Failed.File not uploaded.</strong>
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
	  <br>
<div class="card" align="center" style="width:50%;margin-left:25%; padding:2% 2% 0% 2%;">
<form action="" method = "post" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10" align="left">
				<?php echo $rows[1];?>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Full name</label>
			<div class="col-sm-10">
		<input type = "text" name = "fullname" class  = "form-control"  placeholder ="FULL NAME" >
		</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
		<input type = "password" name = "password" class  = "form-control"  placeholder ="PASSWORD" >

		</div></div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Contact Number</label>
			<div class="col-sm-10">

		<input type = "number" name = "phno" class  = "form-control"  placeholder ="CONTACT NUMBER" >

		</div></div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Resume</label>
			<div class="col-sm-10">

		<input type = "file" name = "fil" class  = "form-control"  placeholder ="RESUME" >

		</div></div>
		<div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-secondary" href="./user_home.php">Cancel</a>
        </div>
	  </form></div>
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>