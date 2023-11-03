<?php
require("connect_db.php");

$เลขห้อง = $_POST["เลขห้อง"];
$ชื่อผู้อยู่ = $_POST["ชื่อผู้อยู่"];
$ที่อยู่ = $_POST["ที่อยู่"];
$เบอร์โทร = $_POST["เบอร์โทร"];
$start_contract = $_POST["start_contract"];
$end_of_contract = $_POST["end_of_contract"];

// Check if data with the same "เลขห้อง" already exists
$sql = "SELECT * FROM residents_a WHERE เลขห้อง = '$เลขห้อง'";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Update existing data with the same เลขห้อง
        $updateSql = "UPDATE residents_a SET ชื่อผู้อยู่ = '$ชื่อผู้อยู่', ที่อยู่ = '$ที่อยู่', เบอร์โทร = '$เบอร์โทร', start_contract = '$start_contract', end_of_contract = '$end_of_contract' WHERE เลขห้อง = '$เลขห้อง'";
        mysqli_query($conn, $updateSql);
        header("location: show_residents_a.php");
        exit(0);
    }
}

// Handle the case where เลขห้อง doesn't exist
echo '<div style="text-align: center; padding: 20px; background-color: #f7f7f7; border: 1px solid #ccc;">';
echo '<p style="color: black; font-size: 22px;">';
echo "เลขห้อง: {$เลขห้อง} ไม่มีข้อมูลห้องนี้อยู่!";
echo '</p>';
echo '<a href="show_residents_a.php" style="text-decoration: none; color:#000000; background-color: #eee; padding: 5px 10px; border: 1px solid #000000;">กลับ</a>';
echo '</div>';
exit(0);
?>
