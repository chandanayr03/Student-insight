<?php
$db = "student_insight";
$user = "root";
$pass = "";
$server = "localhost";
$a = $_POST['p1'];
$b = $_POST['p2'];
$c = $_POST['p3'];
$e = $_POST['p4'];
$f = $_POST['p5'];
$g = "";
$h = "";
$trn_date = date("Y-m-d H:i:s");

// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO qna (s_id, branch, semester, subject, question, answer, f_id, qdate) 
        VALUES ('$e', '$a', '$b', '$c', '$f', '$g', '$h','$trn_date')";

// Execute the statement
if (mysqli_query($con, $sql)) {
    echo "Record inserted";
    ?>
    <script type="text/javascript">
        window.alert("Your question added successfully");
        window.location="AskQNA.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>