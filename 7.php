<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
		<form action="7.php" method="post">
			<input type="text" name="username" placeholder="Your username...">
			<input type="password" name="password" placeholder="Your password...">
			<input type="submit" name="login">
		</form>
	
	
	
	<?php  
	if (isset($_POST['login'])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];
		$connectdb = mysqli_connect('localhost','root','','loginapp'); 
		if ($connectdb) {
			# code...
			echo "DB Connected";
		} else {
			# code...
			die("DB Not Connected! Error");
		}
		$sqlquery = "INSERT INTO user(username,password)"."VALUE ('$username','$password')";
		$result = mysqli_query($connectdb,$sqlquery);
		if ($result) {
			# code...
			echo "Đăng kí thành công";
		} else {
			# code...
			die('Đăng kí thất bại');
		}

	}

	/*  Step 1 - Create a database in PHPmyadmin (đã tạo db loginapp)

		Step 2 - Create a table like the one from the lecture (done)

		Step 3 - Insert some Data (done)

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
