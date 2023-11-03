<?php
require("connect_db.php");
$เลขห้อง = $_POST["เลขห้อง"];

// Instead of deleting the record, update it to clear other information
$sql = "UPDATE residents_a SET ชื่อผู้อยู่='', ที่อยู่='', เบอร์โทร='', start_contract='', end_of_contract='', ค่าน้ำค่าไฟ= '' WHERE เลขห้อง='$เลขห้อง'";
mysqli_query($conn, $sql);

header("location: show_residents_a.php");
exit(0);
?>
