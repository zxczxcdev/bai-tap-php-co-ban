


<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
	<form action="6.php" method="post">
		<input type="text" name="uid" placeholder="Your username...">
		<input type="password" name="pass" placeholder="Your password...">
		<input type="submit" name="enter">
	</form>
	<?php  
	
	if (isset($_POST["enter"])) {
		# code...
		$authName = array("Nguyen","Khoa","Dao");
		$uid = $_POST["uid"];
		$pass = $_POST["pass"];
		echo "UID: ".$uid;
		echo "<br>";
		echo "Pass: ".$pass; 
		if (strlen($uid) > 10) {
			# code...
			echo "UID không được quá 10 ký tự!<br>";
		}
		if (strlen($pass) < 3) {
			# code...
			echo "Pass không được ít hơn 3 ký tự!<br>";
		}
		if (!in_array($uid,$authName)) {
			# code...
			echo "đúng";
		}
		else {
			# code...
			echo "Sai";
		}

	}
/*  Step1: Make a form that submits one value to POST super global


 */

	
?>

	

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>