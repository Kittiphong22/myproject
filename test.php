<?php
require("connect_db.php"); // เชื่อมต่อกับฐานข้อมูล

// ดึงข้อมูลรูปภาพและชื่อจากตาราง images
$sql = "SELECT image_data, image_name FROM images";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Images</title>
</head>
<body>
    <h1>Images</h1>
    <?php
    // ตรวจสอบผลลัพธ์
    if (mysqli_num_rows($result) > 0) {
        // วนลูปแสดงรูปภาพและชื่อ
        while ($row = mysqli_fetch_assoc($result)) {
            $imageData = $row["image_data"];
            $imageName = $row["image_name"];

            // แสดงรูปภาพ
            echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="' . $imageName . '" width="300" height="200"><br>';

            // แสดงชื่อรูปภาพ
            echo '<p>' . $imageName . '</p>';
        }
    } else {
        echo "No images found.";
    }

    // ปิดการเชื่อมต่อกับฐานข้อมูล
    mysqli_close($conn);
    ?>
</body>
</html>
