<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php
/* 

    Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
    Step 2: Add the two variables and display the sum with echo:
	Step3: Make 2 Arrays with the same values, one regular and the other associative

 */

$number1 = 10;

$number2 = 20;

echo "Display the sum: ".$number1 + $number2."<br>";

$regularArrays = array("Nguyên",18,"Youtuber");

print_r($regularArrays) ;

echo "<br>";

$assocArray = array(
	"name" => "Nguyên",
	"age" => 18,
	"job" => "Youtuber"
);

print_r($assocArray) ;

echo "<br>";

echo "Tên của tôi là: ".$assocArray["name"]."<br>";

echo "Tuổi của tôi là: ".$assocArray["age"]."<br>";

echo "Việc của tôi là: ".$assocArray["job"]."<br>";


?>



		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>