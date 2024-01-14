<?php
session_start();
include ('db.php');
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

</style>
<body style="background-color:#FFFFFF; " onload="dis()">
<div align="center" class="row" style="width:100%;">
<div class="col-3" align="left" style="margin-top:-7%; padding-left:2% ">
    <img src="./images/logo.png" style="heigth:90%; width:90%;">
</div> 
<?php
include('db.php');
include ('uauthlogin.php');


if($_SESSION['fu']==0){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;
$res=mysqli_fetch_row(mysqli_query($con, "select * from usertable where href='".$_SESSION['email']."'"));

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#29AB87;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      Welcome '.$res[0].' '.$res[1].'<br>
      It has beeen '.$h.' hours, '.$m.' minutes and '.$s.' seconds since you last logged in
      
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




$job = isset($_GET['job']) ? $_GET['job'] : null;
if(!empty($job))
$_SESSION['filtercheck']=1;


?>

</div>
<br>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary" style="margin-top:-8%; background:#38b0de !important;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
    <ul class="navbar-nav justify-content-center" style="width:100%;" >
      <li class="nav-item " style="margin-right:10%;">
          <a class="btn" style="background:rgb(0,0,0,0) !important;color:white;" href="./myapp.php">My Applications</a>
      </li>
      <li class="nav-item " >
           <form class="form-inline" style="margin-bottom:0;" id="jsform" method="post">
                <input class="form-control mr-sm-2" ID="search" type="search" placeholder="Search" name="search" onkeyup="sub()"  aria-label="Search" multiple>
            </form>
      </li>
      <li class="nav-item " style="margin-left:10%;">
         <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal1" style="background:#fff; color:#38b0de;">
            Filter
        </button>
      </li>
    <?php
      if($_SESSION['filtercheck']==1)
      { 
        echo'<li class="nav-item " style="margin-left:10%;">
         <form method="post" action="./user_home.php" style="margin-bottom:0;">
         <input type="submit" class="btn" style="background:#fff; color:#38b0de;" value="Clear Filters" name="filtercheck">
         </form>
            
      </li>';
      if(isset($_POST['filtercheck']))
      {
          $_SESSION['filtercheck']=0;
          unset($_SESSION['filterpos']);
          unset($_SESSION['filterdep']);
          unset($_SESSION['filterorg']);
          echo "<meta http-equiv='refresh' content='0'>";
      }
      }?>      
      <li class="nav-item " style="margin-left:10%;">
        <div class="dropdown" >
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:white !important;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php $res=mysqli_fetch_row(mysqli_query($con, "select * from                   usertable where href='".$_SESSION['email']."'"));
                    echo $res[0].' '.$res[1]; ?>
          </a>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" style="background:white !important;" href="./edit_profile.php">Edit Profile</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>


<div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Filters</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form ction="" method = "post">
			<div class="form-group">
				<select class="form-control" name="pos" id="pos">
					<option value="">Position</option>
					<option value="Lead">Lead</option>
					<option value="Intern">Intern</option>
				</select>
			</div>
			
			
         <div class="form-group">
				<select class="form-control" id="dep" name="dep">
					<option value="">Department</option>
					<?php
						$result = mysqli_query($con, "select * from departments  order by name");
						while($row=mysqli_fetch_row($result))
							echo '<option value='.$row[1].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
			
			<div class="form-group">
				<select class="form-control" id="org" name="org">
					<option value="">Organisation</option>
					<?php
						$result = mysqli_query($con, "select * from organizations order by name");
						while($row=mysqli_fetch_row($result))
							echo '<option multiple value='.$row[0].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
		  
		  <div class="ml-auto mr-auto" align="right"><input type = "submit" class = "btn btn-primary" id="register" style="background:#29AB87;" name="filtersubmit" value="Submit" >  </div>
		  </form>
		  
      </div>
    </div>
  </div>
</div>

<br>
<div style=" " class="offset-1 col-10">
	

<?php
    echo'<table id="myTable" style="width:100%;">';
	if(isset($_SESSION['email']))
	$username=$_SESSION['email'];
    
    
	
	       if(isset($_POST['filtersubmit']))
	        {
	            $_SESSION['filtercheck']=1;
	            $_SESSION['filterpos']=$_POST['pos'];
	            $_SESSION['filterdep']=$_POST['dep'];
	            $_SESSION['filterorg']=$_POST['org'];
	            echo "<meta http-equiv='refresh' content='0'>";
	        }
	        $q="select * from jobs where 1=1";
	        if(!empty($_SESSION['filterpos'])){
		        $q .= " AND pos='".$_SESSION['filterpos']."'";
	        }
	        if(!empty($_SESSION['filterdep'])){
	            $d=mysqli_fetch_row(mysqli_query($con, "select name from `departments` where code='".$_SESSION['filterdep']."'"))[0];
	            $q .= " AND department='".$d."'";
	        }
	        if(!empty($job)){
		        $q .= " AND id='".$job."'";
	        }
	        
	        if(!empty($_SESSION['filterorg'])){
		        $q .= " AND org like \"".$_SESSION['filterorg']."%\"";
	        }
	        $q=$q." order by time desc";
	        $result = mysqli_query($con, $q);
	        
			while($row=mysqli_fetch_row($result)){
			    $x=mysqli_fetch_array(mysqli_query($con, "select * from `organizations` where name like \"%".$row['3']."%\""));
				
	            $resulta=mysqli_query($con,"SELECT * FROM applications WHERE username='$username' AND job='$row[8]'");
				
				$res=mysqli_fetch_row(mysqli_query($con,"Select * from applications where username='$username' and status='Hired' order by beg desc"));
				if($res[7]!=null && $res[6]==0){
					if($row['6']!="0"){
				    if(mysqli_num_rows($resulta)==0){
					echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#38b0de; margin-left:85%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>
							<h4>'.$row['0'].'-'.$row['1'].'</h4>
	                        <h5 style="color:#38b0de;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important;" target="_blank">'.$x[0].'</a></h5><br>
							<span style="font-weight: bold;">Duration:</span> '.$row['11'].' <span style="font-weight: bold;">month/s</span> | <span style="font-weight: bold;">Experience required:</span> '.$row['4'].' | <span style="font-weight: bold;">Number of positions available:</span> '.$row['6'].' | <span style="font-weight: bold;">Stipend:</span>  '.$row['9'].' | <span style="font-weight: bold;">Posted on:</span> '.explode(" ",$row['10'])[0].'
							
							<br><br>
							<center>
							<a style="color:#38b0de; font-weight: bold;" href="#exampleModalCenter2'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter2'.$row[8].'">View Details<br><i class="arrow down ice"></i></a>
							</center>
							
							</td></tr>
							
							
							
							<div class="modal fade" id="exampleModalCenter2'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;  text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span style=" text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
							<div class="modal-footer">
										<button class="btn" style="color:white; background:#29ab87" data-dismiss="modal">Not Eligible</button>
										</div>
							    </div>
    </div>
  </div>
  
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white;">Are you sure?</h5>
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" id="applytest" class="btn btn-success" value='.$row[8].'>Apply</button>
	  </form>
	  <button style="color:white;" class="btn btn-danger" type="button" class="close" data-dismiss="modal" aria-label="Close">
          No
        </button>
      </div></div>
    </div>
  </div>';}
                        else{
					echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#38b0de; margin-left:85%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>
							<h4>'.$row['0'].'-'.$row['1'].'</h4>
	                        <h5 style="color:#38b0de;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important;" target="_blank">'.$x[0].'</a></h5><br>
							<span style="font-weight: bold;">Duration:</span> '.$row['11'].' <span style="font-weight: bold;">month/s</span> | <span style="font-weight: bold;">Experience required:</span> '.$row['4'].' | <span style="font-weight: bold;">Number of positions available:</span> '.$row['6'].' | <span style="font-weight: bold;">Stipend:</span>  '.$row['9'].' | <span style="font-weight: bold;">Posted on:</span> '.explode(" ",$row['10'])[0].'
							
							<br><br>
							<center>
							<a style="color:#38b0de; font-weight: bold;" href="#exampleModalCenter2'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter2'.$row[8].'">View Details<br><i class="arrow down ice"></i></a>
							</center>
							
							</td></tr>
							
							
							
							<div class="modal fade" id="exampleModalCenter2'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;  text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span style=" text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
							<div class="modal-footer">
										<button class="btn" style="color:white; background:#29ab87" data-dismiss="modal">Already Applied</button>
										</div>
							    </div>
    </div>
  </div>
  
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white;">Are you sure?</h5>
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" id="applytest" class="btn btn-success" value='.$row[8].'>Apply</button>
	  </form>
      </div></div>
    </div>
  </div>';}
				    
				}
				
				else{
				echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#29AB87; margin-left:74%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">Position Filled</span>
					<span style="color:white;background:#38b0de; margin-left:1%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>
							<h4>'.$row['0'].'-'.$row['1'].'</h4>
	                        <h5 style="color:#38b0de;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important;" target="_blank">'.$x[0].'</a></h5><br>
							<span style="font-weight: bold;">Duration:</span> '.$row['11'].' <span style="font-weight: bold;">month/s</span> | <span style="font-weight: bold;">Experience required:</span> '.$row['4'].' | <span style="font-weight: bold;">Number of positions available:</span> '.$row['6'].' | <span style="font-weight: bold;">Stipend:</span>  '.$row['9'].' | <span style="font-weight: bold;">Posted on:</span> '.explode(" ",$row['10'])[0].'
							
							<br><br>
							<center>
							<a style="color:#38b0de; font-weight: bold;" href="#exampleModalCenter2'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter2'.$row[8].'">View Details<br><i class="arrow down ice"></i></a>
							</center>
							
							</td></tr>
							
							
							
							<div class="modal fade" id="exampleModalCenter2'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;  text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span style=" text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
							<div class="modal-footer">
										<button class="btn" style="color:white; background:#29ab87" data-dismiss="modal">Position Filled</button>
										</div>
							    </div>
    </div>
  </div>
  
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white;">Are you sure?</h5>
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" id="applytest" class="btn btn-success" value='.$row[8].'>Apply</button>
	  </form>
      </div></div>
    </div>
  </div>';
				}
				
				}
				else{
				if($row['6']!="0"){
				    if(mysqli_num_rows($resulta)==0){
					echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#38b0de; margin-left:85%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>
							<h4>'.$row['0'].'-'.$row['1'].'</h4>
	                        <h5 style="color:#38b0de;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important;" target="_blank">'.$x[0].'</a></h5><br>
							<span style="font-weight: bold;">Duration:</span> '.$row['11'].' <span style="font-weight: bold;">month/s</span> | <span style="font-weight: bold;">Experience required:</span> '.$row['4'].' | <span style="font-weight: bold;">Number of positions available:</span> '.$row['6'].' | <span style="font-weight: bold;">Stipend:</span>  '.$row['9'].' | <span style="font-weight: bold;">Posted on:</span> '.explode(" ",$row['10'])[0].'
							
							<br><br>
							<center>
							<a style="color:#38b0de; font-weight: bold;" href="#exampleModalCenter2'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter2'.$row[8].'">View Details<br><i class="arrow down ice"></i></a>
							</center>
							
							</td></tr>
							
							
							
							<div class="modal fade" id="exampleModalCenter2'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;  text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span style=" text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
							<div class="modal-footer">
										<a class="btn btn-success" style="color:white;" href="#exampleModalCenter'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter'.$row[8].'" data-dismiss="modal">Apply</a>
										</div>
							    </div>
    </div>
  </div>
  
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white;">Are you sure?</h5>
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" id="applytest" class="btn btn-success" value='.$row[8].'>Apply</button>
	  </form>
	  <button style="color:white;" class="btn btn-danger" type="button" class="close" data-dismiss="modal" aria-label="Close">
          No
        </button>
      </div></div>
    </div>
  </div>';}
                        else{
					echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#38b0de; margin-left:85%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>
							<h4>'.$row['0'].'-'.$row['1'].'</h4>
	                        <h5 style="color:#38b0de;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important;" target="_blank">'.$x[0].'</a></h5><br>
							<span style="font-weight: bold;">Duration:</span> '.$row['11'].' <span style="font-weight: bold;">month/s</span> | <span style="font-weight: bold;">Experience required:</span> '.$row['4'].' | <span style="font-weight: bold;">Number of positions available:</span> '.$row['6'].' | <span style="font-weight: bold;">Stipend:</span>  '.$row['9'].' | <span style="font-weight: bold;">Posted on:</span> '.explode(" ",$row['10'])[0].'
							
							<br><br>
							<center>
							<a style="color:#38b0de; font-weight: bold;" href="#exampleModalCenter2'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter2'.$row[8].'">View Details<br><i class="arrow down ice"></i></a>
							</center>
							
							</td></tr>
							
							
							
							<div class="modal fade" id="exampleModalCenter2'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;  text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span style=" text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
							<div class="modal-footer">
										<button class="btn" style="color:white; background:#29ab87" data-dismiss="modal">Already Applied</button>
										</div>
							    </div>
    </div>
  </div>
  
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white;">Are you sure?</h5>
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" id="applytest" class="btn btn-success" value='.$row[8].'>Apply</button>
	  </form>
      </div></div>
    </div>
  </div>';}
				    
				}
				
				else{
				echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#29AB87; margin-left:74%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">Position Filled</span>
					<span style="color:white;background:#38b0de; margin-left:1%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>
							<h4>'.$row['0'].'-'.$row['1'].'</h4>
	                        <h5 style="color:#38b0de;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important;" target="_blank">'.$x[0].'</a></h5><br>
							<span style="font-weight: bold;">Duration:</span> '.$row['11'].' <span style="font-weight: bold;">month/s</span> | <span style="font-weight: bold;">Experience required:</span> '.$row['4'].' | <span style="font-weight: bold;">Number of positions available:</span> '.$row['6'].' | <span style="font-weight: bold;">Stipend:</span>  '.$row['9'].' | <span style="font-weight: bold;">Posted on:</span> '.explode(" ",$row['10'])[0].'
							
							<br><br>
							<center>
							<a style="color:#38b0de; font-weight: bold;" href="#exampleModalCenter2'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter2'.$row[8].'">View Details<br><i class="arrow down ice"></i></a>
							</center>
							
							</td></tr>
							
							
							
							<div class="modal fade" id="exampleModalCenter2'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;  text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span style=" text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
							<div class="modal-footer">
										<button class="btn" style="color:white; background:#29ab87" data-dismiss="modal">Position Filled</button>
										</div>
							    </div>
    </div>
  </div>
  
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white;">Are you sure?</h5>
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test" id="applytest" class="btn btn-success" value='.$row[8].'>Apply</button>
	  </form>
      </div></div>
    </div>
  </div>';
				}
				
				
				
				}
				}
  echo'</table>';
		if(mysqli_num_rows($result)==0){
		    echo '<div align="center">
		    
		    
		    No Results Found<br><br>
		    
		    <span style="color:grey;">We can\'t find any item matching<br>your search</span>
		    
		    </div>';
		}
							

							
							
	function apply($username,$job)
	{
		include('db.php');
		$result=mysqli_query($con,"SELECT * FROM applications WHERE username='$username' AND job='$job'");
		if(mysqli_num_rows($result)>0)
		{
		$_SESSION['fu']= 3;
        $_SESSION['job']=$job;
		echo "<meta http-equiv=\"refresh\" content=\"0;URL='./myapp.php'\" />";
		return;
		}
		$result=mysqli_query($con,"INSERT INTO applications(username,job,status,time) VALUES('$username','$job',\"In progress\",now())");
		$_SESSION['fu']=2;
        $_SESSION['job']=$job;
		echo "<meta http-equiv=\"refresh\" content=\"0;URL='./myapp.php'\" />";
		return;
	}
	if (isset($_POST['test'])) {
    apply($username,$_POST['test']);
  }
?>

<div align="center" style="display:none;" id="nrf">
		    
		    No Results Found<br><br>
		    
		    <span style="color:grey;">We can't find any item matching<br>your search</span>
		    
		    </div>
</div>
<script>
window.setTimeout(function() {
    document.getElementById("qwe1").style.opacity=0;
}, 2000);


window.setTimeout(function() {
    document.getElementById("qwe1").style.display="none";
}, 2500);

window.setTimeout(function() {
    document.getElementById("qwe2").style.opacity=0;
}, 2000);


window.setTimeout(function() {
    document.getElementById("qwe2").style.display="none";
}, 2500);

function sub() {
  // Declare variables
  var input,f=0, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
    console.log(tr.length);
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    // td = tr[i].getElementsByTagName("div")[0];
    console.log(td);
    if (td) {
      txtValue = td.textContent ;
      console.log(txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        f=1;
          
      } else {
         console.log("no");
        tr[i].style.display = "none";
      }
    }
  }
  if(f==0)
    document.getElementById("nrf").style.display="";
  else
    document.getElementById("nrf").style.display="none";
}


function dis(){
    setTimeout(function(){
        document.getElementById("qwe").style.opacity=0;
    },5000);
}


function myfunc(){
    document.getElementById("qwe").style.opacity=0;
}


function toggleCheck() {
  if(document.getElementById("myCheckbox").checked === false){
    setTimeout(function () {
       window.location.href="./user_logout.php";
    }, 250); 
  }
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>