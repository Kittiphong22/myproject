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
        }
        form {
            margin: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100px;
            padding: 5px;
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

    <h2>รายการค่าใช้จ่าย</h2>
    <p>ค่าน้ำ: <?php echo $totalWaterCost; ?> บาท</p>
    <p>ค่าไฟ: <?php echo $electricityCost; ?> บาท</p>
    <p>รวมค่าน้ำและค่าไฟ: <?php echo $totalCost; ?> บาท</p>

    <form method="get">
        <input type="submit" value="รีเฟรช">
    </form>
</body>
</html>
