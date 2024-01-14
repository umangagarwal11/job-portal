<html>
<head>
	<title >CodeBinary Initiatives Opportunities</title>
	
	<meta name="viewport" content="width=2048,initial-scale=1.0,maximum-scale=1,shrink-to-fit=no">
    <link rel = "stylesheet " type = "text/css" href ="./style.css">
	<link rel = "stylesheet " type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="icon" href="./images/logoicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
	
</head>
<style>


.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}





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

.ace1:before {
    background: #d44638;
}




.booty::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

.booty:disabled::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white !important;
  opacity: 1; /* Firefox */
}



</style>
<body style="background-color:#FFFFFF; " onload="dis()">
<div align="center" class="row" style="width:100%;">
<div class="col-3" align="left" style="margin-top:-7%; padding-left:2% ">
    <img src="./images/logo.png" style="heigth:90%; width:90%;">
</div>     
<?php
include('db.php');
include ('authlogin.php');

if($_SESSION['f']==0){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#29AB87;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      Welcome '.$_SESSION['username'].'<br>
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
    $_SESSION['f']=1;
}

else if($_SESSION['f']==3){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#ab0505; opacity:1; color:white;" >
      Organisation successfully deleted.
      
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
    $_SESSION['f']=1;
}


else if($_SESSION['f']==4){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      Organisation successfully added.
      
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
    $_SESSION['f']=1;
}


else if($_SESSION['f']==5){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#38b0de; opacity:1; color:white;" >
      Organisation successfully edited.
      
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
    $_SESSION['f']=1;
}


else if($_SESSION['f']==6){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#ab0505; opacity:1; color:white;" >
      User successfully restricted.
      
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
    $_SESSION['f']=1;
}


else if($_SESSION['f']==8){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#ab0505; opacity:1; color:white;" >
      User successfully deleted.
      
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
    $_SESSION['f']=1;
}

else if($_SESSION['f']==7){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      User successfully derestricted.
      
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
    $_SESSION['f']=1;
}


else if($_SESSION['f']==9){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      User successfully added.
      
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
    $_SESSION['f']=1;
}


