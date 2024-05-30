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
$f = $_POST['p6'];
$g = $_POST['p7'];
$h = $_POST['p8'];
$i = $_POST['p9'];
$trn_date = date("Y-m-d H:i:s");

// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO attendance (branch, semester, subject, month, aweek, studentid, total_cls, attended_cls) 
        VALUES ( '$a', '$b', '$c', '$e', '$f', '$g', '$h', '$i')";

// Execute the statement
if (mysqli_query($con, $sql)) {
    echo "Record inserted";
    ?>
    <script type="text/javascript">
        window.alert("Your attendance added successfully");
        window.location="AddAttendance.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>