<?php


include("auth.php");  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
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
    <title>Student Insight</title>
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
         
             
            <li><a class="dropdown-item" href="facultylogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
        <p class="app-sidebar__user-name">ADMIN</p>

        </div>
      </div>
      <ul class="app-menu">
     <li><a class="app-menu__item " href="admindashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
     <li><a class="app-menu__item active" href="AddStudent.php"><i class="app-menu__icon fa fa-plus-square"></i><span class="app-menu__label">Add Student</span></a></li>

     <li><a class="app-menu__item " href="ViewStudent.php"><i class="app-menu__icon fa fa-plus-square"></i><span class="app-menu__label">View Student</span></a></li>
     <li><a class="app-menu__item " href="AddFaculty.php"><i class="app-menu__icon fa fa-play-circle"></i><span class="app-menu__label">Add Faculty</span></a></li>
     <li><a class="app-menu__item " href="ViewFaculty.php"><i class="app-menu__icon fa fa-play-circle"></i><span class="app-menu__label">View Faculty</span></a></li>
     
    <li><a class="app-menu__item " href="AddaAssignment.php"><i class="app-menu__icon fa fa-calendar-plus-o"></i><span class="app-menu__label">Add Assignment</span></a></li>
        <li><a class="app-menu__item" href="AddaNotes.php"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Add Notes</span></a></li>
	  
        <li><a class="app-menu__item" href="AddaTimetable.php"><i class="app-menu__icon fa fa-calendar-plus-o"></i><span class="app-menu__label">Add Timetable</span></a></li>
        <li><a class="app-menu__item" href="AddFeeReminder.php"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Add Fee Reminder</span></a></li>
        <li><a class="app-menu__item" href="AddEvent.php"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Add Event</span></a></li>

</ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">Student Insight</a></li>
        </ul>
      </div>
      <?php
	 error_reporting(0);
	 $a = isset($_GET['username']) ? $_GET['username'] : '';


$query="SELECT * FROM facultyprofile where facultyid='$a'"; // selecting data through mysql_query()
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
      <div class="row">
        
		 <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Faculty Registeration</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="" method="post">
                <div class="form-group row">
                  <label class="control-label col-md-3">FIRST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p1" style="text-transform:uppercase" type="text" placeholder="Enter first name" value="<?php echo $data['firstname']; ?>" required >
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">LAST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p2" style="text-transform:uppercase" type="text" placeholder="Enter last name" value="<?php echo $data['lastname']; ?>" required >
                  </div>
                </div>
                <div class="form-group row">
            <label class="control-label col-md-3">BRANCH</label>
              			<div class="col-md-8">
			<select class="form-control" name="p3" required >
       
			  <option value="NULL">---SELECT--</option>
        <option value="BA">BA</option>
    <option value="B.COM">B.COM</option>
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="OTHER">OTHER</option>

            </select>
			</div>
          </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">PHONE NUMBER</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p4" type="number" maxlength="13" placeholder="Enter phone number" value="<?php echo $data['phonenumber']; ?>"required >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">FACULTY ID</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="p5" value="<?php echo $data['facultyid']; ?>" required >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">PASSWORD</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="p10" value="<?php echo $data['password']; ?>" required >
                  </div>
                </div>
                <div class="form-group row" >
                  <label class="control-label col-md-3">ADDRESS</label>
                  <div class="col-md-8" id="locationField">
                    <textarea class="form-control" rows="2" name="p6" style="text-transform:uppercase" id="autocomplete" required  value="<?php echo $data['address']; ?>"placeholder="Enter your address"
             onFocus="geolocate()" type="text"><?php echo $data['address']; ?></textarea>
                  </div>
                </div>
			
	<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPJaq8h4L3_LgeKhYA9c3ZS6rLuQF75gU&libraries=places&callback=initAutocomplete"
        async defer></script><br><br>
                
					<div class="form-group row">
            <label class="control-label col-md-3">WORK EXPERIENCE</label>
			<div class="col-md-8">
			<select class="form-control" name="p7" required >
			  <option value="NULL">---SELECT--</option>
              <option value="1">0-1 year</option>
              <option value="2">2 - 3 year</option>    
              <option value="3">4 - 8 year</option>
              <option value="4">More than 8 year</option>
       
      
            </select></div>
          </div>
		 
	
		  <div class="form-group row">
            <label class="control-label col-md-3">SPECIALISATION</label>
              			<div class="col-md-8">
			<select class="form-control" name="p8" required >
       
			  <option value="NULL">---SELECT--</option>
			 <option value="SPEECH/HEARING"> SPEECH / HEARING</option>
              <option value="Audiometrists">Audiometrists</option>
              <option value="Otolaryngologists">Otolaryngologists </option>
              <option value="Otologists">Otologists</option>
              <option value="Speech_pathologists">Speech_pathologists</option>
               <option value="Dermatologist">Dermatologist</option>  
			   <option value="Faculty">Faculty</option>  
            </select>
			</div>
          </div>
          <div class="form-group row">
                  <label class="control-label col-md-3">EMAIL</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p9" style="text-transform:uppercase" type="text" placeholder="Enter Email" value="<?php echo $data['email']; ?>"required >
                  </div>
                </div>
                <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                     <input type = "submit" value ="Submit" name = "submit"/>
                </div>
              </div>
            </div>
               
              </form>
            </div>
           
          </div>
        </div>
        <?php } ?>

      </div>
	   <?php
         if(isset($_POST["submit"])){
          $b=$_POST["p1"];
          $c=$_POST["p2"];
          $d=$_POST["p3"];
          $e=$_POST["p4"];
          $f=$_POST["p5"];
          $g=$_POST["p6"];
          $h=$_POST["p7"];
          $k=$_POST["p8"];
          $l=$_POST["p9"];
          $m=$_POST["p10"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student_insight";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
$sql = "UPDATE facultyprofile  SET firstname='$b',lastname='$c',branch='$d',phonenumber='$e',facultyid='$f',address='$g',workexperience='$h',specilisation='$k',email='$l',password='$m' where facultyid='$a'";

            if (mysqli_query($conn, $sql)) {?>
              <script type="text/javascript">
                      window.alert("updated successfully ");
                      window.location="ViewFaculty.php";
                      </script>
                <?php  } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
	  
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