else if($_SESSION['f']==12){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29AB87; opacity:1; color:white;" >
      Department successfully added.
      
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
    $_SESSION['f']=1;
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




$limit = 15;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$s = "SELECT * FROM usertable order by fullname LIMIT $start, $limit";
$aresult = mysqli_query($con,$s);

$ap = "select * from usertable";
$result6 = mysqli_query($con,$ap);
$num6 = mysqli_num_rows($result6);
$pages = ceil( $num6 / $limit );

if($page>1){
$Previous = $page - 1;
    
}

else{
    $Previous = $pages;
}
if($page<$pages){
$Next = $page + 1;
    
} 
else{
    $Next = 1;
}





?>

</div>
<br><br>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary" style="margin-top:-10%; background:#38b0de !important;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
    <ul class="navbar-nav justify-content-center" style="width:100%;" >
      
      <li class="nav-item "style="margin-right:10%">
          <button type="button" class="btn " onclick="window.location.href='./app.php';" style="background:rgb(0,0,0,0); color:white;">
  Back to Dashboard
</button>

      </li>
      
      <li class="nav-item " style="margin-right:10%">
        <div class="dropdown" >
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:white !important;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jobs
          </a>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <button type="button" class="btn col-12" data-toggle="modal" data-target="#exampleModal1" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                Add
            </button>
			
			<button type="button" class="btn " data-toggle="modal" data-target="#exampleModal2" style="background:rgb(0,0,0,0); color:black; text-align:left;">
              Import
            </button>
            
            <button type="button" class="btn  col-12 " style="background:rgb(0,0,0,0); color:black; text-align:left;" onclick="window.location.href='./jobman.php';">
                 Manage
            </button>
            
          <button type="button" class="btn col-12" data-toggle="modal" data-target="#exampleModal" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                Add a Department
            </button>
          </div>
          
          
         </div>
      </li>
      
      
      <li class="nav-item " style="margin-right:10%">
        <div class="dropdown" >
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:white !important;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Organisations
          </a>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <button type="button" class="btn  col-12 " data-toggle="modal" data-target="#exampleModal3" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                 Add 
            </button><br>
            
         <button type="button" class="btn  col-12" data-toggle="modal" data-target="#exampleModal6" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                 Edit 
            </button><br>
         
         <button type="button" class="btn  col-12 " data-toggle="modal" data-target="#exampleModal5" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                 Delete
            </button>
            
            
         <button type="button" class="btn  col-12 " style="background:rgb(0,0,0,0); color:black; text-align:left;" onclick="window.location.href='./orgs.php';">
                 View All
            </button>
          </div>
          
          
         </div>
      </li>
      <li class="nav-item " style="margin-right:0%; ">
         <div class="dropdown" >
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" style="color:white !important;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Users
          </a>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
         <button type="button" class="btn  col-12 " data-toggle="modal" data-target="#exampleModal7" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                 Add 
            </button><br>
            
         <button type="button" class="btn  col-12" data-toggle="modal" data-target="#exampleModal8" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                 Restrict 
            </button><br>
         
         <button type="button" class="btn  col-12 " data-toggle="modal" data-target="#exampleModal9" style="background:rgb(0,0,0,0); color:black; text-align:left;">
                 Delete
            </button>
			
         <button type="button" class="btn  col-12 " style="background:rgb(0,0,0,0); color:black; text-align:left;" onclick="window.location.href='./allusers.php';">
                 View All
            </button>
          </div>
          
          
         </div>
      </li>
      
      
    </ul>
  </div>
</nav>




<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Add a User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
				<input type = "text" name = "href" class  = "form-control" multiple required placeholder ="Href" style="border:2% !important; border-style:solid">
			</div>
			
            <div class="form-group">
				<input type = "text" name = "name" class = "form-control" multiple required placeholder ="Full Name" style="border:2% !important; border-style:solid">
			</div>
			
            <div class="form-group">
				<input type = "email" name = "mail" class  = "form-control" multiple required placeholder ="E-mail" style="border:2% !important; border-style:solid">
			</div>
			
            <div class="form-group">
				<input type = "password" name = "pass" class  = "form-control" multiple required placeholder ="Password" style="border:2% !important; border-style:solid" id="pas">
			</div>
			
            <div class="form-group">
				<input type = "password" name = "cpass" class  = "form-control" multiple required placeholder ="Confirm Password" style="border:2% !important; border-style:solid" id="cpas">
			</div>
			
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" id="ur" style="background:#29AB87;" disabled>  Submit</button>  </div>
			<?php
			    
				if(isset($_POST['href'])){
				$href=$_POST['href'];
				$mail=$_POST['mail'];
				$name1=explode(" ",$_POST['name'])[0];
				$name2=substr(strstr($_POST['name']," "), 1);
				$pass=md5($_POST['pass']);
				$result=mysqli_query($con,"insert into `usertable` values('$name1','$name2','$href','$pass',now(),0,0)");
				$result=mysqli_query($con,"insert into `userdata`(href,mail,pic,resume) values('$href','$mail',0,0)");
				$result=mysqli_query($con,"insert into `shadows`(href,email) values('$href','$mail')");
				$_SESSION['f']=9;
				
				echo "<meta http-equiv='refresh' content='0'/>"; 
				
				}
			?>
        </form>
        </div>
        </div>
        </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Restrict a User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="form-inline" style="margin-bottom:5%;" id="jsform" method="post">
                <input class="form-control col-12" ID="search1" type="search" placeholder="Search" name="search" onkeyup="sub()"  aria-label="Search" multiple>
            </form>
          <table id="myTable1" style="width:100%;">
            <?php
			$result = mysqli_query($con, "select * from usertable order by href");
			while($rows=mysqli_fetch_row($result)){
					echo '<tr><td class="card" style="width:100%; padding:1% 1% 1% 1% ; margin-bottom:2%;">';
							if($rows[5]==0)
							echo '<form method="post" style="text-align:left;padding-bottom:0; margin-bottom:0;" class="form-inline">
							<label class="col-9" style="display:block; text-align:left;">'.$rows[2].'</label>
								<button name="block" class="col btn btn-danger" value="'.$rows[2].'">Restrict</button>
								</form></td></tr>';
							else
							echo '<form method="post" class="form-inline" style="text-align:left;padding-bottom:0; margin-bottom:0;">
								<label class="col-9" style="display:block; text-align:left;padding-bottom:0; margin-bottom:0;">'.$rows[2].'</label>
								<button name="unblock" class="btn col btn-success" value="'.$rows[2].'">Derestrict</button>
								</form></td></tr>';
							}
			function block($user)
			{
				include('db.php');
				$result=mysqli_query($con,"update usertable set block=1 WHERE href='$user'");
				$_SESSION['f']=6;
				
				echo "<meta http-equiv='refresh' content='0'/>"; 
				
			}
			function unblock($user)
			{
				include('db.php');
				$result=mysqli_query($con,"update usertable set block=0 WHERE href='$user'");
				$_SESSION['f']=7;
				
				echo "<meta http-equiv='refresh' content='0'/>"; 
				
			}
			if (isset($_POST['block'])) {
				block($_POST['block']);}
			else if (isset($_POST['unblock'])) {
				unblock($_POST['unblock']);}
	    ?>
	    </table>
	    
	<div align="center" style="display:none;" id="nrf">
		    
		   
		    No Results Found<br><br>
		    
		    <span style="color:grey;">We can't find any item matching<br>your search</span>
		    
		    </div>
        </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Delete a User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form class="form-inline" style="margin-bottom:5%;" id="jsform" method="post">
                <input class="form-control col-12" ID="search2" type="search" placeholder="Search" name="search" onkeyup="sub2()"  aria-label="Search" multiple>
            </form>
          <table id="myTable2" style="width:100%;">
           <?php
			$result = mysqli_query($con, "select * from usertable order by href");
			while($rows=mysqli_fetch_row($result)){
					echo '<tr><td class="card" style="width:100%; padding:1% 1% 1% 1% ; margin-bottom:2%;">';
							echo '<form method="post" class="form-inline" style="text-align:left;padding-bottom:0; margin-bottom:0;">
							<label class="col-10" style="display:block; text-align:left;">'.$rows[2].'</label>
							<button name="delete" class="col btn btn-danger" value="'.$rows[2].'">Delete</button>
								</form></td></tr>';
							}
			function delete($user)
			{
				include('db.php');
				$rows1=mysqli_fetch_row(mysqli_query($con,"select * from usertable WHERE href='$user'"));
				$result=mysqli_query($con,"delete from usertable WHERE href='$user'");
				$result=mysqli_query($con,"delete from userdata WHERE href='$user'");
				$result=mysqli_query($con,"delete from shadows WHERE href='$user'");
				$_SESSION['f']=8;
				if(file_exists("./resumes/".strtolower(join(explode(".",$rows1[6],-1),'.')).".pdf"))
            			        $ab=unlink("./resumes/".strtolower(join(explode(".",$rows1[6],-1),'.')).".pdf");
            	if(file_exists("./images/".strtolower(join(explode(".",$rows1[6],-1),'.')).".jpg"))
            			        $ab=unlink("./images/".strtolower(join(explode(".",$rows1[6],-1),'.')).".jpg");
				
				echo "<meta http-equiv='refresh' content='0'/>"; 
				
			}
			if (isset($_POST['delete'])) {
				delete($_POST['delete']);}
	    ?>
         </table>
	    
	<div align="center" style="display:none;" id="nrf2">
		    
		   
		    No Results Found<br><br>
		    
		    <span style="color:grey;">We can't find any item matching<br>your search</span>
		    
		    </div>
       </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Add a Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method = "post">
			<div class="form-group">
				<input type = "text" name = "cat" class  = "form-control" multiple required placeholder ="New Department" style="border:2% !important; border-style:solid"></div>
				
			<div class="form-group">
				<input type = "text" name = "code" class  = "form-control" required placeholder ="Department Code" style="border:2% !important; border-style:solid"></div>
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" style="background:#29AB87;" >  Submit</button>  </div>
		  </form>
		  <?php
			
				if(isset($_POST['cat'])){
				$cate=$_POST['cat'];
				$a=$_POST['code'];
				$result=mysqli_query($con,"insert into `departments` values('$cate','$a')");
				$_SESSION['f']=12;
				echo "<meta http-equiv=\"refresh\" content=\"0\" />"; 
				
				}
			
			?>
      </div>
    </div>
  </div>
</div>

<?php 
if(!empty($_SESSION['organi'])){
				$cate=$_SESSION['organi'];
				$result=mysqli_fetch_row(mysqli_query($con,"Select * from `organizations` where name like \"$cate%\""));
				echo '<div class="modal fade show" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Edit '.$result[0].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    				<form method="post">
			<div class="form-group">
				<textarea type = "text" name = "catee1" class  = "form-control" multiple required placeholder ="Description(Minimum 100 characters...)" style="border:2% !important; border-style:solid">'.$result[1].'</textarea></div>
				
			<div class="form-group">
				<input type = "text" name = "codeee" class  = "form-control" required placeholder ="Website link" style="border:2% !important; border-style:solid" value="'.$result[2].'"></div>
			
			<div class="form-group">
				<input type = "text" name = "rnamee" class  = "form-control" required placeholder ="Representative\'s name" style="border:2% !important; border-style:solid" value="'.$result[3].'"></div>
				
			<div class="form-group">
				<input type = "email" name = "rmaile" class  = "form-control" required placeholder ="Representative\'s E-mail" style="border:2% !important; border-style:solid" value="'.$result[4].'"></div>
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" style=""  name="organisub" value=1>  Save</button>  </div>
			</form>
			  </div>
            </div>
          </div>
        </div>';
		            
		        
        if(isset($_POST['organisub'])){
				$cate1=$_POST['catee1'];
				$a=$_POST['codeee'];
				$rna=$_POST['rnamee'];
				$ma=$_POST['rmaile'];
				$result=mysqli_query($con,"update `organizations` set des=\"$cate1\", site='$a', repname='$rna', mail='$ma' where name like \"$cate%\"");
				$_SESSION['f']=5;
				unset($_SESSION['organi']);
				echo "<meta http-equiv=\"refresh\" content=\"0\" />"; 
				}
		        }
		        
		        ?>

<!-- Modal -->
<div class="modal fade " id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Add an Organisation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method = "post">
			<div class="form-group">
				<input type = "text" name = "cate" class  = "form-control" multiple required placeholder ="New Organisation" style="border:2% !important; border-style:solid"></div>
				
				
			<div class="form-group">
				<textarea type = "text" name = "cate1" class  = "form-control" multiple required placeholder ="Description(Minimum 100 characters...)" style="border:2% !important; border-style:solid"></textarea></div>
				
			<div class="form-group">
				<input type = "text" name = "codee" class  = "form-control" required placeholder ="Website link" style="border:2% !important; border-style:solid"></div>
				
			<div class="form-group">
				<input type = "text" name = "rname" class  = "form-control" required placeholder ="Representative's name" style="border:2% !important; border-style:solid"></div>
				
			<div class="form-group">
				<input type = "email" name = "rmail" class  = "form-control" required placeholder ="Representative's E-mail" style="border:2% !important; border-style:solid"></div>
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" style="background:#29AB87;" >  Submit</button>  </div>
		  </form>
		  <?php
			
				if(isset($_POST['cate'])){
				$cate=$_POST['cate'];
				$cate1=$_POST['cate1'];
				$a=$_POST['codee'];
				$rna=$_POST['rname'];
				$ma=$_POST['rmail'];
				$result=mysqli_query($con,"insert into `organizations` values('$cate','$cate1','$a','$rna','$ma')");
				$_SESSION['f']=4;
				
				echo "<meta http-equiv=\"refresh\" content=\"0\" />"; 
			}
			
			?>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade " id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Edit an Organisation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="edor" method="post">
			<div class="form-group">
				<select class="form-control" required id="organi"  name="organi" onchange="orgsub()">
					<option value="">Organisation</option>
					<?php
						$result = mysqli_query($con, "select * from organizations order by name");
						while($row=mysqli_fetch_row($result))
							echo '<option multiple value='.$row[0].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
		  </form>
      </div>
    </div>
  </div>
</div>

		  <?php
		        if(isset($_POST['organi']))
		          {  $_SESSION['organi']=$_POST['organi'];
		             echo "<meta http-equiv=\"refresh\" content=\"0\" />";
		          }
		        
			
			    
			?>



<!-- Modal -->
<div class="modal fade " id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Delete an Organisation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method = "post">
			<div class="form-group">
				<select class="form-control" required  name="organ">
					<option value="">Organisation</option>
					<?php
						$result = mysqli_query($con, "select * from organizations order by name");
						while($row=mysqli_fetch_row($result))
							echo '<option multiple value='.$row[0].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
			<div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-danger" style="" >  Delete</button>  </div>
		  </form>
		  <?php
			
				if(!empty($_POST['organ'])){
				$cate=$_POST['organ'];
				$result=mysqli_query($con,"delete from `organizations` where name like \"$cate%\"");
				
				$_POST['organ']='';
				$_SESSION['f']=3;
				
				echo "<meta http-equiv='refresh' content='0'/>"; 
				}
			?>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" style="color:white;" id="exampleModalLabel">Add a Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method = "post">
			<div class="form-group">
				<select class="form-control" name="pos" required id="pos">
					<option value="">Position</option>
					<option value="Lead">Lead</option>
					<option value="Intern">Intern</option>
				</select>
			</div>
			
			
		<div class="form-group"><input type = "text" id="domain" name = "domain" class  = "form-control" required placeholder ="Domain(eg.- Web Development)" style="border:2% !important; border-style:solid" multiple></div>
			
         <div class="form-group">
				<select class="form-control" required id="dep" name="type">
					<option value="">Department</option>
					<?php
						$result = mysqli_query($con, "select * from departments order by name");
						while($row=mysqli_fetch_row($result))
							echo '<option value='.$row[1].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
			
			<div class="form-group">
				<select class="form-control" required id="org" name="org">
					<option value="">Organisation</option>
					<?php
						$result = mysqli_query($con, "select * from organizations order by name");
						while($row=mysqli_fetch_row($result))
							echo '<option multiple value='.$row[0].'>'.$row[0].'</option>';
					?>
				</select>
			</div>
			
			
			<div class="form-group">
				<select class="form-control" name="duration" required id="duration">
					<option value="">Duration</option>
					<option value="1">1 Months</option>
                    <option value="2">2 Months</option>
					<option value="3">3 Months</option>
					<option value=">6">6 Months</option>
				</select>
			</div>
			
			
			<div class="form-group">
				<select class="form-control" name="exp" required id="exp">
					<option value="">Experience Required</option>
					<option value="0-12 Weeks">0-12 Weeks</option>
                    <option value="12-24 Weeks">12-24 Weeks</option>
					<option value="24-48 Weeks">24-48 Weeks</option>
					<option value=">48 Weeks">>48 Weeks</option>
				</select>
			</div>
         		 
		  
		  <div class="form-group"><textarea name = "description" class  = "form-control" style="border:2% !important; border-style:solid" placeholder ="Job Details(Min 100 characters)" id="des" required></textarea></div>
		  
		  
		<div class="form-group"><input type = "number" name = "count" class  = "form-control" required placeholder ="Number of vacancies" min="1" max="10" style="border:2% !important; border-style:solid" id="cou"></div>
		  
		  
		  
		<div class="form-group"><input type = "text" multiple name = "sti" class  = "form-control" required placeholder ="Stipend" style="border:2% !important; border-style:solid" id="sti"></div>
		  
		  <div class="form-group"><textarea name = "add" class  = "form-control" style="border:2% !important; border-style:solid" placeholder ="Additional Details"></textarea></div>
		  
		  
		  <div class="ml-auto mr-auto" align="right"><button type = "submit" class = "btn btn-primary" id="register" style="background:#29AB87;" disabled>  Submit</button>  </div>
		  </form>
		  
		  <?php
			
				if(isset($_POST['count'])){
				    
				$pos=$_POST['pos'];   
				$dom=$_POST['domain']; 
				$cat=$_POST['type'];
				$dep=mysqli_fetch_row(mysqli_query($con, "select name from `departments` where code='$cat'"))[0];
				$result = mysqli_fetch_row(mysqli_query($con, "select id from `jobs` where id like '%$cat%' order by time desc"))[0];
				$result=(int)explode($cat,$result)[1];
				$org=$_POST['org'];
				$exp=$_POST['exp'];
				$des=$_POST['description'];
				$count=$_POST['count'];
				$addd=$_POST['add'];
				$sti=$_POST['sti'];
				$dura=$_POST['duration'];
				
				$id='CBI'.strval(date("Y")).$cat.strval($result+1);
				$result=mysqli_query($con,"insert into `jobs` (pos,domain,department,org,exp,description,count,addd,id,stip,time,period) values('$pos','$dom','$dep',\"$org\",'$exp','$des','$count','$addd','$id','$sti',now(),$dura)");
				$_SESSION['f']=13;
				echo "<meta http-equiv=\"refresh\" content=\"0;URL='./jobman.php'\" />"; 
				}
    			
?>
		  
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Import Jobs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<a href="./Book.csv" class="btn " style="color:#38b0de; background:rgb(0,0,0,0);" download="Sample.csv">Download Sample</a>
    
<form method="post" enctype='multipart/form-data'>
    
    <input type = "file" name = "fil" class  = "form-control"  placeholder ="Upload a File" required><br>
	<button type = "submit" name="submitfile" class = "btn btn-primary" style="background:#29AB87;">  Submit</button>	  
</form>
</div>
    </div>
  </div>
</div>

<?php
 
            if(!empty($_FILES['fil'])){
    			$file_name  = $_FILES['fil']['name'];
    			$file_type = $_FILES['fil']['type'];
    			$file_size = $_FILES['fil']['size'];
    			$file_tem_Loc = $_FILES['fil']['tmp_name'];
    			$ext=strtolower(end(explode(".",$file_name)));
    			if ($ext!="csv") {
    			    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="padding-top:1%; padding- left:1%; padding-right:1%; transition:opacity 1s ease;" id="qwe2">
  <strong>Only .csv files are allowed</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                }
                else{
                    if (($h = fopen($file_tem_Loc , "r")) !== FALSE) 
                    {
                        $data = fgetcsv($h, 2000, ",");
                      // Convert each line into the local $data variable
                      while (($data = fgetcsv($h, 2000, ",")) !== FALSE) 
                      {		
                        $pos=$data[0];   
        				$dom=$data[1]; 
        				$cat=$data[2];
        				$dep=mysqli_fetch_row(mysqli_query($con, "select name from `departments` where code='$cat'"))[0];
        				$result = mysqli_fetch_row(mysqli_query($con, "select id from `jobs` where id like '%$cat%' order by time desc"))[0];
        				$result=(int)explode($cat,$result)[1];
        				$org=$data[3];
        				$exp=$data[4];
        				$des=$data[5];
        				$count=$data[6];
        				$addd=$data[7];
        				$sti=$data[8];
        				$dura=$data[9];
        				
        				$id='CBI'.strval(date("Y")).$cat.strval($result+1);
        				$result=mysqli_query($con,"insert into `jobs` (pos,domain,department,org,exp,description,count,addd,id,stip,time,period) values('$pos','$dom','$dep',\"$org\",'$exp','$des','$count','$addd','$id','$sti',now(),$dura)");
                      }
                        fclose($h);
                        $_SESSION['f']=43;
        				echo "<meta http-equiv=\"refresh\" content=\"0;URL='./jobman.php'\" />";
                    }
                    /*$cond=<<<eof
                            LOAD DATA LOCAL INFILE '$file_tem_Loc' INTO TABLE jobs FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' (pos,domain,department,org,exp,description,count,addd,id)
eof;
                    $result=mysqli_query($con,$cond);
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL='./jobman.php'\" />";*/
                }
            }
?>






<div class="container" style="margin-top:2.5%;">
    <div class="row">
        <div class="panel panel-primary filterable w-100">
            <div class = "row justify-content-center">
        <nav  aria-label="Page navigation">
        <ul class="pagination">
          <li class = "page-item">
            <a class = "page-link" href="allusers.php?page=<?= $Previous; ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo; </span>
            </a>
          </li>
          <?php for($i = 1; $i<= $pages; $i++) : 
			if($i!=$page)
				echo '<li class = "page-item "><a class = "page-link" href="allusers.php?page='.$i.'">'.$i.'</a></li>';
			else 
				echo '<li class = "page-item active"><a class = "page-link" href="allusers.php?page='.$i.'">'.$i.'</a></li>';
		   endfor; ?>
          <li class = "page-item">
            <a class = "page-link" href="allusers.php?page=<?= $Next; ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      </div>
            <div class="panel-heading">
                <div class="pull-right">
                    <button class="btn btn-xs btn-filter" style="background:#38b0de;color:white;"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table" style="width:100%;">
                <thead>
                    <tr class="filters" style="background:#29ab87;">
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty" placeholder="Sno" disabled></th>
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty"  placeholder="Name" disabled></th>
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty" placeholder="Href" disabled></th>
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty" placeholder="Current/Last" disabled></th>
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty" placeholder="E-mail" disabled></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $x=1;
                while($row=mysqli_fetch_row($aresult)){
					$email=mysqli_fetch_row(mysqli_query($con,"Select * from shadows where href='$row[2]'"))[1];
					$resume=mysqli_fetch_row(mysqli_query($con,"Select * from applications where username='$row[2]' and status='Hired' order by beg desc"));
					$job=mysqli_fetch_row(mysqli_query($con,"Select * from jobs where id='".$resume[1]."'"));
					$org=mysqli_fetch_row(mysqli_query($con,"Select * from organizations where name like '$job[3]%'"));
					
                    echo'<tr>
                        <td>'.($start+$x).'</td>
                        <td><a style="color:#38b0de;text-decoration:none;" target="_blank" title="View Profile" href="./profile.php?user='.$row[2].'">'.$row[0].' '.$row[1].'</a></td>
                        <td><a style="color:#38b0de;text-decoration:none;" target="_blank" title="View Profile" href="./profile.php?user='.$row[2].'">'.$row[2].'</a></td>';
                        if($resume!=null && $resume[8]==null)
						{
							echo'<td>Current: '.$job[1].' '.$job[0].' at '.$org[0].'</td>';
						}
						else if($resume!=null && $resume[8]!=null)
						{
							echo'<td>Last: '.$job[1].' '.$job[0].' at '.$org[0].'</td>';
						}
						else if($resume==null)
						{
							echo'<td>Current: None</td>';
						}	
                        echo'<td><a href="mailto:'.$email.'" style="margin-top:-2%; font-size:170%" class="ace ace1" target="_blank"><i class="fa fa-at icon"></i></a></td>
                    </tr>';
                    $x=$x+1;
                }
                ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>






















	
	<div style=" margin-top:2%; display:none;" class="offset-1 col-10">
	<?php
			$result = mysqli_query($con, "select * from applications order by time desc");
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
				$email = 'jobseekingportal@gmail.com';
				$password = 'jobseeker123';
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
				$mail->SetFrom("jobseekingportal@gmail.com.com","Umang");
    
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
				$email = 'jobseekingportal@gmail.com';
				$password = 'jobseeker123';
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
				//mail( $to,"Job Application", "Sorry!! You have not been selected for the job.");
			}
			if (isset($_POST['test'])) {
				selection($_POST['test']);}
			else if (isset($_POST['test1'])) {
				rejection($_POST['test1']);}
	?>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<script>


