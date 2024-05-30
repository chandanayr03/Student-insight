<?php
include("auth.php"); // Include authentication file

// Check if form is submitted
if(isset($_POST['submit'])) {
    $testID = $_POST['p1'];
    $username = $_SESSION['username'];

    // Establish database connection
    $mysql_hostname = "localhost";
    $mysql_user     = "root";
    $mysql_password = "";
    $mysql_database = "student_insight";

    $con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

    // Check if connection is successful
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Fetch data from the database
    $query  = "SELECT * FROM marks WHERE semester='$testID' AND s_id='$username'";
    $result = mysqli_query($con, $query);

    // Fetch correct answers
}
?>

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
    <title>LEARN SIGN</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">Student Insight</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
             
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="studentdashboard.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Student Dashborad</span></a></li>
         <li><a class="app-menu__item " href="ViewTimetable.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Timetable</span></a></li>
         <li><a class="app-menu__item active" href="viewFeeReminder.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">View Free Reminder</span></a></li>
         <li><a class="app-menu__item " href="viewevents.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Event</span></a></li>
         <li><a class="app-menu__item " href="ViewAssegnment.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">View Assegnment</span></a></li>
         <li><a class="app-menu__item " href="ViewNotes.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Notes</span></a></li>
         <li><a class="app-menu__item " href="ViewAttendance.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Attendance</span></a></li>
         <li><a class="app-menu__item " href="viewCls_Cancellation.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Class Cancellation</span></a></li>
 
        </li>
      </ul>

    </aside>
    <main class="app-content">
      <div class="app-title">
      <?php
	 error_reporting(0);
   $a=$_POST['p1'];
   $b=$_POST['p2'];
   $sid=$_SESSION['username'];
$query="SELECT * FROM feereminder WHERE sid='$sid'"; // selecting data through mysql_query()



$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "student_insight";

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()



?>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">FEE REMINDER</a></li>
        </ul>
      </div>
   
	<div class="clearfix"></div>
       
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="tile">
    <?php if(isset($result)): ?>
        <h2>FEE REMINDER DETAILS:</h2>
        <table border="1">
            <thead>
                <tr>
                    <th width="300px">BRANCH</th>
                    <th width="300px">SEMESTER</th>
                    <th width="300px">SUBJECT</th>
                    <th width="300px">ABOUT</th>
                    <th width="300px">TOTAL AMOUNT</th>

                    <th width="300px">FIRST INSTALLMENT AMOUNT</th>
                    <th width="300px">FIRST INSTALLMENT DUE DATE</th>
                    <th width="300px">SECOND INSTALLMENT AMOUNT</th>
                    <th width="300px">SECOND INSTALLMENT DUE DATE</th>
                </tr>
            </thead>
            <tbody>
    <?php
    while ($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $data['branch']; ?></td>
            <td><?php echo $data['semester']; ?></td>
            <td><?php echo $data['subject']; ?></td>
            <td><?php echo $data['about']; ?></td>
            <td><?php echo $data['total_amount']; ?></td>

            <td><?php echo $data['first_installment_amount']; ?></td>
            <td><?php echo $data['first_installment_due_date']; ?></td>
            <td><?php echo $data['second_installment_amount']; ?></td>
            <td><?php echo $data['second_installment_due_date']; ?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
</tbody>
        </table>
    <?php endif; ?>
  </div>
        </div>
    </div>
</div>
      </div>      

   
	   
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
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
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