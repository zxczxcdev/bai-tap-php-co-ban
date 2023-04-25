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

	$query = "UPDATE `user` SET `username` = '$user', `password` = '$password' WHERE `user`.`id` = $id ;";
	$result = mysqli_query($connectdb, $query);
	if (!$result) {
		# code...
		die("Lỗi". mysqli_error($connectdb));
	}
}


?>