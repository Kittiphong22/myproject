<?php
require("connect_db.php");
$เลขห้อง = $_POST["เลขห้อง"];

// Instead of deleting the record, update it
$sql = "UPDATE residents_a SET ชื่อผู้อยู่='', ที่อยู่='', เบอร์โทร='', start_contract='', end_of_contract='', ราคาห้อง='' WHERE เลขห้อง='$เลขห้อง'";
mysqli_query($conn, $sql);

header("location: show_residents_a.php");
exit(0);
?>
