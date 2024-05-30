<?php 
$db="student_insight";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];




$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="delete from facultyprofile where facultyid='$a'";
	$sql1="delete from faculty where username='$a'";
	if($con->query($sql)===TRUE&&$con->query($sql1)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("faculty information deleted  successfully ");
            window.location="ViewFaculty.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>