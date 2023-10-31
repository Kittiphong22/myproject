<?php
require("connect_db.php");
$sql = "SELECT * FROM residents_b";
$result = mysqli_query($conn, $sql);
$homeUrl = "building.php";

echo '<div class="container-fluid my-5"> <!-- ใช้ container-fluid แทน container เพื่อทำให้กว้างขึ้น -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item">
        <a class="link-body-emphasis" href="' . $homeUrl . '">
          <svg class="bi" width="13" height="16"><use xlink:href="#house-door-fill"></use></svg>
          <span class="visually-hidden">Home</span>
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Show
      </li>
    </ol>
  </nav>
</div>';

echo "<center>";
$headerText = "ตึก B"; // ข้อความใน header
echo "<div class='center'>" . $headerText . "</div>";
echo "<style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }
    th, td {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
    .center {
      text-align: center;
      font-weight: bold;
      font-size: 25px;
  }
</style>";
echo "<table>";
echo "<tr>
    <th>เลขห้อง</th>
    <th>ชื่อผู้อยู่</th>
    <th>ที่อยู่</th>
    <th>เบอร์โทร</th>
    <th>เริ่มต้นสัญญา</th>
    <th>สิ้นสุดสัญญา</th>
    <th>ราคาห้อง</th>
    <th></th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>" . $row["เลขห้อง"] . "</td>
        <td>" . $row["ชื่อผู้อยู่"] . "</td>
        <td>" . $row["ที่อยู่"] . "</td>
        <td>" . $row["เบอร์โทร"] . "</td>
        <td>" . $row["start_contract"] . "</td>
        <td>" . $row["end_of_contract"] . "</td>
        <td>" . $row["ราคาห้อง"] . "</td>
        <td>
            <center><a href='edit_residents_b.php?เลขห้อง=" . $row["เลขห้อง"] . "' class='btn btn-primary'><i class='bi bi-pencil'></i> Edit</a>
            <a href='delete_residents_b.php?เลขห้อง=" . $row["เลขห้อง"] . "' class='btn btn-danger'><i class='bi bi-trash'></i> Delete</a>
            </center>
            </td>
    </tr>";
}
echo "</table>";

if(isset($_POST['submit_button']))
    // ดำเนินการตามที่คุณต้องการหลังจากคลิกปุ่ม
    // ตรวจสอบข้อมูล, บันทึกข้อมูล, ประมวลผลข้อมูล, และอื่น ๆ
    // หลังจากนั้นคุณสามารถส่งผลลัพธ์กลับไปยังหน้าเว็บตามที่คุณต้องการ

echo "</center>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>add residents</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
<style>
input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px; 
            }
    </style>
</head>
<body>   
    <center>
    <form method="post" action="add_residents_b.php">
        <!-- ปุ่ม submit -->
        <input type="submit" name="submit_button" value="เพิ่มข้อมูลผู้อยู่" class="btn btn-primary">
<i class="bi bi-person-add"></i>
<script src = "js/bootstrap.main.js"></script>

    </form>
    </center>
</body>
</html>