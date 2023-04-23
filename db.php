<?php
$connectdb = mysqli_connect('localhost','root','','loginapp'); // khai báo biến kết nối tới mysql
if (!$connectdb) {
    # code...
    die("DB Not Connected! Error");
}
?>