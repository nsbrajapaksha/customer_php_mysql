<!-- Hello Testing

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>This is HTML file in a PHP file</p>
	<p style="color: red; font-size: 20px">This is HTML file in a PHP file</p>

</body>
</html>

<script>
	alert("This is a Javascript in PHP file");
</script>

<?php 
	//echo "This is from a php tag";
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width+device-width, initial-scale=1">
	<title>Customers</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Bordered Table</h2>
		<p>The .table-bordered class adds borders to a table</p>
		<table class="table table-bordered table table-hover">
			<thead>
				<tr>
					<th>Fullname</th>
					<th>Password</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include('dbconnection.php');

				$query = "SELECT * FROM users";
				$run = mysqli_query($connection, $query);
				while ($result = mysqli_fetch_assoc($run)) {
					//echo $result['email'];	
				
					?>
					<tr>
						<td><?php echo $result['full_name'] ?></td>
						<td><?php echo $result['password'] ?></td>
						<td><?php echo $result['email'] ?></td>
					</tr>
					<?php } ?>
			</tbody>
		</table>	
	</div>
</body>

</html>

<?php
	// include("ex.php"); 

	// $name = "nipuna";  
	
	// echo $age;


	// $GLOBALS['age'] = 20;
	// echo $age;

	// session_start(); 
	// $_SESSION['user'] = "nipuna";
	// echo $_SESSION['user'];


	// $connection = mysqli_connect($server, $username, $password, $database);

	// if ($connection) {
	// 	echo "Database connection was successfull";
	// } else {
	// 	echo "Connection not successfull " . mysqli_error($connection);
	// 	die($connection);

	// }

	

	include('dbconnection.php'); 

	// $query = "INSERT INTO users (id, email, password, full_name, Spending_Amt) VALUES 
	//  ('NULL','nsbrwe@gmail.com', '13335', 'NSBR', '23234')";

	// $run_query = mysqli_query($connection, $query);

	// if($run_query) {
	// 	echo "Data has been inserted in your database";
	// }else {
	//  	echo "Data could not be inserted";
	// }

	//mysqli_close($connection);



	// $query_update = "UPDATE users SET full_name = 'Rajapaksha', email = 'nsbr1234@gmail.com' WHERE id = 2";

	// $run_query = mysqli_query($connection, $query_update);

	// if($run_query) {
	// 	echo "Data has been updated in your database";
	// }else {
	//  	echo "Data could not be updated";
	// }

	//mysqli_close($connection);



	$query_select = "SELECT * FROM users"; 
	$run_query = mysqli_query($connection, $query_select);
	//$results = mysqli_fetch_array($run_query, MYSQLI_NUM);
	//$results = mysqli_fetch_array($run_query, MYSQLI_ASSOC);


	//$results = mysqli_fetch_assoc($run_query);
	//$results = mysqli_fetch_row($run_query);

		
	// while ($results = mysqli_fetch_assoc($run_query)) {
	// 	echo $results['email'];	
	// }

	$noOfRows = mysqli_num_rows($run_query);  //return no. of rows

	mysqli_close($connection);


	// $query_delete = "DELETE FROM users WHERE id=3"; 
	// $run_query = mysqli_query($connection, $query_delete );
	


	// if($run_query) {
		
	// 	echo "User successfully deleted";

	// }else {
	//  	echo "Data could not be deleted";
	// }

	// mysqli_close($connection);







?>



