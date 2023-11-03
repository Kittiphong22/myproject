<?php
require("connect_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the totalCost value from the POST data
    $totalCost = floatval($_POST["totalCost"]);

    // Check if the room number is set in the POST data
    if (isset($_POST['roomNumber'])) {
        $roomNumber = $_POST['roomNumber'];

        // Build an SQL UPDATE query to update ค่าน้ำ and ค่าไฟ columns
        $updateCostQuery = "UPDATE residents_a 
                            SET ค่าน้ำค่าไฟ = $totalCost
                            WHERE เลขห้อง = '$roomNumber'";

        // Execute the SQL query
        $result = mysqli_query($conn, $updateCostQuery);

        if ($result) {
            // Database update successful
            header("location: show_residents_a.php");
            exit();
        } else {
            // Handle the database update error
            echo "Error updating costs: " . mysqli_error($conn);
        }
    } else {
        // Handle the case where roomNumber is not set in the POST data
        echo "Room number not provided.";
    }
} else {
    // Handle the case where it's not a POST request
    echo "Invalid request method.";
}
?>
