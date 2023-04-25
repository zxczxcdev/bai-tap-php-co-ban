<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php include "db.php";?>  <!-- kết nối database -->
<?php include "func-b7.php";?>

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
	
	
		<!-- Step 3 - Insert some Data: -->
		
	<?php  
	if (isset($_POST['login'])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sqlquery = "INSERT INTO user(username,password) VALUE ('$username','$password')"; // lệnh in vào mysql
		$result = mysqli_query($connectdb,$sqlquery);
		if ($result) {
			# code...
			echo "Đăng kí thành công";
		} else {
			# code...
			die('Đăng kí thất bại');
		}

	}
	// Step 4 - Connect to Database and read data
	
	$read_data = "SELECT * FROM  user"; //Lệnh chọn tất cả dữ liệu trong bảng user
	$ketqua = mysqli_query($connectdb,$read_data);
	
	while ($row = mysqli_fetch_assoc($ketqua)) { // mysqli_fetch_assoc : trả về kiểu giữ liệu kết nối
		# code...
		$id = $row["id"]; // lấy tất cả liên kết có name = id trong $rows
		?>
		<h3>ID: <?php print_r($id); ?> </h3>
		

		

		<pre>
<?php print_r($row); ?>
		</pre>
		
		<?php
		
	}
	

	/*  Step 1 - Create a database in PHPmyadmin (đã tạo db loginapp)

		Step 2 - Create a table like the one from the lecture (done)

		Step 3 - Insert some Data  (done)

		Step 4 - Connect to Database and read data (done)

*/
	
	?>


<h1>Form Update user từ ID:</h1>
<form action="7.php" method="post">
			<input type="text" name="username" placeholder="Username...">
			<input type="password" name="password" placeholder="Password...">
			<select name="id" id="">
				<?php 
				getID();
				?>
				
			</select>
			<input type="submit" name="update" value="Update user">
		</form>

<?php
if (isset($_POST['update'])) {
	# code...
	updateUser();
}
?>



</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
