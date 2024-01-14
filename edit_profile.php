
<?php
include('db.php');
include ('uauthlogin.php');

session_start();
$email = $_SESSION['email'];
$result = mysqli_query($con,"select * from usertable where href='$email'");
$rows=mysqli_fetch_row($result);

$result = mysqli_query($con,"select * from userdata where href='$email'");
$rows1=mysqli_fetch_row($result);
?>
<html>

<head>
	
	<meta name="viewport" content="width=2048,initial-scale=1.0,maximum-scale=1,shrink-to-fit=no">
    
	<title >CodeBinary Initiatives Opportunities</title>
	<link rel = "stylesheet " type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "./style.css" >
	<link rel="icon" href="./images/logoicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
	<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ab0505;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #29b329;
}

input:focus + .slider {
  box-shadow: 0 0 1px #29b329;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.ice {
  border: solid #38b0de;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.ace {
    width: 40px;
    height: 40px;
    background-color: #fff;
    text-align: center;
    vertical-align:center !important;
    font-size: 24px;
    margin: 0 10px;
    display: block;
    border-radius: 50%;
    position: relative;
    overflow: hidden;
    border: 3px solid #000;
    z-index: 1;
}
.ace .icon {
    margin-top:10%;
    position: relative;
    color: #262626;
    transition: .5s;
    z-index: 3;
}

.ace:hover .icon {
    color: #fff;
}

.ace:before {
    content: "";
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: #f00; */
    transition: .5s;
    z-index: 2;
}

.ace:hover:before {
    top: 0;
}

.ace:before {
    background: #0072b1;
}



ul li:nth-child(1) .ace:before {
    background: #0072b1;
}


ul li:nth-child(2) .ace:before {
    background: #000;
}

ul li:nth-child(3) .ace:before {
    background: #d6249f;
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
}

ul li:nth-child(4) .ace:before {
    background: #ea4c89;
}

ul li:nth-child(5) .ace:before {
    background: #d44638;
}



.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: left;
}
.profile-img img{
    width: 70%;
    height: 100%;
    margin-left:7%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}


</style>
<body style="background-color:#FFFFFF; height:768px !important;" >
<div align="center" class="row" style="width:100%;height:10%;">
<div class="col-3" align="left" style="margin-top:-7%; padding-left:2% ">
    <img src="./images/logo.png" style="heigth:90%; width:90%;">
</div> 
<?php
 if($_SESSION['fu']==110){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      Password successfully changed.
      
      <button type="button" class="ml-2 mb-1 close" onclick="myfunc()" aria-label="Close" style="opacity:1; color:white;">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>

<div align="center" class="col-3 row" style="margin-top:1.5%;">
    Meet the developer:<a href="https://www.linkedin.com/in/umang-agarwal-5b227617b" style="margin-top:-2%" class="ace" target="_blank"><i class="fa fa-linkedin icon"></i></a>
    <label class="switch" style="margin-left:20%;">
        <input type="checkbox" id="myCheckbox" name="logout" onchange="toggleCheck()" checked>
        <span class="slider round"></span>
    </label>    
</div>';
    $_SESSION['fu']=1;
}

else if($_SESSION['fu']==111){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#AB0505; opacity:1; color:white;" >
      Password change failed.
      
      <button type="button" class="ml-2 mb-1 close" onclick="myfunc()" aria-label="Close" style="opacity:1; color:white;">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>

<div align="center" class="col-3 row" style="margin-top:1.5%;">
    Meet the developer:<a href="https://www.linkedin.com/in/umang-agarwal-5b227617b" style="margin-top:-2%" class="ace" target="_blank"><i class="fa fa-linkedin icon"></i></a>
    <label class="switch" style="margin-left:20%;">
        <input type="checkbox" id="myCheckbox" name="logout" onchange="toggleCheck()" checked>
        <span class="slider round"></span>
    </label>    
</div>';
    $_SESSION['fu']=1;
}

