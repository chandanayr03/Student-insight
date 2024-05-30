<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "student_insight";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$branch = $_POST['p1'];
$sem = $_POST['p2'];
$subject = $_POST['p3'];
$date = $_POST['p4'];
$studentid = $_POST['p5'];
$status = $_POST['p6'];


// Loop through the attendance data submitted via POST
    // Prepare SQL statement
    for ($i = 0; $i < count($branch); $i++) {
        $sql = "INSERT INTO attendance (branch, semester, subject, date, studentid, status) VALUES ('$branch[$i]', '$sem[$i]', '$subject[$i]', '$date[$i]', '$studentid[$i]', '$status[$i]')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
     else {
        echo "Attendance saved successfully";
        ?>
        <script type="text/javascript">
            window.alert("Your Attendance added successfully");
            window.location="AddAttendance.php";
        </script>
        <?php
    }

}
// Close connection
$conn->close();
?>