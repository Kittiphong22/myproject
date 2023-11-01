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
          <li class="breadcrumb-item active" aria-current="page">
            Show
          </li>
        </ol>
      </nav>
    </div>';

    $headerText = "ค่าน้ำ-ค่าไฟ"; // ข้อความใน header
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
            <th>ค่าน้ำ (บาท)</th>
            <th>ค่าไฟ (หน่วย)</th>
            <th></th>
            <th>รวม (บาท)</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $roomNumber = $row["เลขห้อง"];
        $waterRate = 100; // ค่าน้ำ 100 บาท
        $electricityRate = 8; // ค่าไฟต่อหน่วย

        echo "<tr>
                <td>" . $roomNumber . "</td>
                <td><input type='text' class='waterValue' value='" . $waterRate . "'></td>
                <td><input type='text' class='electricityValue' value='0'></td>
                <td><button class='calculateButton' data-room='$roomNumber'>คำนวณ</button></td>
                <td class='totalCost'>0 บาท</td>
            </tr>";
    }

    echo "</table>";
} else {
    // Handle the query execution error
    echo "Error: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Electricity and Water Costs</title>
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
        .calculateButton {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <script>
        // JavaScript function to calculate and display the total cost
        var calculateButtons = document.querySelectorAll('.calculateButton');
        calculateButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var roomNumber = button.getAttribute('data-room');
                var waterValue = parseFloat(document.querySelector('input.waterValue[data-room="' + roomNumber + '"]').value);
                var electricityValue = parseFloat(document.querySelector('input.electricityValue[data-room="' + roomNumber + '"]').value);

                var totalCost = (waterValue) + (electricityValue * electricityRate);

                // Update the corresponding row with the total cost
                var row = button.parentElement.parentElement;
                var totalCostElement = row.querySelector(".totalCost");
                totalCostElement.textContent = totalCost + ' บาท';
            });
        });
    </script>
</body>
</html>