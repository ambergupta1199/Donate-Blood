<!DOCTYPE html>

	<head>
		<title>Donate The Blood</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">

        <link rel="stylesheet" href="css/styles.css">

		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/custom.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script src="//geodata.solutions/includes/statecity.js"></script>
	</head>



<?php 
            include 'config.php';
            session_start();
            if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
                include 'usernav.php';
            }
            else if(isset($_SESSION['email']) && !empty($_SESSION['email']))
            {
                include 'admin\include\adminpage.php';
            }
            else {
                include 'navigation.php';
 
            }
?>