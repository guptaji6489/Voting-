<?php
	 session_start()
	 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title></title>
</head>
<body >
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#"></a>
  <ul class="navbar-nav">
    <li class="nav-item">
     <h4><b> <a class="nav-link" href="logout.php" style="color: white">LOGOUT</a></b></h4>
    </li>
    <li class="nav-item">
     <h3><a class="nav-link" href="#" style="color: white; margin-left: 360px">Select any one Project to Vote</a></h3>
    </li>
     </ul>
</nav>
<img src="zz.jpg" width="100%">
<section style="background-image: url('xx.jpg');"><br><br>
	<h1 style="text-align: center;">PROJECTS TO VOTE</h1>
<br>

	<?php
		 		if(isset($_SESSION['uid']))
		 		{
					$server = "localhost";
				 $username = "root";
				 $password= "";
				 $database = "vote";
				 $conn = mysqli_connect($server, $username, $password, $database);
				 if (!$conn) {
					 die("connection failed:".mysqli_connect_error());
				 }
				 $sql ="SELECT * FROM `abstract`";
				 $run = mysqli_query($conn,$sql);
				 
				 while ($row = mysqli_fetch_array($run)) {
						?>
						<form  method="post" action="vote.php">
							<table align="center" border="6" width="40%"  >
							<h1 name= "h1" value="as"> 
								<tr><td rowspan ="4">
									<b style="margin-left: 15px;"><?php echo $row["project_name"];?></b>
								</td></tr>
							</h1>
							 <p>
							 	<tr><td style="padding: 20px" > 
							 		<b style="margin-left: 15px;"><?php echo $row["details"];?></b>
							 	</td></tr> 
							 </p>
							 <input type="hidden" name="vote" value="<?php echo $row["team_name"];?>">
							 <input type="hidden" name="vote" value="<?php echo $row["team_name"];?>">
							 <tr><td>
							   <center> <input type="submit" name="submit" value="VOTE" class="button button2"></center>
							</td></tr>
						</table>
						</form><br>
						<?php 
					}
					
		 		}
				else {
					  echo "<script>setTimeout(\"location = 'index.php';\",0);</script>";
						session_destory();
				}
		 ?></section>
</body>
</html>
