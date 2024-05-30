<?php
$db = "student_insight";
$user = "root";
$pass = "";
$server = "localhost";
$b = $_POST['p1'];
$c = $_POST['p3'];
$f = $_POST['p5'];
$trn_date = date("Y-m-d H:i:s");

// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO feedback (f_id, subject, feedback, fdate) 
        VALUES ('$b', '$c', '$f', '$trn_date')";

// Execute the statement
if (mysqli_query($con, $sql)) {
    echo "Record inserted";
    ?>
    <script type="text/javascript">
        window.alert("Your feedback added successfully");
        window.location="feedback.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>