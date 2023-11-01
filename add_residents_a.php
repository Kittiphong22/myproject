<!DOCTYPE html>
<html>
<style>
    /* Your existing CSS styles for the table */
    
    /* Custom style for the "Add Resident" button */
    .btn-add-resident {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 16px;
        text-decoration: none; /* Remove underline for the link */
    }
    
    .btn-add-resident:hover {
        background-color: #0056b3; /* Change color on hover */
    }
</style>


<head>
    <title>Residents List</title>
    <!-- Include your CSS and other head content here -->
</head>
<body>
    <div class="container-fluid my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item">
                    <a class="link-body-emphasis" href="building.php">
                        <svg class="bi" width="13" height="16"><use xlink:href="#house-door-fill"></use></svg>
                        <span class="visually-hidden">Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
    </div>

    <center>
        <div class="center">ตึก B</div>
        <style>
            /* Your CSS styles for the table here */
        </style>
        <table>
            <!-- Table headers and data rows here -->
        </table>

        <!-- Add button with a custom class -->
        <a href="add_residents_b.php" class="btn btn-add-resident">Add Resident</a>
    </center>
</body>
</html>
