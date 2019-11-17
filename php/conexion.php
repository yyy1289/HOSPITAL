<?php
$mysqli = new mysqli("localhost", "root", "", "hospital");

if (mysqli_connect_errno()) {
	echo "Hizo algo mal wey";
}
$mysqli->set_charset("utf8");
?>