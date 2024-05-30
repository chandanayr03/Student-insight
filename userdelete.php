<?php 
$db="student_insight";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];




$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="delete from userprofile where studentid='$a'";
	$sql1="delete from student where username='$a'";
	if($con->query($sql)===TRUE&&$con->query($sql1)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("user information deleted  successfully ");
            window.location="ViewStudent.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>