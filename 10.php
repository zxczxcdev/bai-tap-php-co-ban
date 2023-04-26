<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php
class Dog 
{
	var $mau_mat = "Đen";
	var $mau_long = "Xám";
	var $tai;
	
	function Nose()
	{
		# code...
		echo "Nose Dog";
	}
	function DoiMauMat(){
		$this->mau_mat = "Xanh";

	}
	function DoiMauLong(){
		$this->mau_long = "Tím";
	}
	function TaoKieuTai(){
		$this->tai = "Tai cụp";
	}
	
}

?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php
	$husky = new Dog();
	echo "Màu mắt: ".$husky->mau_mat."<br>";
	echo "Màu lông: ".$husky->mau_long."<br>";
	// thực hiện đổi màu mắt: 
	$husky->DoiMauMat();
	echo "Màu mắt: ".$husky->mau_mat."<br>";
	//thực hiện đổi màu lông cho husky nhé : 
	$husky->DoiMauLong();
	echo "Màu lông: ".$husky->mau_long."<br>";
	// thực hiển tạo kiểu tai:
	$husky->TaoKieuTai();
	echo "Kiểu tai: ".$husky->tai."<br>";


	  if (method_exists("Dog","Nose")) {
		# code... kiểm tra xem class Dog có tồn tại hay không?
		echo "ok<br>";
	} else {
		
		echo "error";
	}

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/
	
	
	

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>