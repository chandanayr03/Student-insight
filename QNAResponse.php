<!DOCTYPE html>
<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
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
	<script type="text/javascript">
     function initGeolocation()
     {
        if( navigator.geolocation )
        {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
        }
     }

     function success(position)
     {

         document.getElementById('long').value = position.coords.longitude;
         document.getElementById('lat').value = position.coords.latitude
     }

     function fail()
     {
        // Could not obtain location
     }

   </script>  
  </head>
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">LEARN SIGN</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
             
            <li><a class="dropdown-item" href="enterlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
        <li><a class="app-menu__item active" href="studentdashboard.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Student Dashborad</span></a></li>
         <li><a class="app-menu__item " href="ViewVideoClass.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Timetable</span></a></li>
         <li><a class="app-menu__item " href="ViewNotes.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">View Free Reminder</span></a></li>
         <li><a class="app-menu__item " href="viewmarks.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Event</span></a></li>
         <li><a class="app-menu__item " href="ViewAttendance.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">View Assegnment</span></a></li>
         <li><a class="app-menu__item " href="AskQNA.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Notes</span></a></li>
         <li><a class="app-menu__item " href="QNAResponse.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Attendance</span></a></li>
         <li><a class="app-menu__item " href="feedback.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Class Cancellation</span></a></li>
 
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
$query="SELECT * FROM qna WHERE branch='$a' and semester='$b' and s_id='$sid'"; // selecting data through mysql_query()



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
          <li class="breadcrumb-item"><a href="">QNA</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <h1>View QNA</h1>
    <form action="" method="post">
    <div class="form-group">
            <label for="exampleInputEmail1">BRANCH</label>

            <div class="tile-body">
            <select class="form-control" name="p1">
    <option value="NULL">---SELECT BRANCH---</option>
    <option value="BA">BA</option>
    <option value="B.COM">B.COM</option>
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="OTHER">OTHER</option>
</select>            </div>
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">SEMESTER</label>
            <div class="tile-body">
            <select class="form-control" name="p2">
            <option value="NULL">---SELECT SEMESTER---</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
            <option value="5th">5th</option>
            <option value="6th">6th</option>
            <option value="OTHER">OTHER</option>
        </select>            </div>
            </div>
        <button type="submit" class="btn btn-primary" name="submit">Search</button>
    </form>
            </div>
          </div>
        </div>
		   
    
	<div class="clearfix"></div>
       
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="tile">
    <?php if(isset($result)): ?>
        <h2>Your Results:</h2>
        <table border="1">
            <thead>
                <tr>
                    <th width="300px">BRANCH</th>
                    <th width="300px">SEMESTER</th>
                    <th width="300px">SUBJECT</th>
                    <th width="300px">QUESTION</th>
                    <th width="300px">ANSWER</th>
                    <th width="300px">FACULTY</th>
                </tr>
            </thead>
            <tbody>
    <?php
    $i = 0;
    while ($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $data['branch'];?></td>
            <td><?php echo $data['semester']; ?></td>
            <td><?php echo $data['subject']; ?></td>
            <td><?php echo $data['question']; ?></td>
            <td><?php echo $data['answer']; ?></td>
            <td><?php echo $data['f_id']; ?></td>

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