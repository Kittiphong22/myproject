<?php
require("connect_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $เลขห้อง = $_POST["เลขห้อง"];
    $ชื่อผู้อยู่ = $_POST["ชื่อผู้อยู่"];
    $ที่อยู่ = $_POST["ที่อยู่"];
    $เบอร์โทร = $_POST["เบอร์โทร"];
    $start_contract = $_POST["start_contract"];
    $end_of_contract = $_POST["end_of_contract"]; // ใส่ ; ที่ลืม
    $ราคาห้อง = $_POST["ราคาห้อง"]; // ใช้ชื่อฟิลด์ที่เก็บราคาห้อง

    // คำสั่ง SQL สำหรับอัปเดตข้อมูล
    $sql = "UPDATE residents_b 
            SET ชื่อผู้อยู่ = '$ชื่อผู้อยู่',
                ที่อยู่ = '$ที่อยู่',
                เบอร์โทร = '$เบอร์โทร',
                start_contract = '$start_contract',
                end_of_contract = '$end_of_contract',
                ราคาห้อง = '$ราคาห้อง'
            WHERE เลขห้อง = '$เลขห้อง'";

    // ทำการอัปเดตข้อมูลในฐานข้อมูล
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // อัปเดตข้อมูลเรียบร้อย
        header("location: show_residents_b.php");
        exit();
    } else {
        // มีข้อผิดพลาดในการอัปเดต
        echo "มีข้อผิดพลาดในการอัปเดตข้อมูล: " . mysqli_error($conn);
    }
} else {
    // ถ้าไม่ใช่การร้องขอ POST ให้เปิดหน้าเพจเป็นเพจแก้ไข
    header("location: edit.php?เลขห้อง=" . $_POST["เลขห้อง"]);
    exit();
}
?>
