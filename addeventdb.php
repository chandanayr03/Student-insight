<?php
$db = "student_insight";
$user = "root";
$pass = "";
$server = "localhost";
$a = $_POST['p1'];
$b = $_POST['p2'];
$c = $_POST['p3'];


$trn_date = date("Y-m-d H:i:s");

// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO event (subject, about, date) 
        VALUES ( '$a', '$b', '$c')";

// Execute the statement
if (mysqli_query($con, $sql)) {
    echo "Record inserted";
    ?>
    <script type="text/javascript">
        window.alert("Your data added successfully");
        window.location="AddEvent.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>