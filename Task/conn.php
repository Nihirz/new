<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'task');

if (!$con) {
	echo '<script>alert("Not Connected Please Try Agai Letter")</script>';
}
// else{
// 	echo '<script>alert("Connected Sucessully")</script>';
// }
?>