
<?php


include("auth.php");  ?>
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
         <li><a class="app-menu__item " href="viewFeeReminder.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">View Free Reminder</span></a></li>
         <li><a class="app-menu__item " href="viewevents.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Event</span></a></li>
         <li><a class="app-menu__item " href="ViewAssegnment.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">View Assegnment</span></a></li>
         <li><a class="app-menu__item active" href="ViewNotes.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Notes</span></a></li>
         <li><a class="app-menu__item " href="ViewAttendance.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Attendance</span></a></li>
         <li><a class="app-menu__item " href="viewCls_Cancellation.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Class Cancellation</span></a></li>
 
        </li>
      </ul>

    </aside>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">SEARCH SUBJECT AND LEARN </a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH SBJECT HERE!!!</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                
              <div class="form-group">
            <label for="exampleInputEmail1">SELECT BRANCH</label>

            <div class="tile-body">
            <select class="form-control" name="p11">
    <option value="NULL">---SELECT BRANCH---</option>
    <option value="BA">BA</option>
    <option value="B.COM">B.COM</option>
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="OTHER">OTHER</option>
</select>            </div>
            </div>
              <div class="form-group col-md-3">
                  <label class="control-label">SELECT SUBJECT</label>
                    <select class="form-control" name="p1">
                    <option value="NULL">---SELECT SUBJECT---</option>
            <option value="C">C</option>
            <option value="Java">Java</option>
            <option value="C++">C++</option>
            <option value="Python">Python</option>
            <option value="OTHER">OTHER</option>
      
            </select>
                </div>
               
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		   <?php
	 error_reporting(0);
	 
	 $a=$_POST['p1'];

	 $aa=$_POST['p11'];


$query="SELECT * FROM notes where branch='$aa' and subject='$a' "; // selecting data through mysql_query()



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
while($data = mysqli_fetch_array($result))
{


?>
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
          
            <div class="table-responsive">
			<h1>subject: <?php echo $data['subject']; ?></h1>

<object data="<?php echo $data['note']; ?>" type="application/msword" width="600" height="400">
        <p>It appears you don't have a document viewer for this type of file. You can <a href="<?php echo $data['note']; ?>">click here to download the document file.</a></p>
    </object>
            </div>
          </div>
        </div>
      </div>
      <?php  }?>
	   
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

<script>
        // Fetch the converted PDF file and display it
        fetch('c:\Users\admin\Downloads\dummy.pdf') // Replace with the actual path to your converted PDF
            .then(response => response.blob())
            .then(blob => {
                const objectUrl = URL.createObjectURL(blob);
                const iframe = document.createElement('iframe');
                iframe.src = objectUrl;
                iframe.width = '100%';
                iframe.height = '600px';
                document.getElementById('document-preview').appendChild(iframe);
            })
            .catch(error => console.error('Error fetching document:', error));
    </script>

  </body>
</html>