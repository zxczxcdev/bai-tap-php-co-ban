<?php
$fileName = "test.txt"; // đường dẫn
// $handel = fopen($fileName,'w'); // tạo biến file open (đường dẫn,quyền hạn write hoặc read )
// fwrite($handel,'nội dung viết vào file'); // functuon file wirte(biến fopen,'nội dung ghi vào file');
// fclose($handel); // đóng file

$readfile = fopen($fileName,'r');
echo  $content = fread($readfile,filesize($fileName));
fclose($readfile); // đóng file
?>