<!DOCTYPE html>
<?php
include 'dbconfig.php';

	    $sqll = "SELECT * FROM  `details` where id=1";

		 
		$qur = mysql_query($sqll,$connection);
		while($r = mysql_fetch_row($qur)){
			
		 extract($r);

?>

<html>
<head>
  <title>Edit Profile</title>
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
      color: #59636c;
	  background-color: #e6e6e6;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .form-style-1 {
    margin:10px auto;
    max-width: 500px;
    padding: 20px 12px 10px 20px;
 
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 .top .bottom input[type=checkbox], 
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
  </style>
  
  <body>
  <h3 class="text-center">Edit Profile<br><br>
  <a align=right" href="index.php">Home</a></h3>
  <div class="editform">
	
	<form action="" method="post" enctype="multipart/form-data">
	
	<ul class="form-style-1">
		<li>
			<label>Upload Image</label>
			<input type="file" name="field3" class="field-long" autocomplete="off"/>
		</li>
		<li>
			<input type="submit" name="imgsubmit" id="imgsubmit" value="Submit" />
		</li>		
	</ul>	

	<?php
	if(isset($_POST['imgsubmit']))
	{
		 
		 if(isset($_FILES['field3']['name']))
    {
	
	$get_content = file_get_contents($_FILES['field3']['tmp_name']);
	$escape = mysql_real_escape_string($get_content);
		
	
	$sql2="UPDATE `details` SET myimage='$escape' where id=1";
	
	if(mysql_query($sql2,$connection)){
		echo '<script>alert("Image Uploaded")</script>';
	}else{
		echo '<script>alert("Error")</script>';
	}
	}
	}
	?>
		
	<ul class="form-style-1">

		<li>
			<label>First Name</label>
			<input type="text" name="field1" class="field-long" autocomplete="off" placeholder="First Name"  value="<?php echo $r[1];?>"/>
		</li>
		
		<li>
			<label>Last Name </label>
			<input type="text" name="field2" class="field-long" autocomplete="off" value="<?php echo $r[2];?>" />
		</li>
		
				
		<li>
			<label>About</label>
			<textarea type="text" name="field4" class="field-long"  autocomplete="off"><?php echo $r[5];?></textarea>
		</li>
		
		<li>
			<label>Email </label>
			<input type="email" name="field5" class="field-long" autocomplete="off"  value="<?php echo $r[6];?>"/>
		</li>
	
		<li>
			<label>Contact </label>
			<input type="text" name="field6" class="field-long" autocomplete="off"  value="<?php echo $r[7];?>"/>
		</li>
		<li>
			<input type="submit" name="submit" id="submit" value="Submit" />
		</li>		
		</ul>
		<?php
		if(isset($_POST['submit']))
	    {	
            $_SESSION['fname']=$_POST['field1'];
			$_SESSION['lname']=$_POST['field2'];
    		$_SESSION['about']=$_POST['field4'];
			$_SESSION['email']=$_POST['field5'];
			$_SESSION['contact']=$_POST['field6'];
			
			
			      	
		    $sql="UPDATE `details` SET `fname`='".$_SESSION['fname']."',`lname`='".$_SESSION['lname']."',`about`='".$_SESSION['about']."',`email`='".$_SESSION['email']."',`contact`='".$_SESSION['contact']."' WHERE id=1";
			
    	  mysql_query($sql,$connection) or die(mysql_error());
		 
	
       	}
        ?>

		<ul class="form-style-1">
		<label style="margin-top:25px">Academic Details</label>
		<hr style="background-color: black; height:4px; width: 100%; margin-top: 0px;">
		<li>
			<label>Institution Name</label>
			<input type="text" name="field7" class="field-long"  autocomplete="off"/>
		</li>
		
		<li>
			<label>Year of Passing</label>
		    <input type="text" name="field8" class="field-long" autocomplete="off" />	
		</li>
		
     	
		
		<li>
			<label>Percentage</label>
			<input type="text" name="field10" class="field-long" autocomplete="off" />
		</li>
		
		<li>
			<label>Degree</label>
			<input type="text" name="field11" class="field-long" autocomplete="off"  />
		</li>

			
        <li>
			<input type="submit" name="acad_submit" id="acad_submit" value="Submit" />
		</li>		
		
	</ul>
	<?php
		if(isset($_POST['acad_submit']))
	    {	
            $_SESSION['institution']=$_POST['field7'];
			$_SESSION['year']=$_POST['field8'];
    		$_SESSION['percent']=$_POST['field10'];
			$_SESSION['degree']=$_POST['field11'];
			
			
			
			$sql="INSERT INTO `academics`(`institution`, `year`, `percentage`, `degree`) VALUES ('".$_SESSION['institution']."','".$_SESSION['year']."','".$_SESSION['percent']."','".$_SESSION['degree']."')";
      	
    	  mysql_query($sql,$connection) or die(mysql_error());
		 
	
       	}
        ?>
	</form>
 </div>

  </body>
  </html>
  <?php
		}
  ?>