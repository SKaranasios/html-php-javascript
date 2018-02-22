<?php
$connect=mysqli_connect('localhost','root','','mydatabase1');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
?>