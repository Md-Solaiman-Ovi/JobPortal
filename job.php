<html>
	<head>
	
	<style>
	<!--	.back {
		background-image: url('image/img35.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;			  
	    
								  
	}-->
		h1 {
	color: white;
	text: bold;
	text-shadow: 7px 5px 5px black;
	background-color:#003710;
	background-size: 100% 3%;			  
    padding: 20px;
	padding-left: 50px;
	padding-right: 50px;
	padding-top: 5px;
	padding-bottom: 15px;
	
	
}
	.submit-btn4{
	width: 20%;
	text:bold;
	color: white;
	text-shadow: 3px 2px 3px black;
	padding: 10px 10px;
	cursor: pointer;
	margin: auto;
	background: linear-gradient(to right, #FB1465  , #370215 );
	border: 0;
	border-radius: 10px;
	
}
	
	</style>
	
	
		<title>Find Job </title>
		
		    <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
	
	</head>
	<body  class="back"  style="margin-bottom: 100px;">
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
	    <h1 align="center">Are you searching this type of job!!!</h1><br><br>
	
			
	</div>
	
	
			<div  align="center">
	
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

				$jobname = $_POST['jobname'];


				// sql to delete a record
				$sql = "SELECT * FROM Job WHERE Jobname='$jobname' ";

				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);

				if($num == 1){
					//header('location:boot.php');
					echo "<table border='1' >";
					echo "<tr>";
					echo "<th >Jobname</th><th>Vacancy</th><th>Experience</th>";
					echo "</tr>";


					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					
					while($row = mysqli_fetch_assoc($result)) {
						
									echo "<tr>";
									echo "<td>" . $row['Jobname'] . "</td>";
									echo "<td>" . $row['Vacancy'] . "</td>";
									echo "<td>" . $row['Experience'] . "</td>";
									echo "</tr>";
									

							}
					} else {
							echo "0 results";
						}

					echo "</table>";
						}else{
							echo " Couldn't find any job ";
							//header('location:LOGIN.html');
				}

				mysqli_close($conn);
				?>
			</div>	

	<br><br><br>
	                  
						<form align="center" action="applicantsLogin.html">	
								
								 <button  align="center" type="submit" class="submit-btn4"> <h3>Apply</h3> </button><br><br><br><br>		
					    </form >

		
	
		
		
		
	<script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>