<html>
	<head>
	
	<style>
	<!--	.back {
		background-image: url('image/img26.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;			  
	    
								  
	}-->
	h1 {
	color: white;
	text: bold;
	text-shadow: 7px 5px 5px black;
	background-color:#003710;
	background-size: 100% 5%;			  
    padding: 20px;
	padding-left: 50px;
	padding-right: 50px;
	padding-top: 5px;
	padding-bottom: 15px;
	
	
}

.box{
   width:20%;
   height:10%;
   border-radius:7px;


}
.search{
    color:white;
	text: bold;
	width:10%;
	height:10%;
	background-color: green;
	border-radius:7px;
	text-shadow: 7px 5px 5px black;



}

	
	</style>
	
	
		<title>Find Job </title>
		
		    <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
	
	</head>
	<body class="back"  style="margin-bottom: 100px;">
		<!-- navbar -->
    <nav style="height:10%;" class=" table navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h2><b><i>Job Portal<br><h6>ONLINE JOBS FINDER</h6></i></b></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="HomePage.html"><b>HOME </b><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LOGIN.html"><b>SIGNIN</b></a>
                </li>
				 <li class="nav-item">
                    <a class="nav-link" href="findJob.php"><b>JOB</b></a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="3.1signup.html"><b>REGISTRATION</b></a>
                </li>
                
				<li class="nav-item">
                    <a class="nav-link" href="about.html"><b>ABOUT US</b></a>
                </li>
              
            </ul>
            <form action="job.php" method="post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="jobname" placeholder="Search Job" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
	<div >
	    <h1 align="center">Find the right Job for you</h1><br>
	     <form align="center" action="job.php" method="post" >
               <input  class="box" type="search" name="jobname" placeholder="Select One" />
                <button class="search" type="submit"><h3>Choose</h3></button>
            </form>
			
	</div>
    <div align="center">
				<?php

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "employerDB";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM Job";
				$result = mysqli_query($conn, $sql);
                echo "<br>";
                
				echo "<table border='1' >";
				echo "<tr>";
				echo "<th >Jobname</th><th>Vacancy</th><th>Experience</th><th>Details</th>";
				echo "</tr>";

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						
				      
				        
							echo "<tr>";
							echo "<td>" . $row['Jobname'] . "</td>";
							echo "<td>" . " Vacancy: " . $row['Vacancy']  ."</td>";
							echo "<td>" . " Years: " .$row['Experience'] . "</td>";
							echo "<td>"."click to view" ."</td>";
							echo "</tr>";
							
							
							

					}
				} else {
					echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
				
				?>
				
	</div>
	    
		<br><br><br><br><br>
	
		
		
		
	<script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>