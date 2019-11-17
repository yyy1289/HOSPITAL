<?php
$mysqli = new mysqli("localhost", "root", "", "senaempleados");

if (mysqli_connect_errno()) {
	echo "Hizo algo mal wgn";
}
$mysqli->set_charset("utf8");
?>