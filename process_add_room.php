<?php
// Include the file that connects to your database or data structure
require("connect_db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roomNumber = $_POST['roomNumber'];
    $imageURL = $_POST['imageURL'];
    $airConditioner = $_POST['airConditioner'];
    $waterHeater = $_POST['waterHeater'];
    $tv = $_POST['tv'];
    $price = $_POST['price'];

    // Add room data to your data structure (in this case, an array)
    $roomData[$roomNumber] = array(
        'image' => $imageURL,
        'description' => 'รายละเอียด ' . $roomNumber, // You can customize the description as needed
        'airConditioner' => $airConditioner,
        'waterHeater' => $waterHeater,
        'tv' => $tv,
        'price' => $price,
    );

    // Save the updated data structure to a database or file, if applicable

    // Redirect back to the room listing page
    header("Location: building.php");
}
?>
