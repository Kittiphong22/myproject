<html>
<head>
    <title>Add Residents</title>
    <link rel="stylesheet" href="css/bootstrap.main.css">
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
</head>
<body>
    <center>
        <h1>เพิ่มรายชื่อผู้เช่า</h1>
        <form action="do_add_residents_a.php" method="post">
        <script src = "js/bootstrap.main.js"></script>
            <table>
               
                <tr>
                    <td>เลขห้อง:</td>
                    <td><input type="text" name="เลขห้อง" /></td>
                </tr>
                <tr>
                    <td>ชื่อผู้อยู่:</td>
                    <td><input type="text" name="ชื่อผู้อยู่" /></td>
                </tr>
                <tr>
                    <td>ที่อยู่:</td>
                    <td><input type="text" name="ที่อยู่" /></td>
                </tr>
                <tr>
                    <td>เบอร์โทร:</td>
                    <td><input type="text" name="เบอร์โทร" /></td>
                </tr>
                <tr>
                    <td>เริ่มต้นสัญญา:</td>
                    <td><input type="date" name="start_contract">
                </td>
                </tr>
                <tr>
                <td>สิ้นสุดสัญญา:</td>
                    <td><input type="date" name="end_of_contract">
                </td>
                </tr>
                    <td>ราคาห้อง:</td>
                    <td>
                    <select name="ราคาห้อง">
                            <option value="1800">1800</option>
                            <option value="2000">2000</option>               
                        </select
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><input type="submit" value="เพิ่มข้อมูล" /></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
