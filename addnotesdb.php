<?php
$db = "student_insight";
$user = "root";
$pass = "";
$server = "localhost";
$a = $_POST['p1'];
$b = $_POST['p2'];
$c = $_POST['p3'];
$d = $_POST['p4'];
$trn_date = date("Y-m-d H:i:s");

// File upload handling
$target_dir = "uploads/"; // Directory where the file will be uploaded
$target_file = $target_dir . basename($_FILES["p5"]["name"]); // Path of the uploaded file
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (you can adjust the size limit)
if ($_FILES["p5"]["size"] > 50000000) { // 50MB
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["p5"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["p5"]["name"]). " has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// Create connection
$con = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO notes (f_id, branch, semester, subject, note, ndate) 
        VALUES ('$e', '$a', '$b', '$c', '$target_file', '$trn_date')";

// Execute the statement
if (mysqli_query($con, $sql)) {
    echo "Record inserted";
    ?>
    <script type="text/javascript">
        window.alert("Your notes added successfully");
        window.location="AddNotes.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>