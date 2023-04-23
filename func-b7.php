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
?>