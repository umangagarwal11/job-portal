<html>
<head>
	<title > DASHBOARD </title>
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel = "stylesheet " type = "text/css" href ="./style.css">
	<link rel = "stylesheet " type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
@media(max-width:786px )
{
.asdfg{
	width:100% !important;
	height:auto !important;
	justify-content: center !important;
	margin-bottom: 5% !important;
	padding:5% !important;
}
}
</style>
<body style="background-color:#FFFFFF">
<div align="right" style="margin-top:5px; margin-right:5px;"><a href="./logout.php"> <button type="button" class="btn btn-dark">Logout</button><a> </div>
<div align="center">
<h1><i>DASHBOARD</i></h1>
<?php
include('db.php');
include ('authlogin.php');

echo '<h3><i>Welcome back '.$_SESSION['username']."<br>";
echo 'Your last login was on '.date("d, F, Y h:i:s A", strtotime($_SESSION['time']))." GMT</i></h3>";
?>
</div>
<br><br>
	<div class="row" style="height:100%;">
	<div class="col-md-2 asdfg" style="height:100%;background-color:#D0D3D4;">
	
		<ul class="nav flex-column">
			<li class="nav-item">
			<?php
			
				if(isset($_POST['cat'])){
				$cate=$_POST['cat'];
				$result=mysqli_query($con,"insert into `jobtypes` values('$cate')");
				}
			
			?>
        <a class="nav-link" href="#asd" style="color:black" role="button" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-controls="asd">
          Add a Category
        </a>
        <div class="collapse" id="asd">
          <form action="" method = "post">
			<div class="form-group">
				<input type = "text" name = "cat" class  = "form-control dropdown-item" required placeholder ="New Category"></div>
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary"  >  Submit</button>  </div>
		  </form>
        </div>
			</li>
			<li class="nav-item">
			
			<?php
			
				if(isset($_POST['salary'])){
				$cate=$_POST['type'];
				$expe=$_POST['exp'];
				$dom=$_POST['domain'];
				$des=$_POST['description'];
				$sal=$_POST['salary'];
				$result=mysqli_query($con,"insert into `jobs` (type,exp,domain,description,salary,vacancy) values('$cate','$expe','$dom','$des','$sal',1)");
				}
			
			?>
			
        <a class="nav-link" href="#as" style="color:black" role="button" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-controls="as">
          Add a Job
        </a>
        <div class="collapse" id="as">
          <form ction="" method = "post">
			<div class="form-group">
				<select class="form-control" required id="exampleFormControlSelect1" name="type">
					<option value="">Job Type</option>
					<?php
						$result = mysqli_query($con, "select * from jobtypes");
						while($row=mysqli_fetch_row($result))
							echo '<option value='.$row[0].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
			<div class="form-group">
				<select class="form-control" name="exp" required id="exampleFormControlSelect1">
					<option value="">Experience Required</option>
					<option value="0 years">0 years</option>
					<option value="0-3 years">0-3 years</option>
					<option value="3-5 years">3-5 years</option>
				</select>
			</div>
         
		<div class="form-group"><input type = "text" name = "domain" class  = "form-control dropdown-item" required placeholder ="Domain"></div>		 
		  
		  <div class="form-group"><input type = "text" name = "description" class  = "form-control dropdown-item" required placeholder ="Description"></div>
		  
		  <div class="form-group"><input type = "text" name = "salary" class  = "form-control dropdown-item" required placeholder ="Salary Range"></div>
		  <div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary"  >  Submit</button>  </div>
		  </form>
        </div>
      </li>
			<li class="nav-item">
				<a class="nav-link" style="color:black" href="./jobman.php">Manage Jobs</a>
			</li>
		</ul>
	</div>
	<div class="col">
	<?php
			$result = mysqli_query($con, "select * from applications");
			while($rows=mysqli_fetch_row($result)){
					$row1=mysqli_fetch_row(mysqli_query($con, "select * from jobs where id='$rows[1]'"));
					$row2=mysqli_fetch_row(mysqli_query($con, "select * from usertable where resume='$rows[0]'"));
					echo '<div class="card" style="width:100%; padding:1% 1% 1% 1% ;">
							<h3>Job Details:</h3><br>
							<h4>'.$row1[0].', '.$row1[2].'</h4><br>
							Salary: '.$row1[4].'<br>
							Experience required: '.$row1[1].'<br>';
							if($row1[5]==1)
							echo'Vacancy: Vacant<br>';
							else
							echo'Vacancy: Not Vacant<br>';
							echo'Job Id:'.$row1[6].'<br><br>
							<h3>Applicant Details:</h3><br>
							Name: '.$row2[0].'<br>
							Contact Number: '.$row2[3].'<br>
							<a href="./upload/'.$row2[4].'.pdf" class="col-md-2" download="'.$row2[0].'_resume">Download Resume</a><br>
							<div class="modal-footer">
							<form method="post">
								<button name="test" class="btn btn-success" value="'.$row1[6].' '.$row2[4].'">Select</button>
								<button name="test1" class="btn btn-danger" value="'.$row1[6].' '.$row2[4].'">Reject</button>
							</form>
							</div>
							</div><br>';
							}
			function selection($user)
			{
				include('db.php');
				require( './PHPMailer.php');
				require('./SMTP.php');
				$job=strtolower(explode(" ",$user)[0]);
				$username=strtolower(explode(" ",$user)[1]);
				$result=mysqli_query($con,"DELETE FROM applications WHERE job='$job'");
				$result=mysqli_query($con,"UPDATE jobs set vacancy=0 WHERE id='$job'");
				$result=mysqli_query($con,"select * from usertable where resume='$username'");
				$to=mysqli_fetch_row($result)[1];
				$email = 'your email id';
				$password = 'your password';
				$message = "Congratulations!! You have been selected for the job.";
				$subject = "Job Opportunity";

				// Configuring SMTP server settings
				$mail = new PHPMailer\PHPMailer\PHPMailer();
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = $email;
				$mail->Password = $password;
				$mail->SetFrom("Your email id","Your name");
    
				// Email Sending Details
				$mail->addAddress($to);
				$mail->Subject = $subject;
				$mail->msgHTML($message);
				if(!$mail->Send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message has been sent";
				}
				//mail( $to,"Job Opportunity", "Congratulations!! You have been selected for the job.");
			}
			function rejection($user)
			{
				include('db.php');
				require( './PHPMailer.php');
				require('./SMTP.php');
				$job=strtolower(explode(" ",$user)[0]);
				$username=strtolower(explode(" ",$user)[1]);
				$result=mysqli_query($con,"DELETE FROM applications WHERE username='$username' AND job='$job'");
				$result=mysqli_query($con,"select * from usertable where resume='$username'");
				$to=mysqli_fetch_row($result)[1];
				$email = 'Your email id';
				$password = 'your password';
				$message = "Sorry!! You have not been selected for the job.";
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
				$mail->SetFrom("your email id","Name");

				// Email Sending Details
				$mail->addAddress($to);
				$mail->Subject = $subject;
				$mail->msgHTML($message);
				
				if(!$mail->Send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message has been sent";
				}
				//mail( $to,"Job Application", "Sorry!! You have not been selected for the job.");
			}
			if (isset($_POST['test'])) {
				selection($_POST['test']);}
			else if (isset($_POST['test1'])) {
				rejection($_POST['test1']);}
	?>
	</div></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>