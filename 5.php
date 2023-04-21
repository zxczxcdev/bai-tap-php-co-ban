<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
	<pre>
		trong php có các phép toán hay sử dụng như sau:
		pow(x,y) : tính lũy thừa, ví dụ pow(2,7) : là 2 mũ 7 =128
		rand(): tạo ra số random. ví dụ rand(1,100) thì sẽ tạo 1 số ngẫy nhiên từ 1-100
		sqrt(x,y): căn bậc 2
		ceil(x) : ceil(4.6) làm tròn lên trả về số 5
		floor(x): floor(4.6) làm tròn xuống trả về 4
		round(x): làm tròn lên hoặc xuống tùy thuộc vào số đằng sau dấu , ví dụ : 
		round(4.4)  trả về kết quả là 4
		round(4.6) trả về kết quả là 5 
	</pre>
	<pre>
		 <h3>String function</h3>
		
		 <?php
		  $string = "Hello I am Fteam.vn";
		  echo strlen($string);
		  echo "<br>";
		  echo strtolower($string);
		  echo "<br>";
		  echo strtoupper($string);
		  echo "<br>";
		  echo strrev($string);
		  echo "<br>";

		 ?>
	</pre>
	<pre>
		<h3>Aray Functions</h3>
		<?php
		$string = array(45,1,32,55,56,113,78,143,1234);
		echo max($string);
		echo "<br>";
		echo min($string);
		echo "<br>";
		echo sort($string);
		echo "<br>";
		print_r($string);
		echo "<br>";
		

		?>
	</pre>

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>