else{
    echo '<div align="center" class="col-3 offset-6 row" style="margin-top:1.5%;">
    Meet the developer:<a href="https://www.linkedin.com/in/umang-agarwal-5b227617b" style="margin-top:-2%" class="ace" target="_blank"><i class="fa fa-linkedin icon"></i></a>
    <label class="switch" style="margin-left:20%;">
        <input type="checkbox" id="myCheckbox" name="logout" onchange="toggleCheck()" checked>
        <span class="slider round"></span>
    </label>    
</div>';
}
?>

</div>
<br>

<!-- Modal -->
<div class="modal fade" id="changepwd" tabindex="-1" role="dialog" aria-labelledby="changepwd" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
				<input type = "password" name = "oldpwd" class  = "form-control" multiple required placeholder ="Old Password" style="border:2% !important; border-style:solid">
			</div>
			
            <div class="form-group">
				<input type = "password" name = "newpwd" class  = "form-control" multiple required id="newpwd" placeholder ="New Password" style="border:2% !important; border-style:solid">
			</div>
			
            <div class="form-group">
				<input type = "password" name = "conpwd" class  = "form-control" multiple required id="conpwd" placeholder ="Confirm Password" style="border:2% !important; border-style:solid">
			</div>
			
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" id="cp" style="background:#29AB87;" disabled>  Submit</button>  </div>
			<?php
			    
				if(isset($_POST['oldpwd'])){
				$href=$rows1[0];
				$res=mysqli_fetch_row(mysqli_query($con,"Select * from usertable where href='$href'"));
				
				if($res[3]==md5($_POST['oldpwd'])){
				$p=md5($_POST['newpwd']);
				$res=mysqli_query($con,"Update usertable set password='$p' where href='$href'");
				
				if($res)
				$_SESSION['fu']=110;
				else
				$_SESSION['fu']=111;
				}
				else{
				$_SESSION['fu']=111;
				}
				echo "<meta http-equiv='refresh' content='0'/>"; 
				
				}
			?>
        </form>
        </div>
        </div>
        </div>
        </div>


<?php 
if(!empty($_SESSION['msg']))
    {
        $msg=$_SESSION['msg'];
    echo'<div class="modal fade" id="exampleModalError" tabindex="1" role="dialog" aria-labelledby="exampleModalLabelError" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" style="color:white;" id="exampleModalLabel">Error!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">'.$msg.'
      </div>
	  <div class="modal-footer">
	  
	  <button type="button" class="btn" data-dismiss="modal" aria-label="Close" style="margin-right:1%;margin-left:1%;background:#29AB87;">
          Ok
        </button>
        </div>
        </div>
    </div>
  </div>';
    $_SESSION['msg']="";
    }
    
?>


