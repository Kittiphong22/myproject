<?php
require("connect_db.php");

$เลขห้อง = $_POST["เลขห้อง"];
$ชื่อผู้อยู่ = $_POST["ชื่อผู้อยู่"];
$ที่อยู่ = $_POST["ที่อยู่"];
$เบอร์โทร = $_POST["เบอร์โทร"];
$start_contract = $_POST["start_contract"];
$ราคาห้อง = $_POST["ราคาห้อง"];
$end_of_contract = $_POST["end_of_contract"];

$sql = "SELECT * FROM residents_a WHERE เลขห้อง = '$เลขห้อง'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    echo '<div style="text-align: center; padding: 20px; background-color: #f7f7f7; border: 1px solid #ccc;">';
    echo '<p style="color: black; font-size: 22px;">';
    echo "เลขห้อง: {$เลขห้อง} มีข้อมูลห้องนี้อยู่แล้ว!";
    echo '</p>';
    echo '<a href="show_residents_a.php" style="text-decoration: none; color:#000000; background-color: #eee; padding: 5px 10px; border: 1px solid #000000;">กลับ</a>';
    echo '</div>';
    exit(0);
}

$sql = "INSERT INTO residents_a( เลขห้อง, ชื่อผู้อยู่, ที่อยู่, เบอร์โทร, start_contract, ราคาห้อง, end_of_contract)";
$sql .= " VALUES ('$เลขห้อง', '$ชื่อผู้อยู่', '$ที่อยู่', '$เบอร์โทร','$start_contract', '$ราคาห้อง','$end_of_contract')";
mysqli_query($conn, $sql);
header("location: show_residents_a.php");
exit(0);
?>