<!DOCTYPE html>
<html>
<head>
	<title>Alumni</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='style.css'>
</head>
<?php
	$query = '';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$query = test_input($_POST['query']); 
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if ($query) {	
		$servername = 'localhost';
		$username = 'root';
		$password = 'erenesto';
		$dbname = 'alumni';
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die('Connection failed: ' . $conn->connect_error);
		}
		$sql = "SELECT * FROM `mytable` WHERE name LIKE ('%".$query."%')
										 OR	branch LIKE ('%".$query."%')
										 OR place LIKE ('%".$query."%')
										 OR job LIKE ('%".$query."%')
										 OR groups LIKE ('%".$query."%');";
		$results = mysqli_query($conn,$sql);
	}
		?>
<body>
	<div class='container'>
		<div class='row'>
	        <div class='col-sm-6 col-sm-offset-3'>
	            <div id='imaginary_container'> 
	            	<form method='post' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'>
		                <div class='input-group stylish-input-group'>
		                    <input type='text' class='form-control' placeholder='Search' name='query'>
		                    <span class='input-group-addon'>
		                        <button type='submit' name='submit'>
		                            <span class='glyphicon glyphicon-search'></span>
		                        </button>
		                    </span>
		                </div>
	                </form>
	            </div>
	            <?php
	            	while ($row = mysqli_fetch_array($results)) {
					echo '
						<form method="post" action="form.php" class="inline">
		  				<input type="hidden" name="email" value="'.$row["email"].'">
		  				<button type="submit" name="submit_param" value="submit_value" class="link-button">
		    				Name:'.$row["name"].' Branch: '.$row["branch"].' Place: '.$row["place"].' Job: '.$row["job"].' Groups:'.$row["groups"].'
		  				</button>
						</form>';
					}
					mysqli_close($conn);
				?>
	        </div>
		</div>
	</div>
</body>
</html>