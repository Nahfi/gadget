<?php
$con = new mysqli("localhost","root","root","gadget");

if($con->connect_error)
{
	die("Could not connect to the database!".$con->connect_error);
}

  ?>