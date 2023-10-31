<?php
require("connect_db.php");
$เลขห้อง = $_GET["เลขห้อง"];
$sql = "SELECT * FROM residents_a WHERE เลขห้อง = "$เลขห้อง"";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
    <head><title>Delete Residents</title></head>
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
       
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px
        }
    </style>
    <body>        
        <center>
            <h1>ลบรายชื่อผู้เช่า</h1>
            <form action="do_delete_residents_a.php" method="post">
                <table>
                    <tr><td>เลขห้อง:</td><td>
                        <input type="hidden" name="เลขห้อง" value="<?php echo $row["เลขห้อง"];?>" />
                        <?php echo $row["เลขห้อง"];?></td></tr>
                    <tr><td>ชื่อผู้อยู่:</td><td><?php echo $row["ชื่อผู้อยู่"];?></td></tr>
                    <tr><td>ที่อยู่:</td><td><?php echo $row["ที่อยู่"];?></td></tr>
                    <tr><td>เบอร์โทร:</td><td><?php echo $row["เบอร์โทร"];?></td></tr>
                    <tr><td>เริ่มต้นสัญญา:</td><td><?php echo $row["start_contract"];?></td></tr>
                    <tr><td>สิ้นสุดสัญญา:</td><td><?php echo $row["end_of_contract"];?></td></tr>
                    <tr><td>ราคาห้อง:</td><td><?php echo $row["ราคาห้อง"];?></td></tr>
                    <tr><td colspan="2" style="text-align:center;"><input type="submit" value="ลบ" /></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>