<?php 
$db="student_insight";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO video VALUES('$a', '$b', '$c')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Subject Added Succesfully ");
            window.location="addvideo.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>