<!DOCTYPE html>
<html>
<head>
  <!-- Your HTML head content -->
</head>
<body>
  <h1>Room <?php echo $_GET['room']; ?> Renters</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Start Date</th>
        <th>End Date</th>
      </tr>
    </thead>
    <tbody>
      <!-- Here you can loop through your renters data and display it in the table -->
      <tr>
        <td>Renter 1</td>
        <td>Start Date 1</td>
        <td>End Date 1</td>
      </tr>
      <tr>
        <td>Renter 2</td>
        <td>Start Date 2</td>
        <td>End Date 2</td>
      </tr>
      <!-- Add more rows for other renters -->
    </tbody>
  </table>
</body>
</html>
