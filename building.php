<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #2E8B57;
      text-align: center;
      cursor: pointer;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .button:hover {
      background-color: #555;
    }

    .center-button {
      text-align: center;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: black;
    }

    .topnav a {
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 20px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #2E8B57;
      color: white;
    }

    .money {
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100px;
    }

    .row {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }
  </style>
</head>
<body>
  <div class="about-section">
    <h1>ADPK Residents</h1>
    <p>หอพัก ADPK</p>
  </div>
  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="show_residents_a.php">Room</a>
    <a href="show_roomdetails_a.php">Room details</a>
    <a href="contact.php">Contact</a>
  </div>

  <div class="row">
    <?php
    // Include your database connection code here
    require("connect_db.php");

    // Query the database to get resident data
    $sql = "SELECT เลขห้อง, รายละเอียด, ราคาห้อง, ชื่อผู้อยู่, ที่อยู่, เบอร์โทร, img_data FROM residents_a";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="column">';
        echo '<div class="card">';
        echo '<img src="http://image.digitalinsightresearch.in/Uploads/ImageLibrary/Active/2017Q3/designcurial/ikea/MUR-4.jpg" alt="' . $row["รายละเอียด"] . '" style="width:100%">';
        echo '<div class="container">';
        echo '<h2>' . $row["เลขห้อง"] . '</h2>';
        echo '<p class="title">รายละเอียด :</p>';
        echo '<p>' . $row["รายละเอียด"] . '</p>';
        echo '<center><p> ราคาห้อง ' . $row["ราคาห้อง"] . ' บาท</p>';

      // Check if resident information is present
      if (!empty($row["ชื่อผู้อยู่"]) && !empty($row["ที่อยู่"]) && !empty($row["เบอร์โทร"])) {
        echo '<p>สถานะ :<span style="color: red;"> ไม่ว่าง</span></p>';
      } else {
        echo '<p>สถานะ :<span style="color: green;"> ว่าง</span></p>';
        echo '<p><a class="button" href="add_residents_a.php?room=' . $row["เลขห้อง"] . '">จองห้อง</a></p>';
      }
      echo '</center>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
  } else {
    echo "No residents found.";
  }
  ?>
</div>
</body>
</html>