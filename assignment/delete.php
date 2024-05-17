<?php
include 'db.php';

if (isset($_GET['stud_ID'])) {
    $stud_ID = $_GET['stud_ID'];

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM stud_info WHERE stud_ID = ?");
    $stmt->bind_param("i", $stud_ID);

    if ($stmt->execute()) {
        echo '<script>alert("Successfully Deleted.");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo '<script>alert("Deletion Failed. No ID specified.");</script>';
}

// Redirect to the main page
echo "<script>window.location = 'home.php';</script>";

// Close the database connection
mysqli_close($conn);
?>
