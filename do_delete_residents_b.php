<?php
require("connect_db.php");
$เลขห้อง = $_POST["เลขห้อง"];

$sql = "DELETE FROM residents_b WHERE เลขห้อง='$เลขห้อง'";
mysqli_query($conn, $sql);
header("location: show_residents_b.php");
exit(0);
?>