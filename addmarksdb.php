<?php
$db = "student_insight";
$user = "root";
$pass = "";
$server = "localhost";
$a = $_POST['p1'];
$b = $_POST['p2'];
$c = $_POST['p3'];
$d = $_POST['p4'];
$e = $_POST['p5'];

$trn_date = date("Y-m-d H:i:s");

// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO cls_cancellation (branch, semester, date, faculty_id, note, mdate) 
        VALUES ( '$a', '$b', '$c','$d','$e','$trn_date')";

// Execute the statement
if (mysqli_query($con, $sql)) {
    echo "Record inserted";
    ?>
    <script type="text/javascript">
        window.alert("Your data added successfully");
        window.location="AddMarks.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>