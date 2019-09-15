<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Google Map</title>
<style>
    #map{
      height:400px;
      width:100%;
    }
</style>

<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/aos.css">
<link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
           <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <a href="index.html" class="site-logo">
              <img src="images/kidfirst.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
        </div>
      </div>

    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
      <div class="container">
        <div class="d-flex align-items-center">
            <div class="mx-auto">
                <nav class="site-navigation position-relative text-left" role="navigation">
                  <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                    <li class="active"><a href="index.html" class="nav-link text-left">Home</a></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Education</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Swimming pool</span><span class="caret"></span></a></li>
                        <ul class="dropdown-submenu">
                          <li><a href="swimming_pool.html" class="nav-link text-left">Guideline</a></li>
                          <li><a href="pool_quiz.html" class="nav-link text-left">Quiz</a></li>
                        </ul>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Beach</span><span class="caret"></span></a>
                          <ul class="dropdown-submenu">
                              <li><a href="beach.html" class="nav-link text-left">Guideline</a></li>
                              <li><a href="beach_quiz.html" class="nav-link text-left">Quiz</a></li>
                            </ul>
                          </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">River and Lake</span><span class="caret"></span></a><ul class="dropdown-submenu">
                            <li><a href="river.html" class="nav-link text-left">Guideline</a></li>
                            <li><a href="river_quiz.html" class="nav-link text-left">Quiz</a></li>
                          </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Boat</span><span class="caret"></span></a>
                          <ul class="dropdown-submenu">
                              <li><a href="boat.html" class="nav-link text-left">Guideline</a></li>
                              <li><a href="boat_quiz.html" class="nav-link text-left">Quiz</a></li>
                            </ul>
                        </li>
                    </ul></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Where to go</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                    <li><a href="swimschool.html" class="nav-link text-left">Swim School</a></li>
                </ul></li>
                    <li><a href="contact.html" class="nav-link text-left">Factor & Info</a></li>
                    <li><a href="contact.html" class="nav-link text-left">About us</a></li>
                  </ul>
                </nav>
              </div>
        </div>
      </div>
    </div>
    </div>




<?php
//connect to database
  $DB_SERVER = "database-1.cdladq1wak27.us-west-2.rds.amazonaws.com";
  $DB_USERNAME = "master";
  $DB_PASSWORD = "master123";
  $DB_DATABASE = "innodb";

  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD);

/* check connect success or not
  if(!$connection){
        echo "fail";
  }else{
        echo "success";
 }*/

  //if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();


  $database = mysqli_select_db($connection, $DB_DATABASE);
    ?>



<!-- Get form -->
<form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
  <table border="0">
    <tr>
      <h1>Search Swim School</h1>
    </tr>
    <tr>
      <td>Enter your Postcode</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="POSTCODE" maxlength="45" size="30" />
      </td>
      <td>
        <input type="submit" value="SEARCH" />
      </td>
    </tr>
  </table>
</form>

<div>
<!-- Display table data. -->
<table border="1" cellpadding="2" cellspacing="2">
  <!--tr>
    <td>NAME</td>
    <td>ADDRESS</td>
    <td>SUBURB</td>
    <td>POSTCODE</td>
    <td>BUSINESS CATEGORY</td>
    <td>CONTACT</td>
    <td>WEBSITE</td>
  </tr-->


<?php
//get input data
$postcode = $_POST['POSTCODE'];

if($postcode == "all"){
    //show all data from table
    $result = mysqli_query($connection, "SELECT * FROM schoolSheet");
}
else{
    //show related postcode data
    $result = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE postcode='$postcode'");
}

$nameArray = [];
$latArray = [];
$longArray = [];

if(mysqli_num_rows($result) != 0){
echo "<table border='1'>
    <tr>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>SUBURB</th>
        <th>POSTCOED</th>
        <th>BUSINESS CATEGORY</th>
        <th>CONTACT</th>
        <th>WEBSITE</th>
    </tr>";

while($query_data = mysqli_fetch_row($result)) {
  //add data into array
  array_push($nameArray,$query_data[0]);
  array_push($latArray,$query_data[7]);
  array_push($longArray,$query_data[8]);

  echo "<tr>";
  echo "<td>",$query_data[0], "</td>",
       "<td>",$query_data[1], "</td>",
       "<td>",$query_data[2], "</td>",
       "<td>",$query_data[3], "</td>",
       "<td>",$query_data[4], "</td>",
       "<td>",$query_data[5], "</td>",
       "<td>",$query_data[6], "</td>";
  echo "</tr>";

}
}
?>

</table>
    </div>

<div id="map"></div>
</div>

<!-- Clean up. -->
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>

<script>
    function initMap(position){
        // Map options
        var options = {
            zoom:12,
            center:{lat:-37.8409,lng:144.9464}
        }
        // get database data from php
        var nameArray = <?php echo json_encode($nameArray); ?>;
        var latArray = <?php echo json_encode($latArray); ?>;
        var longArray = <?php echo json_encode($longArray); ?>;
        //console.log(nameArray);
        //console.log(latArray);
        //console.log(longArray);

        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);
        //setting boundary
        var bounds  = new google.maps.LatLngBounds();
        //content
        var infowindow = new google.maps.InfoWindow;

        if(nameArray.length != 0){
        //marker
        var marker, i;
        for (i = 0; i < nameArray.length; i++) {
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(latArray[i], longArray[i]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                 infowindow.setContent(nameArray[i]);
                 infowindow.open(map, marker);
             }
        })(marker, i));

            //map.setZoom(12);
            //map.setCenter(marker.getPosition());

            //extend zoom according to position
            var loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
            bounds.extend(loc);
        }

        //re-center map
        map.fitBounds(bounds);
        map.panToBounds(bounds);}
}
       /*
      // Array of markers
      var markers = [
        {
          coords:{lat:-37.8398,lng:144.9132},
          content:'LSV Test Page'
        },
        {
          coords:{lat:-37.8221,lng:144.9859},
          content:'Klim Swim Richmond'
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });


        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }*/
  </script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkAJUTwYmqWrBWDjRAp0bRy8MSG2BHuXU&callback=initMap">
</script>


</body>
</html>
