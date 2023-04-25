<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Step1:Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>
	<!-- Step1 -->
	<a href="9.php?id=1">Click Here</a>
	<?php
	 print_r($_GET);
	 if (isset($_GET['id'])) {
		# code...
		echo $_GET['id'];
	 }
	 ?>
	<!-- Step2 -->
	<?php  
	$name = "Someone";
	$value = 100;
	$expertion = time() + (60 * 60 * 24 * 7);
	setcookie($name,$value,$expertion);
	?>
	<!-- Step3 -->
	<?php
	session_start();
	$_SESSION['value'] = "some value";
	echo $_SESSION['value'] ;

	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>