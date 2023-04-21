<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

 // Lời giải cho Step1:
function calculation()
{
	# code...
	echo 12 + 12;
}
calculation();
echo "<br>";
 // Lời giải cho Step2:
function sumFunction($var1,$var2)
 {
	# code...
	$sum = $var1 + $var2;
	echo $sum;
 }
 sumFunction(12,23)
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>