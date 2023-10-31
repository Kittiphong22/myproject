<?php
require("connect_db.php");
$เลขห้อง = $_POST["เลขห้อง"];

$sql = "DELETE FROM residents_a WHERE เลขห้อง='$เลขห้อง'";
mysqli_query($conn, $sql);
header("location: show_residents_a.php");
exit(0);
?>