<div class="container emp-profile" style="margin-top:0%;">
<?php
    $msg=$_SESSION['msgs'];
    $_SESSION['msgs']="";
    print($msg);
    
    
        echo'<form method="post">
                <div class="row" style="height:21%">
                    <div class="col-md-4">
                        <div class="profile-img" style="height:100%; " align="left">';
                        if($rows1[8]==1)
                            echo'<img src="./images/'.strtolower(join(explode(".",$rows1[6],-1),'.')).'.jpg" style="border-radius:50%; border:5px solid #38b0de; height:100%; width:50%" alt=""/>';
                        else
                            echo'<img src="./images/default.jpg" style="border-radius:50%; border:5px solid #38b0de; height:100%; width:50%" alt=""/>';
                    echo '</div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-head">
                                    <h5>
                                        '.$rows[0].' '.$rows[1].'
                                    </h5>
                                    <h6>';
                                    if(!empty($rows1[1]))    
                                       echo $rows1[1];   
                                    else
                                    echo '<span style="color:grey;"> Your fields of expertise...</span>';
                                    echo'</h6>
                                    <p class="mt-3 proile-rating">HRef: '.$rows1[0].'</p>
                            
                        </div>
                    </div>
                    <div class="col-md-5 row">
                        <a class="profile-edit-btn btn" name="btnAddMore"  data-toggle="modal" data-target="#exampleModal1"style="color:white; background:#38b0de; width:30%; height:25%; margin-left:20%;" align="center">Edit Profile</a>
                        <a href="./user_home.php" class="btn profile-edit-btn" style="color:white; width:47%; height:25%; margin-left:3%; background:#38b0de;"  align="center">Back to Dashboard</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work row">
                            <p class="col-12">Work Links</p>
                            <br>
                            <ul class="col-12 row" style="padding-left:0;">';
                            if (!empty($rows1[2]))
                            echo' <li>
                            <a href="'.$rows1[2].'" style="margin-right:1%; font-size:160%" class="ace" target="_blank" align="center"><i class="fa fa-linkedin icon"></i></a></li>';
                            else
                            echo' <li>
                            <a href="'.$rows1[2].'" style="margin-right:1%; font-size:160%; display:none;" class="ace" target="_blank"><i class="fa fa-linkedin icon"></i></a></li>';
                             if (!empty($rows1[3]))
                            echo' <li>
                            <a href="'.$rows1[3].'" style="margin-right:1%; font-size:170%" class="ace" target="_blank" align="center"><i class="fa fa-github icon"></i></a></li>';
                            else
                            echo' <li>
                            <a href="'.$rows1[3].'" style="margin-right:1%; font-size:160%; display:none;" class="ace" target="_blank" align="center"><i class="fa fa-github icon"></i></a></li>';
                             if (!empty($rows1[4]))
                            echo' <li>
                            <a href="'.$rows1[4].'" style="margin-right:1%; font-size:170%" class="ace" target="_blank" align="center"><i class="fa fa-instagram icon"></i></a></li>';
                            else
                            echo' <li>
                            <a href="'.$rows1[4].'" style="margin-right:1%; font-size:160%; display:none;" class="ace" target="_blank" align="center"><i class="fa fa-instagram icon"></i></a></li>';
                             if (!empty($rows1[5]))
                            echo' <li>
                            <a href="'.$rows1[5].'" style="margin-right:1%; font-size:170%" class="ace" target="_blank" align="center"><i class="fa fa-dribbble icon"></i></a></li>';
                            else
                            echo' <li>
                            <a href="'.$rows1[5].'" style="margin-right:1%; font-size:170%; display:none;" class="ace" target="_blank" align="center"><i class="fa fa-dribbble icon"></i></a></li>';
                             if (!empty($rows1[6]))
                            echo' <li>
                            <a href="mailto:'.$rows1[6].'" style="margin-right:1%; font-size:170%" class="ace" target="_blank" align="center"><i class="fa fa-at icon"></i></a></li>';
                            else
                            echo' <li>
                            <a href="mailto:'.$rows1[6].'" style="margin-right:1%; font-size:160%; display:none;" class="ace" target="_blank" align="center"><i class="fa fa-at icon"></i></a></li>';
                            echo'</ul>
                            <br>
                            
                            <p class="col-12" style="font-size: 12px;color: #818182;font-weight: 600;margin-top: 10%;">Resume/CV</p>';
                            if($rows1[9]==1)
                            echo'<a href="./resumes/'.strtolower(join(explode(".",$rows1[6],-1),'.')).'.pdf" class="btn profile-edit-btn" style="color:white; margin-top:1%; background:#38b0de;" download="'.$rows1[0].'_resume.pdf">Download</a>';
                            else
                            echo'<button class="btn profile-edit-btn" style="color:white; margin-top:1%; background:#ab0505;">Upload Resume/CV</button>';
							
							echo '<br><button class="btn profile-edit-btn" type="button" style="color:white; margin-top:5%; background:#ab0505;" data-toggle="modal" data-target="#changepwd">Change Password</button>';
                            
                    echo'</div>
                    </div>
                    <div class="col-md-8" style="text-align:justify;">
                    <h5>About:</h5>';
                    if(!empty($rows1[7]))    
                       echo substr($rows1[7],0,260).'<span style="display:none;" id="aboutmore">'.substr($rows1[7],260).'<br></span><input onclick="more()" type="button" style="color:blue; background:rgb(0,0,0,0); border:none;" id="moree" value="...See more"></input>';   
                    else
                        echo '<span style="color:grey;">Tell us about yourself...</span>';
                    
					echo'<br><hr>';
					$res=mysqli_fetch_row(mysqli_query($con,"Select * from applications where username='$email' and status='Hired' order by beg desc"));
					$job=mysqli_fetch_row(mysqli_query($con,"Select * from jobs where id='".$res[1]."'"));
					$org=mysqli_fetch_row(mysqli_query($con,"Select * from organizations where name like '$job[3]%'"));
					
					if($res!=null && $res[8]==null)
					{
						echo'<span style="text-align:justify; color:#29AB87;">
						<b>Current: </b>'.$job[1].' '.$job[0].' at '.$org[0].'<br>';
						echo'<b>For: </b>'.$job[11].' month/s<br>
						<b>Started on: </b>'.date("d-m-Y",strtotime($res[7])).'<br>
						<b>Ends on (tentative): </b>'.date("d-m-Y",strtotime(" +".$job[11]." months",strtotime($res[7])));
						
					}
					else if($res!=null && $res[8]!=null)
					{
						echo'<span style="text-align:justify; color:#AB0505;">
						<b>Last: </b>'.$job[1].' '.$job[0].' at '.$org[0].'<br>';
						echo'<b>For: </b>'.$job[11].' month/s<br>
						<b>Started on: </b>'.date("d-m-Y",strtotime($res[7])).'<br>
						<b>Ended on: </b>'.date("d-m-Y",strtotime($res[8]));
					}
					else if($res==null)
						echo'<span style="text-align:justify;">
						<b>Current: </b>None
						</span>';
					echo '</div>';	
                    echo '
                    <!--div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </form>           
        </div>';

