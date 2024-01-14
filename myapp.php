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



.booty::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

.booty:disabled::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white !important;
  opacity: 1; /* Firefox */
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

else if($_SESSION['fu']==2){
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
      Successfully applied to '.$_SESSION['job'].'
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
    $_SESSION['job']=1;
    $_SESSION['fu']=1;
}


else if($_SESSION['fu']==3){
$s=(time()- strtotime($_SESSION['time']));
$h=(int)($s/3600);
$s=$s%3600;
$m=(int)($s/60);
$s=$s%60;
$res=mysqli_fetch_row(mysqli_query($con, "select * from usertable where href='".$_SESSION['email']."'"));

echo '
<div class="col-6 d-flex flex-column justify-content-center align-items-center" style="width:200% !important; margin-top:-7%;">

  <div class="toasta" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:#29AB87;transition:opacity 1s ease;" data-delay="5000" id="qwe">
    <div class="toast-header" style="width:100%;background-color:#ab0505; opacity:1; color:white;" >
      You have already applied to '.$_SESSION['job'].'
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
    $_SESSION['job']=1;
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



$limit = 15;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$s = "SELECT * FROM applications where username='".$_SESSION['email']."' order by time desc LIMIT $start, $limit";
$aresult = mysqli_query($con,$s);

$ap = "SELECT * FROM applications where username='".$_SESSION['email']."' order by time desc";
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


$color=array();
$aayega=mysqli_query($con,"select * from statuses");
while($row=mysqli_fetch_row($aayega))
    {
        $color["$row[0]"]= "$row[1]";
    }



?>

</div>
<br>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary" style="margin-top:-8%; background:#38b0de !important;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
    <ul class="navbar-nav justify-content-center" style="width:100%;" >
      <li class="nav-item">
      <a class="btn" style="color:white; background:rgb(0,0,0,0);" href="./user_home.php">Back to Dashboard</a>
      </li>
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





<div class="container" style="margin-top:2.5%;">
    <div class="row">
        <div class="panel panel-primary filterable w-100">
            <div class = "row justify-content-center">
        <nav  aria-label="Page navigation">
        <ul class="pagination">
          <li class = "page-item">
            <a class = "page-link" href="myapp.php?page=<?= $Previous; ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo; </span>
            </a>
          </li>
          <?php for($i = 1; $i<= $pages; $i++) : 
			if($i!=$page)
				echo '<li class = "page-item "><a class = "page-link" href="myapp.php?page='.$i.'">'.$i.'</a></li>';
			else 
				echo '<li class = "page-item active"><a class = "page-link" href="myapp.php?page='.$i.'">'.$i.'</a></li>';
		   endfor; ?>
          <li class = "page-item">
            <a class = "page-link" href="myapp.php?page=<?= $Next; ?>" aria-label="Next">
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
            <center>
            <table class="table" style="width:100%;">
                <thead>
                    <tr class="filters" style="background:#29ab87;">
                        <th></th>
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty"  placeholder="Job ID" disabled></th>
                        <th><input type="text"  style="background:rgb(0,0,0,0); color:white;" class="form-control booty" placeholder="Status" disabled></th>
                        <th><input type="text" style="background:rgb(0,0,0,0); color:white;" class="form-control booty" placeholder="Applied On" disabled></th>
                        <th></th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $x=1;
                while($row=mysqli_fetch_row($aresult)){
                    echo'<tr>
                        <td>&nbsp</td>
                        <td><a style="color:#38b0de;text-decoration:none;" target="_blank" href="user_home.php?job='.$row[1].'">'.$row[1].'</a></td>
                        <td style="color:#'.$color[$row[2]].'">'.$row[2].'</td>
                        <td>'.$row[3].'</td>';
                    if(file_exists("./offerletters/".$row[4].".pdf") && $row[2]=='Hired'){
                        echo'<td><a class="btn btn-success" href="./offerletters/'.$row[4].'.pdf" download="'.$row[0].'_'.$row[1].'_offerLetter.pdf">Download Offer Letter</a></td>';
						if(file_exists("./LOR/".$row[4].".pdf"))
							echo '<td><a class="btn btn-success" href="./LOR/'.$row[4].'.pdf" download="'.$row[0].'_'.$row[1].'_LOR.pdf">Download LOR</a></td>';
						else
							echo'<td></td>';
					}
                    else if($row[2]=='Shortlisted'){
                        echo'<td><a class="btn btn-warning" target="_blank" href="https://codebinaryinitiatives.setmore.com/" >Schedule an Appointment</a></td>';
						if($row[5]==0)
							echo '<td><form method="post" id="myForm"><button type="submit" onclick="yebhikarle()" name="ptest" class="btn" style="background-color:#800080; color:white" value="'.$row[4].'" title="Can be clicked only once">Personality Test</button></form></td>';
						else
							echo '<td><a class="btn disabled" style="background-color:#800080; color:white" title="Can be clicked only once" href="" >Personality Test</a></td>';
                    }
                    else
                        echo'<td></td><td></td>';
                    echo'</tr>';
                }
                 if(isset($_POST['ptest'])){ 
							$a=$_POST['ptest'];
							$axssssssssxas=mysqli_query($con,"Update applications set test=1 where id=$a");
							echo "<meta http-equiv='refresh' content='0'/>"; 
							
					} 
                
                
                
                ?>
                </tbody>
            </table>
           </center> 
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>






<script>
function yebhikarle(){
window.open('https://codebinary.in/personality_test/', '_blank');
document.getElementById("myForm").submit();
}


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
</body>

</html>