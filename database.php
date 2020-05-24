<?php
$connect1=mysqli_connect('localhost','root','','query_info');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>