echo'
<div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" style="color:white;" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method = "post" id="editt" enctype=\'multipart/form-data\'>
         
        <div class="form-group">
		<label for="myfile1">Profile Picture:</label>
        <input type="file" id="myfile1" accept="image/jpeg" name="dp"><br>
        <span style="font-size:10px;color:red">Only .jpg files of size <1MB allowed</span>
        </div>
		
			
		<div class="form-group"><input type = "text" id="domainn" name = "domain" class  = "form-control" required value="'.$rows1[1].'" placeholder ="Expertise(eg.- Web Development)" style="border:2% !important; border-style:solid" multiple>
		    <span style="font-size:10px;color:red" id="lim"></span>
		</div>
			
		<div class="form-group"><textarea name = "description" class  = "form-control" style="border:2% !important; border-style:solid" placeholder ="About(Min 100 characters)" id="des" required>'.$rows1[7].'</textarea></div>
		  	
		  
		<div class="form-group"><input type = "url" name = "linkedin" class  = "form-control"  placeholder ="LinkedIn Profile" value="'.$rows1[2].'" style="border:2% !important; border-style:solid"></div>
		  
		  
		<div class="form-group"><input type = "url" name = "git" class  = "form-control"  placeholder ="GitHub Profile" value="'.$rows1[3].'" style="border:2% !important; border-style:solid"></div>
		
		
		<div class="form-group"><input type = "url" name = "insta" class  = "form-control"  placeholder ="Instagram Profile" value="'.$rows1[4].'" style="border:2% !important; border-style:solid"></div>
		
		
		<div class="form-group"><input type = "url" name = "dribbble" class  = "form-control"  placeholder ="Dribbble Profile" value="'.$rows1[5].'" style="border:2% !important; border-style:solid"></div>
		
		
		<div class="form-group"><input type = "email" name = "mail" class  = "form-control" required placeholder ="Email ID" value="'.$rows1[6].'" style="border:2% !important; border-style:solid"></div>
		
		<div class="form-group">
		<label for="myfile">Resume:</label>
        <input type="file" id="myfile" accept="application/pdf" name="resume"><br>
        <span style="font-size:10px;color:red">Only .pdf files of size <1MB allowed</span>
        </div>
		
		  
		  <div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" id="registerr" style="background:#29AB87;">  Save</button>  </div>
		  </form>
		  
		  
      </div>
    </div>
  </div>
