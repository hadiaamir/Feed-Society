<?php 

	include "header.php";
	require_once 'dbconnect.php';
	// select logged in users detail
	$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<head>

	<link rel="stylesheet" type="text/css" href="Assets/Style/home.css">
	<link rel="stylesheet" type="text/css" href="Assets/Style/responsive.css">
	
</head>

<body>
	
	<section class="home-dashboard">

		<div class="home-header">

			<h2>Welcome

				<?php 
					if (isset($_SESSION['user'])) 
					{
						echo $userRow['username'] ;
					} 
				?> 

				to Feed Society</h2>

			<h3>Providing you with the latests fashion, sneakers, music, and sports feeds.</h3>

		</div>

	</section>

</body>