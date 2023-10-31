<?php
require("connect_db.php");
if (isset($_GET["เลขห้อง"])) {
    $เลขห้อง = $_GET["เลขห้อง"];
    $sql = "SELECT * FROM residents_a WHERE เลขห้อง = '$เลขห้อง'";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Check if the query was successful
    if ($result) {
        // Fetch the data
        $row = mysqli_fetch_assoc($result);
        
    }
}
?>

<html>
    <head><title>แก้ไขข้อมูล</title></head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            font-size: 32px;
            margin: 10px 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 60%;
        }

        table {
            width: 100%;
        }

        table, th, td {
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <body>        
        <center>
            <h1>แก้ไขข้อมูล</h1>
            <form action="do_edit_residents_a.php" method="post">
    <table>
        <tr><td>เลขห้อง:</td><td><input type="text" name="เลขห้อง" value="<?php echo $row["เลขห้อง"];?>" readonly /></td></tr>
        <tr><td>ชื่อผู้อยู่:</td><td><input type="text" name="ชื่อผู้อยู่" value="<?php echo $row["ชื่อผู้อยู่"];?>" /></td></tr>
        <tr><td>ที่อยู่:</td><td><input type="text" name="ที่อยู่" value="<?php echo $row["ที่อยู่"];?>" /></td></tr>
        <tr><td>เบอร์โทร:</td><td><input type="text" name="เบอร์โทร" value="<?php echo $row["เบอร์โทร"];?>" /></td></tr>
        <tr><td>เริ่มต้นสัญญา:</td><td><input type="date" name="start_contract" value="<?php echo $row["start_contract"];?>" /></td></tr>
        <tr><td>สิ้นสุดสัญญา:</td><td><input type="date" name="end_of_contract" value="<?php echo $row["end_of_contract"];?>" /></td></tr>
        <tr><td>ราคาห้อง:</td>
            <td>
                <select name="ราคาห้อง">
                    <option value="1800" <?php if ($row["ราคาห้อง"] == "1800") echo "selected"; ?>>1800</option>
                    <option value="2000" <?php if ($row["ราคาห้อง"] == "2000") echo "selected"; ?>>2000</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;"><input type="submit" value="แก้ไขข้อมูล" /></td>
        </tr>
    </table>
</form>

        </center>
    </body>
</html>