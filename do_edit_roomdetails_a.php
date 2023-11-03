<?php
require("connect_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $เลขห้อง = $_POST["เลขห้อง"];
    $รายละเอียด = $_POST["รายละเอียด"]; // Add a semicolon here
    $ราคาห้อง = $_POST["ราคาห้อง"]; // Use the field name that stores the room price

    // SQL query to update the data
    $sql = "UPDATE residents_a 
            SET ราคาห้อง = '$ราคาห้อง',
                รายละเอียด ='$รายละเอียด'
            WHERE เลขห้อง = '$เลขห้อง'";

    // Perform the data update in the database
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Data updated successfully, redirect back to the page where you show the room information
        header("location: show_roomdetails_a.php");
        exit();
    } else {
        // An error occurred during the update
        echo "An error occurred while updating the data: " . mysqli_error($conn);
    }
} else {
    // If it's not a POST request, redirect to the edit page with the เลขห้อง parameter
    header("location: edit.php?เลขห้อง=" . $_POST["เลขห้อง"]);
    exit();
}
?>
