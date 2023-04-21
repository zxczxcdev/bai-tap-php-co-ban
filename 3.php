<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
	<pre>
		Toán tử : 
		bình đằng : equal,  ==
		giống hệt nhau : identical , ===
		phép so sánh : compare > < <= >= . trường hợp so sánh khác nhau: <>
		không bình đẳng : not equal !=
		không giống hệt nhau : not identical !==
	</pre>
	<pre>
		Hoạt động logic như sau : 
		Và(tất cả các điều kiện đều thỏa mãn) : And &&
		1 trong các điều kiện thỏa mã : Or ||
		Điều kiện ngược lại : Not : !
	</pre>

<?php  
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases
*/

    if (3 == 4) {
		# code...
		echo "3 == 4 là đúng";
	} elseif (3 < 4 && 4 > 5) {
		# code...
		echo "3 < 4 && 4 > 5 đúng";
	}
	else {
		# code...
		echo "Step1: I Love PHP<br>";
	}
	echo "Step 2: Make a forloop  that displays 10 numbers<br>";
	for ($i=0; $i < 10 ; $i++) { 
		# code...
		echo $i."<br>";
	}
	echo "Step 3 : Make a switch Statement that test againts one condition with 5 cases<br>";

	$phone = "NPhone";
	switch ($phone) {
		case 'xiaomi':
			# code...
			echo "Xiaomi";
			break;
		case 'LG':
			# code...
			echo "LG";
			break;
		case 'Samsung':
			# code...
			echo "samsung";
			break;
		case 'Iphone':
			# code...
			echo "Iphone";
			break;
		case 'Macbook':
			# code...
			echo "Macbook";
			break;
		default:
			# code...
			echo "Không tìm thấy phone nào<br>";
			break;
	}
	?>
	<pre>
	Định nghĩa của foreach? Foreach tức là với mỗi thành phần trong listAdmin sẽ là $admin
	$listAdmin = array("Nguyên","Đạt","Minh","Quân");
	foreach ($listAdmin as $admin) {
		# code...
		echo "Name of admin: ".$admin."<br>";
	}
	</pre>

	<?php

	$listAdmin = array("Nguyên","Đạt","Minh","Quân");
	foreach ($listAdmin as $admin) {
		# code...
		echo "Name of admin: ".$admin."<br>";
	}
	?>
	



	







</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>