</div>';

				if(isset($_POST['mail'])){
				    $err=4;$err1=4;
				    if(!empty($_FILES['resume'])&&!empty($_FILES['resume']['name'])){
            			$file_name  = $_FILES['resume']['name'];
            			$file_type = $_FILES['resume']['type'];
            			$file_size = $_FILES['resume']['size'];
            			$file_tem_Loc = $_FILES['resume']['tmp_name'];
            			$file_store = "upload/".$file_name;
            			$fileextension = (explode('.',$file_name));
            			$fileextension = strtolower(end($fileextension));
            			$uploadPath = "./resumes/";
            			$extensions = array("pdf");
            			
            			if (! in_array($fileextension,$extensions)) {
                            $err =1;
                        }
            
                        else if ($file_size >1048576) {
                            $err=2;
                        }
            
                        else {
            			    if(file_exists("./resumes/".strtolower(join(explode(".",$rows1[6],-1),'.')).".pdf"))
            			        $ab=unlink("./resumes/".strtolower(join(explode(".",$rows1[6],-1),'.')).".pdf");
            		        $didUpload=move_uploaded_file($_FILES["resume"]["tmp_name"], "./resumes/".strtolower(join(explode(".",$rows1[6],-1),'.')).".pdf");
                            if ($didUpload) {
            				    $err=0;
            				    unset($_FILES['resume']);
            			    }
            			    else {
                                $err=5;
                            }
                        }
                        if( $err == 1){
                    		$_SESSION['msg']=$_SESSION['msg'].'Resume Updationtion Failed.Only .pdf is supported!';
                    	}
                    	else if( $err == 2){
                    		$_SESSION['msg']=$_SESSION['msg'].'Resume Updation Failed. File size Should be lass than 1MB!';
                    	}
                    		
                    	else if( $err == 5){
                    		$_SESSION['msg']=$_SESSION['msg'].'Resume Updation Failed.File not uploaded.';
                    	}
            		}
            		
            		if(!empty($_FILES['dp'])&&!empty($_FILES['dp']['name'])){
            			$file_name  = $_FILES['dp']['name'];
            			$file_type = $_FILES['dp']['type'];
            			$file_size = $_FILES['dp']['size'];
            			$file_tem_Loc = $_FILES['dp']['tmp_name'];
            			$file_store = "upload/".$file_name;
            			$fileextension = (explode('.',$file_name));
            			$fileextension = strtolower(end($fileextension));
            			$uploadPath = "./images/";
            			$extensions = array("jpg");
            			$err1=0;
            			
            			if (! in_array($fileextension,$extensions)) {
                            $err1 =1;
                        }
            
                        else if ($file_size >1048576) {
                            $err1=2;
                        }
            
                        else {
            			    if(file_exists("./images/".strtolower(join(explode(".",$rows1[6],-1),'.')).".jpg"))
            			        $ab=unlink("./images/".strtolower(join(explode(".",$rows1[6],-1),'.')).".jpg");
            		        $didUpload=move_uploaded_file($_FILES["dp"]["tmp_name"], "./images/".strtolower(join(explode(".",$rows1[6],-1),'.')).".jpg");
                            if ($didUpload) {
            				    $err1=0;
            			    }
            			    else {
                                $err1=5;
                            }
                        }
                        if( $err1 == 1){
                    		$_SESSION['msg']=$_SESSION['msg'].'Picture Updationtion Failed.Only .jpg is supported!';
                    	}
                    	else if( $err1 == 2){
                    		$_SESSION['msg']=$_SESSION['msg'].'Picture Updation Failed. File size should be less than 1MB!';
                    	}
                    		
                    	else if( $err1 == 5){
                    		$_SESSION['msg']=$_SESSION['msg'].'Picture Updation Failed.File not uploaded.';
                    	}
            		}
				$dom=$_POST['domain'];
				$l=$_POST['linkedin'];
				$g=$_POST['git'];
				$i=$_POST['insta'];
				$d=$_POST['dribbble'];
				$m=$_POST['mail'];
				$des=$_POST['description'];
				
				if($m!=$rows1[6] && $err1==4)
				{
				    rename("./images/".strtolower(join(explode(".",$rows1[6],-1),'.')).".jpg","./images/".strtolower(join(explode(".",$m,-1),'.')).".jpg");
				}
				
				if($m!=$rows1[6] && $err==4)
				{
				    rename("./resumes/".strtolower(join(explode(".",$rows1[6],-1),'.')).".pdf","./resumes/".strtolower(join(explode(".",$m,-1),'.')).".pdf");
				}
				
    			$condi="update userdata set domain='$dom',linkedin='$l', git='$g', insta='$i', dribbble='$d', mail='$m', abt=\"$des\"";
    			
    			if($err==0)
    			    $condi=$condi.", resume=1";
    			
    			if($err1==0)
    			    $condi=$condi.", pic=1";
                
    			$condi=$condi." WHERE href='$rows1[0]'";  
    		$up=	mysqli_query($con,"update shadows set email='$m' where href='$rows1[0]'");
    		$up=mysqli_query($con,$condi);
    		if($up)
            $_SESSION['msgs']='<div class="alert alert-success alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%; transition:opacity 1s ease;" id="qwe1">
      <strong>Updation Successful!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
        
		header("location:edit_profile.php");
		echo "<meta http-equiv=\"refresh\" content=\"0\" />"; 
				}
    			
