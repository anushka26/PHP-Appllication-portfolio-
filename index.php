 <?php 

      include 'dbconfig.php';
	  

	    $sql = "SELECT * FROM  `details` where id=1";

		 
		$qur = mysql_query($sql,$connection);
		while($r = mysql_fetch_row($qur)){
			extract($r);
		 
							
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #8c9f9bb3;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: white; 
      color: #474e5d;
  }
  .bg-3 { 
      background-color: #474e5d; 
      color: #fff;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  
  .social-networks{
	text-align: center;
	padding-right:20px;
	}

.social-networks a{
    font-size: 50px;
    color: #8F818F;
    }

.social-networks a:hover{
	text-decoration: none;

}

.facebook:hover{
	color:#0077e2;
}

.linkedin:hover{
	color:#51ADD6;
}

.behance:hover{
	color: #00aced;
}

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><?php echo $r[1]." ".$r[2]?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About</a></li>
        <li><a href="#details">Education</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="edit.php">Edit Profile</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id="about" class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <?php echo '<center><img src="data:image/png;base64,'.base64_encode($r[3]).'" style=" margin-top:0px; height:340px;width:220px;"></center>';?>
  
  <h3><?php echo $r[4]?></h3>
  
</div>

<div id="details" class="container-fluid bg-2 ">
  
  <div class="row" style="margin:20px;">
	  
	  <div class="col-sm-6" >
		  <h3 class="margin text-center">Academic Qualifications</h3>
		  <ul>
		 

		<?php
				$sql2 = "SELECT * FROM  `academics`";

				 
				$qur2 = mysql_query($sql2,$connection);
				while($r2 = mysql_fetch_row($qur2)){
					extract($r2);
		?>


		  <?php echo "<li><h4>$r2[1]</h4>"?>
		  
			<table style="border=0;padding:10px; padding-bottom:30px">

			<tr>
			<td style="padding:10px;font-size:15px"><?php echo $r2[4]."(Year of Passing: ".$r2[2].")"; ?></td>
			<td style="padding:10px;font-size:15px"><?php echo "Percentage: ".$r2[3]."%";?></td>
			</tr>
			</table>
			</li>
				<?php } ?>
		  </ul>
	 </div>
	 
	 <div class="col-sm-6">
		  
		  <img class="img-responsive" style="margin:10px auto; height:300px;width:300px;" src="check.png">
	  </div>
  </div>
<div class="text-center">
  <a href="#project" class="btn btn-default btn-lg" style="background-color:black;color:white;margin:30px;" data-toggle="modal" data-target="#project">Projects</a><a href="#training" class="btn btn-default btn-lg"style="margin:30px;background-color:black;color:white;" data-toggle="modal" data-target="#training">Training</a><a href="#intern" class="btn btn-default btn-lg" style="margin:30px;background-color:black;color:white;" data-toggle="modal" data-target="#intern">Internship</a>
</div>

</div>

<!----Projects Modal---->
<div class="modal fade text-center" id="project" role="dialog" style="background-color:black; ">
    <div class="modal-dialog" >
    
      
      <div class="modal-content"  style="background-color:#657e83b3;">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
          <h4 class="modal-title" style="align:center">Projects</h4>
        </div>
        <div class="modal-body">
          <ul style="list-style:none">
		  <li><h3>CIBIL Score Calculator</h3>
		  <p>The project involves development in C language using file handling. It gives an estimation of users CIBIL Score based on several factors.</p>
		  </li>
		  <br>
		  <li><h3>Technical Analysis of Stocks</h3>
		  <p>The project involves development in java language. We used yahoo finance API to get stock prices. Project has been developed using JSP.</p>
		  </li>
		  </ul>
        </div>
        
      </div>
      
    </div>
  </div>
  
<!----Training Modal---->
<div class="modal fade text-center" id="training" role="dialog" style="background-color:black; ">
    <div class="modal-dialog" >
    
      
      <div class="modal-content"  style="background-color:#657e83b3;">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
          <h4 class="modal-title" style="align:center">Training</h4>
        </div>
        <div class="modal-body">
          <ul style="list-style:none">
		  <li>
		  <h3>Organization: MothersonSumi  Infotech & Designs Ltd., Noida</h3>
		  <p>training in ASP.NET(MVC) and worked on resource file generation tool.</p>
		  </li>
		  </ul>
        </div>
        
      </div>
      
    </div>
  </div>

<!----Internship Modal---->
<div class="modal fade text-center" id="intern" role="dialog" style="background-color:black; ">
    <div class="modal-dialog" >
    
      
      <div class="modal-content"  style="background-color:#657e83b3;">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
          <h4 class="modal-title" style="align:center">Internship</h4>
        </div>
        <div class="modal-body">
          <ul style="list-style:none">
		  <li>
		  <h3>Organization: Productivity Management Group, Gurgaon </h3>
		  <p>Involved in development of ERP system (Sales and Operation Module) using PHP, SQL, HTML, Bootstrap and CSS.</p>
		  </li>
		  </ul>
        </div>
        
      </div>
      
    </div>
  </div>



<div id="contact" class="container-fluid bg-3 text-center">    
  <h3 class="margin">Find Me Here</h3><br>
	  <div class="row">
			  <div class="col-sm-6">
				  <p align="center"><span class="glyphicon glyphicon-phone"></span><?php echo "+91  ".$r[6]?></p>
				  <p align="center"><span class="glyphicon glyphicon-envelope"></span> <?php echo $r[5]?></p>   	
			  </div>
			
		<div class="col-sm-6">
		 <div class="social-networks row" style="align:center">
				<div class="col-sm-2"> 
				  <p><a href="https://www.facebook.com/anushka.khattar" class="facebook"><i class="fa fa-facebook-official"></i></a></p>
				</div>
				<div class="col-sm-2"> 
				  <p><a href="https://www.linkedin.com/in/anushka-khattar-b3a848118/" class="linkedin"><i class="fa fa-linkedin"></i></a></p>
				</div>
				<div class="col-sm-2">
				  <p><a href="https://www.behance.net/anushka265dec8" class="behance"><i class="fa fa-behance"></i></a></p>
				</div>
			  </div>
	   </div>
    </div>
</div>

<footer class="container-fluid bg-4 text-center" style="padding:20px">
<p>Made by Anushka Khattar</p>
</footer>
</body>
</html>


<?php
		}
		mysql_close($connection);
?>