<?php
require("connect_db.php");
$sql = "SELECT * FROM residents_a";
$result = mysqli_query($conn, $sql);

if ($result) { // Check if the query was executed successfully
    $homeUrl = "building.php";
    $roomUrl = "show_residents_a.php";

    echo '<div class="container-fluid my-5"> <!-- ใช้ container-fluid แทน container เพื่อทำให้กว้างขึ้น -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3">
          <li class="breadcrumb-item">
            <a class="link-body-emphasis" href="' . $homeUrl . '">
              <svg class="bi" width="13" height="16"><use xlink:href="#house-door-fill"></use></svg>
              <span class="visually-hidden">Home</span>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-body-emphasis" href="' . $roomUrl . '">
              <svg class="bi" width="-5" height="16"><use xlink:href="#room-door-fill"></use></svg>
              <span class="visually-hidden">Room</span>
            </a>
          </li>
        </ol>
      </nav>
    </div>';

    $headerText = "รายชื่อ"; // ข้อความใน header
    echo "<div class='center'>" . $headerText . "</div>";
    echo "<center>";
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
          font-family: 'YourThaiFont', sans-serif;
      }
    </style>";
    echo "<table>";
    echo "<tr>
            <th>เลขห้อง</th>
            <th>รายละเอียด</th>
            <th>ราคาห้อง</th>
            <th></th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
      <td>" . $row["เลขห้อง"] . "</td>
      <td>" . $row["รายละเอียด"] . "</td>
      <td>" . $row["ราคาห้อง"] . "</td>
      

      <td>
          <center>
              <a href='edit_roomdetails_a.php?เลขห้อง=" . $row["เลขห้อง"] . "' class='btn btn-primary'>
                  <i class='bi bi-pencil'></i> แก้ไข
              </a>
             
          </center>
      </td>
  </tr>";
    }
    echo "</table>";
  } else {
    // Handle the query execution error
    echo "Error: " . mysqli_error($conn);
}
echo "</center>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>add residents</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- เชื่อมต่อไปยังไฟล์ CSS ของไอคอน Bootstrap Icons -->
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
 
</body>
</html>