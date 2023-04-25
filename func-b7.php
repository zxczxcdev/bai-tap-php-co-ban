<?php include "db.php";?>  <!-- kết nối database -->
<?php


function getID(){
    $queryString = "SELECT * FROM user";
    global $connectdb;
				$resultString = mysqli_query($connectdb,$queryString);
				while ($row = mysqli_fetch_assoc($resultString)) {
					# code...
					$id = $row["id"];
					echo "<option value='$id'>$id</option>";
				}
}

function updateUser(){
	global $connectdb;
	$user = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	$user = mysqli_real_escape_string($connectdb , $user); // chống sql injection
	$password = mysqli_real_escape_string($connectdb , $password); // chống sql injection

	$query = "UPDATE `user` SET `username` = '$user', `password` = '$password' WHERE `user`.`id` = $id ;";
	$result = mysqli_query($connectdb, $query);
	if (!$result) {
		# code...
		die("Lỗi". mysqli_error($connectdb));
	}
	else {
		# code...
		echo "Update thành công userID:".$id;
	}
}

function deleteUser(){
	global $connectdb;
	$id = $_POST['id'];

	$query = "DELETE FROM `user` WHERE `user`.`id` = $id";
	$result = mysqli_query($connectdb, $query);
	if (!$result) {
		# code...
		die("Lỗi". mysqli_error($connectdb));
	}
	else {
		# code...
		echo "Xóa thành công userID:".$id;
	}
}



?>