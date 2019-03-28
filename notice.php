<!DOCTYPE html>
<html>
<head>
	<title>NSS GEU NOTICES</title>
      <link rel="icon" href="img/logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NSS GEU</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
<style>
    .head{
        text-align:right;
        color:whitesmoke;
        font-family:serif;
    }
    footer {
    position:static;
    bottom: 0;
    width: 100%;
    background-color:#eaeaea;
    color: black;
    text-align: center;
            height:16%;
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
    .image2{
        border-radius: 50%;
        width:5%;height:5%; 
        float:right;
    }
    .txt1{
        display: none;
    }
    .img-responsive{
        height: 100px;        
        }
    @media (max-width:800px){
    .image_sectio img:first-child{
        display:none;
    }
    .image2{
        display:block;
        float:left;
        width:15%;
        height: 20%;
        margin-right:10px;
 
    }
    .txt{
        display:none;
        
    }
    .txt1{
        display: contents;
        color:#ffffff;
        font-size:30px;
    }
    .img-responsive{
        height: 50px;        
        }
    }
      </style>
    </head>
<body id="page-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black;">
       
      <div class="container image_sectio" style="padding-left:10px;display: block;">
          
       <img  src="img/geu-logo.svg" alt="logo" style="border-radius:10%; height:70px;" > 
          
          <span class="txt1"> GEU NSS</span>
             <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="float:right;margin-top:5px;background-color:#000000">
          
              <i class="fa fa-bars"></i>
        </button>
        
          <a class="navbar-brand js-scroll-trigger txt" href="#page-top" style="color:#ffc107; float:right;"><b>National Service Scheme</b> </a>
       
          <img  src="img/logo.png" alt="logo" class="image2" >
          
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="form.php">Join Us</a>
            </li>
                      </ul>
        </div>
      </div>
    </nav>
    
      <br>
      <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Notices</h2>
              <?php
$db_host = 'localhost'; // Server Name
$db_user = 'id6526641_root'; // Username
$db_pass = 'MYhome750'; // Password
$db_name = 'id6526641_nss'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql1 = 'SELECT * FROM notice';
$query1 = mysqli_query($conn, $sql1);
if (!$query1) {
	die ('SQL Error: ' . mysqli_error($conn));
}
	while ($row = mysqli_fetch_array($query1))
		{
	echo'<div class="container">
      <br>
        <h2 style="text-align: center; color: rgb(206, 33, 14)">'.$row[info].'</h2>
      <br>
      </div>
      <div class="container" style="box-shadow:0 3px 2px rgb(206, 33, 14);padding:50px;">
        <div class="row">
          <div class="col-md-10"><p>'.$row[detail].'</p></div>
          <div class="col-md-1 fn"><img src="img/text-lines.png" class="img-responsive center-block"> </div>
        </div>
        <div style="float:left;">Upload Date: '.date('d-m-Y', strtotime($row[date])).'</div>
      </div>';
    }
      ?>
      
            </div>
            </div>                                   
        </div>    
      </section>
          
    
      <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    
    
    <!-- Footer -->
     <footer>
         
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