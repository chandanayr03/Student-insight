<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css1/style.css" />
    <title>Student Insight</title>
  </head>
  <body class="app sidebar-mini">
 <?php
  error_reporting(0);
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
 $query = mysqli_query($con, "SELECT * FROM student WHERE username = '".$username. "'");
	
  if(mysqli_num_rows(  $query) > 0){
   echo "<div class='form'><h3>!!!!!!!!!!! user name already exist please user other.</h3><br/>Click here to try again <a href='entregistration.php'>Register</a></div>";
}else{
        $query = "INSERT into `student` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $sql = "INSERT INTO `userprofile` (studentid) VALUES ('$username')";
        $res = mysqli_query($con, $sql);
        $result = mysqli_query($con,$query);
}
        if($result){	?>
          <script type="text/javascript">
                  window.alert(" You are registered successfully. ");
                  window.location="studentlogin.php";
                  </script>
            <?php 
            
        }
    }else{
?>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="http://localhost/pocketclinic/index.html">Student Insight</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      
    </header>
    <!-- Sidebar menu-->
 
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   <aside class="app-sidebar">
      
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="index.php"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">HOME</span></a></li>
		 <li><a class="app-menu__item " href="index.php#about"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">KNOW MORE</span></a></li>
		  <li><a class="app-menu__item " href="index.php#contact"><i class="app-menu__icon fa fa-phone"></i><span class="app-menu__label">CONTACT US</span></a></li>
         </ul>
		 </aside>


  
          </ul>
    <main class="app-content">
      <div class="app-title">
        <div> 
        <h1><i class="fa fa-sign-language"></i>Student Insight</h1>
          
        </div>
       
      </div>
     
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
 <div class="form">
<h1>Registration</h1>
  <div class="form">
<form name="studentregistration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password"  id="password" placeholder="Password" required />
<input type="password" name="password"   id="confirm_password" placeholder="Confirm Password" required />
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<input type="submit" name="submit" value="Register" />
</form>
<p>Already registered ? <a href='entlogin.php'>Login Here</a></p>
</div>
<?php } ?>
          </div>
        </div></Div>
		<div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
      
			  
              
            <div class="tile-body">
             <h3 class="title">Welcome Service provider</h3><br>
			  <br>
              <b>"better service which keep track the business in healthy way, doing a business is not only for money it also for good service for others"</b>
			  <br>
			  <br>
			  <br><br>
			  <b> "Your service which helps to save the life , please don't comeback for other reasons"<b><br><br> <br><br>
            </div>
          </div>
        </div></DIV></div>
 <marquee behavior="scroll" direction="left">
																		  
                  
                              
                                  
                                    <img src="assets/img/faces/face-4.jpg" alt="..."/>  <img src="assets/img/faces/face-2.jpg" alt="..."/><img src="assets/img/faces/face-1.jpg" alt="..."/>

                                      

                             
                         
                           
                        </marquee>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
   
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>