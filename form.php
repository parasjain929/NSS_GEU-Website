<?php
$message="";
$key=0;
$user = "localhost";
$dbuser = "id6526641_root";
$dbpass = "MYhome750";
$db = "id6526641_nss";
// Create connection
$conn = new mysqli($user, $dbuser, $dbpass, $db);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_erro);
}
if(isset($_POST['submit']))
{
// Grab User submitted information
$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$father_name = $_POST["father_name"];
$course = $_POST["course"];
$branch = $_POST["branch"];
$year = $_POST["year"];
$contact = $_POST["contact_no"];
$email = $_POST["email"];
$key="1";

$sql = "INSERT INTO register (f_name,l_name,father_name,course,branch,year,email,contact) VALUES ('$f_name','$l_name','$father_name','$course','$branch',$year,'$email',$contact)";
if ($conn->query($sql) === TRUE)
    {
    $message= '<center><h1>You successfully registered </h1><h3>Contact NSS Cell for further information and you will receive E-mail within 24 hrs.</h3> Please Verify Confirmation E-mail when you got.</a><br>Click to <a href="index.php">go back</a></center>';

}
else
{
    $message= '<h3><center>Sorry, <i>We are available now...Wait for further information</i>. <a href="form.php">Please try again</a>.<center></h3>';
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="icon" href="img/logo.png">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
        <title>NSS GEU Join Us</title>
    
    <style>
        #success_message{ display: none;}
        body{
            background-color: white;
        }
        
    footer {
    position:;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    background-color:#eaeaea;
    color: black;
    text-align: center;
    height:16%;
    width: 100%;            
        }
         .f2{
        margin-left:3%;
    }
    .f2:hover{
        transition-delay: 0.1s;
        padding-top: 7.5px;
        padding-bottom: 7.5px;
        color:darkblue;
    }
        .container{
            margin-top:50px;
        }
        .message:focus{
            height:80%;
display:none;
}
        </style>   
    </head> 
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container" style="padding-left:10px;display: block;margin-top:0px;">
       <img  src="img/geu-logo.svg" alt="logo" style="border-radius:10%; height:70px;" > 
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:#ffc107; float:right;">&nbsp;<b>National Service Scheme</b> </a>
       <img  src="img/logo.png" alt="logo" style="border-radius: 50%; width:5%;height:5%; float:right" >
      </div>
    </nav>
    <p id="demo"></p>
    <div class="container">

    <!--Form start-->
    <form class="well form-horizontal" action="form.php" method="post"  id="form1" style="margin-bottom:20px;">
<fieldset>
<div class="message"><?php echo $message; ?></div>
<?php
         if ($key==0)
         {?>
<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name<sup>*</sup></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name<sup>*</sup></label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>

    <div class="form-group">
  <label class="col-md-4 control-label" >Father Name<sup>*</sup></label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="father_name" placeholder="Father Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>
    
    
     <div class="form-group"> 
      <label class="col-md-4 control-label">Course<sup>*</sup></label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="course" class="form-control selectpicker" required>
      <option disabled placeholder="Select your Branch">Select your Branch</option>
      <option value="BBA" selected>BBA</option>
      <option value="B.Com">B.Com</option>
      <option value="B.Sc.">B.Sc.</option>
      <option value="Bio.Tech">Bio.Tech</option>
      <option value="B.Tech">B.Tech</option>
    </select>
  </div>
</div>
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label">Branch</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <input name="branch" placeholder="Branch" class="form-control" type="text" required>
    </div>
  </div>
</div>
    
    <div class="form-group"> 
  <label class="col-md-4 control-label">Year <sup>*</sup></label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="year" class="form-control selectpicker" required>
    <option disabled placeholder="Select your year" selected="false">Select your year</option> 
    <option value="1">1</option>
      <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
  </div>
</div>
</div>
    
    <!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.<sup>*</sup></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="+91" class="form-control" type="number" required>
    </div>
  </div>
</div>
    
<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail<sup>*</sup></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-warning"  form="form1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>
</div>
<?php
         }
    ?>
</fieldset>
</form>

</div> <!-- /.container -->       
        
     <footer style="margin-top:10px;">
         
      <div>
          <hr width="100%">
        <div class="row">
          <div class="col-md-2 f2">
            <a href="" target="_blank"><img src="https://www.reliablecounter.com/count.php?page=Sss.com10767047&digit=style/plain/5/&reloads=1" alt="website traffic counter" title="website traffic counter" border="0"></a><br /><a href="http://www.reliablecounter.com/es/" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com//geunss" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 f2">
            <span class="copyright"><h5>Copyright &copy; NSS GRAPHIC ERA (DEEMED TO BE UNIVERSITY) DEHRADUN</h5></span>
          </div>
          <div class="col-md-2 f2">
              <h6>Office: 2<sup>nd</sup> Floor,<br>Above B.tech Library<br>GEU Campus</h6>
            </div>
              <div class="col-md-2 f2"> <h6>For Site Issues<br>
          Paras Jain<br>
            +91-8439267147<br>
                  Himanshu Agarwal<br>
                  +91-8696706060
                  </h6>
            </div>
        </div>
      </div>
    </footer>
    </body>
</html>