?>

<?php/*
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
		
		}*/
	  ?>
	  <br>

	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
function toggleCheck() {
  if(document.getElementById("myCheckbox").checked === false){
    setTimeout(function () {
       window.location.href="./user_logout.php";
    }, 250); 
  }
}

$('#newpwd, #conpwd').bind('keyup', function() {
    if($("#conpwd").val() == $("#newpwd").val())
        $('#cp').removeAttr('disabled');
    else
        $('#cp').attr('disabled','disabled');
});

window.setTimeout(function() {
    document.getElementById("qwe1").style.opacity=0;
}, 2000);


window.setTimeout(function() {
    document.getElementById("qwe1").style.display="none";
}, 2500);


function myfunc(){
    document.getElementById("qwe").style.opacity=0;
}

window.setTimeout(function() {
    document.getElementById("qwe2").style.opacity=0;
}, 2000);


window.setTimeout(function() {
    document.getElementById("qwe2").style.display="none";
}, 2500);


window.setTimeout(function() {
    document.getElementById("qwe").style.opacity=0;
}, 2000);


window.setTimeout(function() {
    document.getElementById("qwe").style.display="none";
}, 2500);



$('#domainn').bind('keyup', function() {
    var x=$('#domainn').val().length;
    if(x>50) 
        $('#registerr').attr('disabled','disabled');
    else
        $('#registerr').removeAttr('disabled');
        
    document.getElementById("lim").innerHTML="Only "+(50-x)+ " characters left";
});

function more(){
    event.preventDefault();
    if(document.getElementById("moree").value=="...See more"){
    document.getElementById("moree").value="See less";
    document.getElementById("aboutmore").style.display="";}
    else{
    document.getElementById("moree").value="...See more";
    document.getElementById("aboutmore").style.display="none";}
    
}

$(document).ready(function() {
  $('#exampleModalError').modal('show');
  var x=$('#domainn').val().length;
  document.getElementById("lim").innerHTML="Only "+(50-x)+ " characters left";
});
</script>
</body>
</html>