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


</style>
<body style="background-color:#FFFFFF; " onload="dis()">
<div align="center" class="row" style="width:100%;">
<div class="col-3" align="left" style="margin-top:-7%; padding-left:2% ">
    <img src="./images/logo.png" style="heigth:90%; width:90%;">
</div> 
<?php
include('db.php');
include ('authlogin.php');
session_start();

if($_SESSION['f']==10){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#ab0505; opacity:1; color:white;" >
      Job successfully deleted.
      
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

else if($_SESSION['f']==11){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#38b0de; opacity:1; color:white;" >
      Job successfully edited.
      
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


else if($_SESSION['f']==13){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29ab87; opacity:1; color:white;" >
      Job successfully added.
      
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


else if($_SESSION['f']==43){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#29ab87; opacity:1; color:white;" >
      Jobs successfully imported.
      
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


$job = isset($_GET['job']) ? $_GET['job'] : null;
if(!empty($job))
$_SESSION['filtercheck']=1

?>
</div>
<?php
$_SESSION['f']=1;
?>
<br><br>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary" style="margin-top:-10%; background:#38b0de !important;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
    <ul class="navbar-nav justify-content-center" style="width:100%;" >
      
      <li class="nav-item " style="margin-left:10%;">
         <button type="button" class="btn " onclick="window.location.href='app.php'" style="background:rgb(0,0,0,0); color:white;">
  Back to Dashboard
</button>
      </li>
      
      <li class="nav-item " style="margin-left:10%;">
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
         <form method="post" action="jobman.php" style="margin-bottom:0;">
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
    </ul>
  </div>
</nav>



<!-- Modal -->
<div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Filters</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
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
						$result = mysqli_query($con, "select * from departments order by name");
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
		  
		  <div class="ml-auto mr-auto" align="right"><input type = "submit" class = "btn btn-primary" id="register" style="background:#29AB87;" name="filtersubmit" value="Submit" disabled>  </div>
		  </form>
		  
      </div>
    </div>
  </div>
</div>


	
	<div style=" margin-top:2%;" class="offset-1 col-10">
	    <table id="myTable" style="width:100%;">
	<?php
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
	        if(!empty($job)){
		        $q .= " AND id='".$job."'";
	        }
	        if(!empty($_SESSION['filterdep'])){
	            $d=mysqli_fetch_row(mysqli_query($con, "select name from `departments` where code='".$_SESSION['filterdep']."'"))[0];
	            $q .= " AND department='".$d."'";
	        }
	        
	        if(!empty($_SESSION['filterorg'])){
		        $q .= " AND org='".$_SESSION['filterorg']."'";
	        }
	        $q=$q." order by time desc";
	        $results = mysqli_query($con, $q);
	        if(mysqli_num_rows($results)==0){
		    echo '<div align="center">
		    
		    
		    No Results Found<br><br>
		    
		    <span style="color:grey;">We can\'t find any item matching<br>your search</span>
		    
		    </div>';
		}
			while($row=mysqli_fetch_row($results)){
			    $x=mysqli_fetch_array(mysqli_query($con, "select * from `organizations` where name like \"%".$row['3']."%\""));
				if(1==1){
				if($row['6']!=0)
					echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#38b0de; margin-left:85%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>';
				else
					echo'<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%;  display: inline-block; padding:.4% 1% 1% 1% ;">
					<span style="color:white;background:#29AB87; margin-left:74%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">Position Filled</span>
					<span style="color:white;background:#38b0de; margin-left:1%;padding:0.5% 1%; border-radius: 0 0 8% 8%; box-shadow:2px 5px 2px grey">'.$row['8'].'</span>';
					
					echo'		<h4>'.$row['0'].'-'.$row['1'].'</h4>
							<h5 style="color:#38b0de !important;font-weight: bold; margin-top:1%;"><a href="'.$x[2].'" style="text-decoration:none; color:#38b0de !important" target="_blank">'.$x[0].'</a></h5><br>
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
      <div class="modal-body" style="word-wrap: break-word; text-align:justify;">
        <strong>About <a href="'.$x[2].'" style="text-decoration:none; color:black;" target="_blank">'.$x[0].'</a>:</strong><br>
        <span style=" text-align:justify;">'.$x[1].'</span><br>
        
        <strong>About the Job:</strong><br>
        <span  style="text-align:justify;">'.$row[5].'</span><br>
        <span Style="color:red; text-align:justify;">'.$row[7].'</span>
        
      </div>
	  <div class="modal-footer">
		<a class="btn btn-primary" style="color:white;" href="#exampleModalCenter1'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter1'.$row[8].'" data-dismiss="modal">Edit</a>
							
							
		<a class="btn btn-danger" style="color:white;" href="#exampleModalCenter'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter'.$row[8].'" data-dismiss="modal">Delete</a>
      </div></div>
    </div>
  </div>
							
							
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test1" class="btn btn-danger" value="'.$row[8].'">Yes</button>
	  </form>
	  <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" style="margin-right:1%;">
          No
        </button>
      </div></div>
    </div>
  </div>
  
  
  
  <div class="modal fade" id="exampleModalCenter1'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Edit job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
	  <div class="modal-body" style="max-height: 85vh;overflow-y:auto;">
		<form method="post">
			<div class="form-group col-12">
				<select class="form-control" name="pos" required id="pos" value="'.$row['0'].'">';
					
						$result = mysqli_query($con, "select * from posi");
						while($rows=mysqli_fetch_row($result))
						{
						    if($rows[0]==$row['0'])
							echo '<option multiple value='.$rows[0].' selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value='.$rows[0].' >'.$rows[0].'</option>';
						}
				echo '</select>
			</div>
			
			
		<div class="form-group col-12"><input type = "text" id="domain" name = "domain" class  = "form-control" required  style="border:2% !important; border-style:solid" multiple value="'.$row['1'].'"></div>
			
         <div class="form-group col-12">
				<select class="form-control" required id="dep" name="type" value="'.$row['2'].'">';
					$result = mysqli_query($con, "select * from departments order by name");
						while($rows=mysqli_fetch_row($result))
						{
						    if($rows[0]==$row['2'])
							echo '<option multiple value='.$rows[1].' selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value='.$rows[1].' >'.$rows[0].'</option>';
						}	
				echo'</select>
			</div>
			
			<div class="form-group col-12">
				<select class="form-control" required id="org" name="org">';
					
						$result = mysqli_query($con, "select * from organizations order by name");
						while($rows=mysqli_fetch_row($result))
						{
						    if(explode(" ",$rows[0])[0]==$row['3'])
							echo '<option multiple value='.$rows[0].' selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value='.$rows[0].' >'.$rows[0].'</option>';
						}
				echo '</select>
			</div>
			
			
			<div class="form-group col-12">
				<select class="form-control" name="duration" required id="duration" value="'.$row['11'].'">';
					
						foreach(array(1,2,3,6) as $rows)
						{
						    if($rows==$row[11])
							echo '<option multiple value="'.$rows.'" selected>'.$rows.'</option>';
							else
							
							echo '<option multiple value="'.$rows.'">'.$rows.'</option>';
						}
				echo '</select>
			</div>
			
			<div class="form-group col-12">
				<select class="form-control" name="exp" required id="exp" value="'.$row['4'].'">';
					
						$result = mysqli_query($con, "select * from experience");
						while($rows=mysqli_fetch_row($result))
						{
						    if($rows[0]==$row[4])
							echo '<option multiple value="'.$rows[0].'" selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value="'.$rows[0].'">'.$rows[0].'</option>';
						}
				echo '</select>
			</div>
         		 
		  
		  <div class="form-group col-12"><textarea name = "description" class  = "form-control" style="border:2% !important; border-style:solid" id="des" required placeholder="Minimum 100 words...">'.$row['5'].'</textarea></div>
		  
		  
		<div class="form-group col-12"><input type = "number" name = "count" class  = "form-control" required  min="0" max="10" style="border:2% !important; border-style:solid" id="cou" value="'.$row['6'].'"></div>
		  
		  <div class="form-group col-12"><input type = "text" name = "sti" class  = "form-control" required style="border:2% !important; border-style:solid" id="sti" value="'.$row['9'].'"></div>
		  
		  <div class="form-group col-12"><textarea name = "add" class  = "form-control" style="border:2% !important; border-style:solid" placeholder="Additional Details" >'.$row['7'].'</textarea></div>
		  
			<button name="test2" type="submit" style="margin-left:66%;" class="btn btn-Success" value="'.$row[8].'">Save</button>
	  </form>
	  <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" style="margin-right:1%;margin-left:1%;"">
          Cancel
        </button>
      </div></div>
    </div>
  </div>';
				}else{
					echo '<tr style=""><td class="card" style="width:100%; word-wrap: break-word; margin-bottom:2%; padding:1% 1% 1% 1% ;">
					        
							<h4>'.$row['2'].', '.$x.'</h4><br>
							'.$row['0'].', '.$row['1'].'<br><br>
							<p>'.$row['5'].' <br><br> <span style="color:red">'.$row['7'].'</span></p><br><br>
							Experience required: '.$row['4'].'<br>
							Vacancy: Not Vacant<br>
							Positions available: '.$row['6'].'<br>
							Job Id: '.$row[8].'<br>
							<div class="modal-footer">
								<a class="btn btn-primary" style="color:white;" href="#exampleModalCenter1'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter1'.$row[8].'">Edit</a>
							
							
								<a class="btn btn-danger" style="color:white;" href="#exampleModalCenter'.$row[8].'" data-toggle="modal" data-target="#exampleModalCenter'.$row[8].'">Delete</a>
								
							
							</div>
							</td></tr>
							
							<div class="modal fade" id="exampleModalCenter'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
	  <div class="modal-footer">
		<form method="post">
			<button name="test1" class="btn btn-danger" value="'.$row[8].'">Yes</button>
	  </form>
	  <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" style="margin-right:1%;">
          No
        </button>
      </div></div>
    </div>
  </div>
  
 
 
  <div class="modal fade" id="exampleModalCenter1'.$row[8].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle'.$row[8].'" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#38b0de;">
        <h5 class="modal-title" id="exampleModalCenterTitle"style="color:white;">Edit job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"style="color:white;">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
		<form method="post">
			<div class="form-group col-12">
					<select class="form-control" name="pos" required id="pos" value="'.$row['0'].'">';
					
						$result = mysqli_query($con, "select * from posi");
						while($rows=mysqli_fetch_row($result))
						{
						    if($rows[0]==$row['0'])
							echo '<option multiple value='.$rows[0].' selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value='.$rows[0].' >'.$rows[0].'</option>';
						}
				echo '</select>
			</div><br>
			
			
		<div class="form-group col-12"><input type = "text" id="domain" name = "domain" class  = "form-control" required  style="border:2% !important; border-style:solid" multiple value="'.$row['1'].'"></div><br>
			
         <div class="form-group col-12">
				<select class="form-control" required id="dep" name="type" value="'.$row['2'].'">';
					$result = mysqli_query($con, "select * from departments order by name");
					while($rows=mysqli_fetch_row($result))
						{
						    if($rows[0]==$row['2'])
							echo '<option multiple value='.$rows[1].' selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value='.$rows[1].' >'.$rows[0].'</option>';
						}	
				echo'</select>
			</div><br>
			
			<div class="form-group col-12">
				<select class="form-control" required id="org" name="org" value="'.$row['3'].'">';
					
						$result = mysqli_query($con, "select * from organizations order by name");
						
						$result = mysqli_query($con, "select * from organizations order by name");
						while($rows=mysqli_fetch_row($result))
						{
						    if(explode(" ",$rows[0])[0]==$row['3'])
							echo '<option multiple value='.$rows[0].' selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value='.$rows[0].' >'.$rows[0].'</option>';
						}
					
				echo '</select>
			</div>
			<br>
			<div class="form-group col-12">
				<select class="form-control" name="exp" required id="exp" value="'.$row['4'].'">';
					
						$result = mysqli_query($con, "select * from experience");
						while($rows=mysqli_fetch_row($result))
						{
						    if($rows[0]==$row[4])
							echo '<option multiple value="'.$rows[0].'" selected>'.$rows[0].'</option>';
							else
							
							echo '<option multiple value="'.$rows[0].'">'.$rows[0].'</option>';
						}
				echo '</select>
			</div>
         		 <br>
		  
		  <div class="form-group col-12"><textarea name = "description" class  = "form-control" style="border:2% !important; border-style:solid" id="des" required placeholder="'.$row['5'].'">'.$row['5'].'</textarea></div>
		  <br>
		  
		<div class="form-group col-12"><input type = "number" name = "count" class  = "form-control" required  min="0" max="10" style="border:2% !important; border-style:solid" id="cou" value="'.$row['6'].'"></div><br>
		  
		  <div class="form-group col-12"><textarea name = "add" class  = "form-control" style="border:2% !important; border-style:solid" placeholder="Additional Details" >'.$row['7'].'</textarea></div>
		  <br>
			<button name="test2" class="btn btn-Success"  style="margin-left:66%;" type="submit" value="'.$row[8].'">Save</button>
	  </form>
	  <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" style="margin-right:1%;margin-left:1%;">
          Cancel
        </button>
      </div></div>
    </div>
  </div>';
				}
			}
			echo'</table>';
			
							

				if(isset($_POST['test1'])){
					deletee($_POST['test1']);}
				function deletee($id){
					include('db.php');
					$vac=mysqli_query($con,"delete from jobs where id=\"$id\"");
					$_SESSION['f']=10;
					header('location: jobman.php');
					echo "<meta http-equiv='refresh' content='0'>";
				}
				if(isset($_POST['test2'])){
					edit($_POST['test2']);}
				function edit($id){
					include('db.php');
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
				$result=mysqli_query($con,"Update `jobs` set pos='$pos',domain='$dom',department='$dep',org=\"$org\",exp='$exp',description='$des',count='$count',addd='$addd',stip='$sti',period=$dura where id=\"$id\"");
					$_SESSION['f']=11;
				header('location: jobman.php');
			    echo "<meta http-equiv='refresh' content='0'>";
				}
			
			
		?>
	</div>
	<div align="center" style="display:none;" id="nrf">
		    
		   
		    No Results Found<br><br>
		    
		    <span style="color:grey;">We can't find any item matching<br>your search</span>
		    
		    </div>
</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
$('#pos, #dep, #org').on('input', function() {
    if($("#pos").val() != '' || $("#dep").val() != '' || $("#org").val() != '') $('#register').removeAttr('disabled');
});

function sub() {
  // Declare variables
  var input, filter,f=0, table, tr, td, i, txtValue;
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
       window.location.href="./logout.php";
    }, 250); 
  }
}
</script>

</body>
</html>