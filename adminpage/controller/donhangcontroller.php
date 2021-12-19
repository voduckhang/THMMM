<?php
include './ketnoisql/ketnoi.php';
$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
$sql = "SELECT * FROM donhang ORDER BY id_don_hang ASC";
$query = mysqli_query($conn, $sql);
?>