/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
    



$('#pos, #domain, #dep, #org, #exp,#des, #cou,#sti').bind('keyup', function() {
    if($("#pos").val() != '' && $("#domain").val() != '' && $("#dep").val() != '' && $("#org").val() != '' && $("#exp").val() != '' && ($("#des").val()).length >= 100 && $("#cou").val() != '' && $("#sti").val() != '') $('#register').removeAttr('disabled');
});


$('#pas, #cpas').bind('keyup', function() {
    if($("#pas").val() == $("#cpas").val())
        $('#ur').removeAttr('disabled');
    else
        $('#ur').attr('disabled','disabled');
});

window.setTimeout(function() {
    document.getElementById("qwe2").style.opacity=0;
}, 2000);


window.setTimeout(function() {
    document.getElementById("qwe2").style.display="none";
}, 2500);

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
       window.location.href="./logout.php";
    }, 250); 
  }
}

function orgsub(){
    $('#edor').submit();
}



function sub() {
  // Declare variables
  var input, filter,f=0, table, tr, td, i, txtValue;
  input = document.getElementById("search1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
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


function sub2() {
  // Declare variables
  var input, filter,f=0, table, tr, td, i, txtValue;
  input = document.getElementById("search2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
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
    document.getElementById("nrf2").style.display="";
  else
    document.getElementById("nrf2").style.display="none";

}


$(document).ready(function() {
    setTimeout(function(){
  $('#exampleModal4').modal('show');
},500)});
</script>
</body>
</html>