<?php
echo '<div class="container-fluid my-5">
<nav aria-label="breadcrumb" class="breadcrumb">
<ol class="breadcrumb-chevron p-3 bg-body-tertiary rounded-3">
  <li class="breadcrumb-item">
    <a class="link-body-emphasis" href="building.php">
      <svg class="bi" width="13" height="16"><use xlink:href="#house-door-fill"></use></svg>
      <span class="visually-hidden">Home</span>
    </a>
  </li>
  <li class="breadcrumb-item active" aria-current="page">
    <a class="link-body-emphasis" href="show_residents_a.php">Show</a>
  </li>
</ol>
</nav>
</div>';


$waterCost = 100; // ค่าน้ำเหมาจ่ายต่อเดือน
$electricityRate = 8; // ค่าไฟต่อหน่วย

$electricityUnits = 0;
$electricityCost = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["electricity_units"])) {
        $electricityUnits = floatval($_POST["electricity_units"]);
        $electricityCost = $electricityUnits * $electricityRate;
    }

    $totalWaterCost = $waterCost;
} else {
    $totalWaterCost = 0;
}

$totalCost = $totalWaterCost + $electricityCost;
?>
<!DOCTYPE html>
<html>
<head>
    <title>คำนวณค่าน้ำและค่าไฟ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        form {
            margin: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
        }
        h2 {
            margin: 20px 0;
            text-align: center;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>คำนวณค่าน้ำและค่าไฟ</h1>
    <form method="post">
        <label>หน่วยไฟ (หน่วยละ 8 บาท): </label>
        <input type="text" name="electricity_units" value="<?php echo $electricityUnits; ?>">
        <input type="submit" value="คำนวณ">
    </form>
    <center>
    <h2>รายการค่าใช้จ่าย</h2>
    <p>ค่าน้ำ: <?php echo $totalWaterCost; ?> บาท</p>
    <p>ค่าไฟ: <?php echo $electricityCost; ?> บาท</p>
    <p><strong>รวม: <?php echo $totalCost; ?> บาท</strong></p>
    </center>

    <form method="get">
    <input type="submit" name="print_button" value="print">
</form>
</body>
</html>
