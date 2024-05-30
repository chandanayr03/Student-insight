<?php
$db="student_insight";
$user="root";
$pass="";
$server="localhost";
// Get values from the form or any source
$q_id = $_POST['p1'];
$answer = $_POST['p3'];
$f_id = $_POST['p2'];

// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "UPDATE qna SET answer = ?, f_id = ? WHERE q_id = ?";

// Prepare and bind parameters
$stmt = $con->prepare($sql);
$stmt->bind_param("ssi", $answer, $f_id, $q_id);

// Execute the statement
if ($stmt->execute()) {
    echo "Record updated successfully";
    ?>
    <script type="text/javascript">
        window.alert("Your answer added successfully");
        window.location="ResponseQNA.php";
    </script>
    <?php
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
mysqli_close($con);
?>
