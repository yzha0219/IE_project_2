<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Google Map</title>
<style>
    #map{
      height:500px;
      width:100%;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap"
    rel="stylesheet">
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
                  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"> <span class="nav-label">Education</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false"> <span class="nav-label">Swimming pool</span><span
                            class="caret"></span></a></li>
                      <ul class="dropdown-submenu">
                        <li><a href="swimming_pool.html" class="nav-link text-left">Guideline</a></li>
                        <li><a href="pool_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                      </ul>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false"> <span class="nav-label">Beach</span><span class="caret"></span></a>
                        <ul class="dropdown-submenu">
                          <li><a href="beach.html" class="nav-link text-left">Guideline</a></li>
                          <li><a href="beach_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false"> <span class="nav-label">River and Lake</span><span
                            class="caret"></span></a>
                        <ul class="dropdown-submenu">
                          <li><a href="river.html" class="nav-link text-left">Guideline</a></li>
                          <li><a href="river_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false"> <span class="nav-label">Boat</span><span class="caret"></span></a>
                        <ul class="dropdown-submenu">
                          <li><a href="boat.html" class="nav-link text-left">Guideline</a></li>
                          <li><a href="boat_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"> <span class="nav-label">Where to go</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="swimschool.php" class="nav-link text-left">Swim School</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"> <span class="nav-label">First Aid</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="cpr.html" class="nav-link text-left">CPR</a></li>
                      <li><a href="sea_creature.html" class="nav-link text-left">Sea Creature attacking</a></li>
                    </ul>
                  </li>
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
// check connect success or not
/*  if(!$connection){
        echo "fail";
  }else{
        echo "success";
 }
*/
  //if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $database = mysqli_select_db($connection, $DB_DATABASE);
    ?>



<!-- Get form -->
<form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
  <table border="0">
    <tr>
    <h1 style="color: #d33e04">Swim School Locator</h1>
    </tr>
    <tr>
      <td>Enter your postcode to find swim school near by you</td>
    </tr>
      <td>
        <input type="text" name="POSTCODE" maxlength="45" size="30" />
      </td>
<td><select name="DIST">
  <option value="1km">1km</option>
  <option value="5km">5km</option>
  <option value="10km">10km</option>
</select>
</td>
      <td>
        <input type="submit" value="SEARCH" />
      </td>

  </table>
</form>

                    <div class="container">
        <div class="row">
            <div class="col-md-6">

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
$distance = $_POST['DIST'];

$resultall = mysqli_query($connection, "SELECT * FROM schoolSheet");
$nameallArray = [];
$addressallArray = [];
$suburballArray = [];
$postcodeallArray = [];
$categoryallArray = [];
$contactallArray = [];
$websiteallArray = [];
$latallArray = [];
$longallArray = [];

while($query_data = mysqli_fetch_row($resultall)) {
//add data into array
array_push($nameallArray,$query_data[0]);
array_push($addressallArray,$query_data[1]);
array_push($suburballArray,$query_data[2]);
array_push($postcodeallArray,$query_data[3]);
array_push($categoryallArray,$query_data[4]);
array_push($contactallArray,$query_data[5]);
array_push($websiteallArray,$query_data[6]);
array_push($latallArray,$query_data[7]);
array_push($longallArray,$query_data[8]);
}

if($postcode == "all"){
//show all data from table
$result = mysqli_query($connection, "SELECT * FROM schoolSheet");
}
else{
//show related postcode data
//    $result = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE surburb='$postcode'");
// $result = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE postcode='$postcode' OR `Business Category`='$postcode' OR surburn='$postcode'");
$result = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE postcode='$postcode' OR suburb='$postcode' OR businesscategory='$postcode'");
}

$nameArray = [];
$addressArray = [];
$suburbArray = [];
$postcodeArray = [];
$categoryArray = [];
$contactArray = [];
$websiteArray = [];
$latArray = [];
$longArray = [];
echo "RED marker: swim schools in this postcode.<br>";
echo "BLUE marker: swim schools near this postcode.<br>";
echo "View school information by clicking on the marker.<br>";
echo "You can also check detail and the programs they provided with the form below<br>";


if(mysqli_num_rows($result) != 0){
/*echo "RED marker: swim schools in this postcode.<br>";
echo "BLUE marker: swim schools near this postcode.<br>";
echo "View school information by clicking on the marker.<br>";
echo "You can also check detail and the programs they provided with the form below<br>";
*/
echo "<table border='1'>
<tr>
<th>Swim School Name</th>
<th>Address</th>
        <th>Business Category</th>
        <th>Phone</th>
        <th>Programs</th>
       </tr>";

while($query_data = mysqli_fetch_row($result)) {
  //add data into array
  array_push($nameArray,$query_data[0]);
  array_push($addressArray,$query_data[1]);
  array_push($suburbArray,$query_data[2]);
  array_push($postcodeArray,$query_data[3]);
  array_push($categoryArray,$query_data[4]);
  array_push($contactArray,$query_data[5]);
  array_push($websiteArray,$query_data[6]);
  array_push($latArray,$query_data[7]);
  array_push($longArray,$query_data[8]);

echo "<tr>";
  echo "<td><a href='",$query_data[6],"'>",$query_data[0], "</a></td>",
       "<td>",$query_data[1], " </td>",
       "<td>",$query_data[4], " </td>",
       "<td>",$query_data[5], " </td>",
  //     "<td>",$query_data[6], "</td>";
 "<td></td>";
echo "</tr>";
}
}
      else{
          echo "No result for this search";
      }
?>

</table>
    </div>
               <div class="col-md-6">

<div id="map"></div>

                        </div></div>
        </div></div>

<!-- Clean up. -->
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>

<script>
  var dist = "<?php echo $distance; ?>";
  var input = "<?php echo $postcode; ?>";
//  var input = document.getElementById("POSTCODE").value;
 console.log(dist);
   console.log(input);
    function initMap(position){
        // Map options
        var options = {
            zoom:12,
            center:{lat:-37.8409,lng:144.9464}
        }
        // get database data from php
        var nameallArray = <?php echo json_encode($nameallArray); ?>;
        var addressallArray = <?php echo json_encode($addressallArray); ?>;
        var suburballArray = <?php echo json_encode($suburballArray); ?>;
        var postcodeallArray = <?php echo json_encode($postcodeallArray); ?>;
        var categoryallArray = <?php echo json_encode($categoryallArray); ?>;
        var contactallArray = <?php echo json_encode($contactallArray); ?>;
        var websiteallArray = <?php echo json_encode($websiteallArray); ?>;
        var latallArray = <?php echo json_encode($latallArray); ?>;
        var longallArray = <?php echo json_encode($longallArray); ?>;






        var nameArray = <?php echo json_encode($nameArray); ?>;
        var addressArray = <?php echo json_encode($addressArray); ?>;
        var suburbArray = <?php echo json_encode($suburbArray); ?>;
        var postcodeArray = <?php echo json_encode($postcodeArray); ?>;
        var categoryArray = <?php echo json_encode($categoryArray); ?>;
        var contactArray = <?php echo json_encode($contactArray); ?>;
        var websiteArray = <?php echo json_encode($websiteArray); ?>;
        var latArray = <?php echo json_encode($latArray); ?>;
        var longArray = <?php echo json_encode($longArray); ?>;
        console.log(nameArray);
        console.log(latArray);
        console.log(longArray);
        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);
        //setting boundary
        //var bounds  = new google.maps.LatLngBounds();
        //content







var infowindow = new google.maps.InfoWindow;

        var marker, i;
        for (i = 0; i < nameallArray.length; i++) {
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(latallArray[i], longallArray[i]),
            icon:{url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"},
map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                 infowindow.setContent('<div><h3>'+nameallArray[i]+'</h3><p>'+addressallArray[i]+
'<br>'+contactallArray[i]+'<br>'+categoryallArray[i]+'<br><a href='+websiteallArray[i]+'>'+websiteallArray[i]+'</a></p></div>');
                 infowindow.open(map, marker);
             }
        })(marker, i));

}

        if(nameArray.length != 0){
        //marker
        //var marker, j;
        for (i = 0; i < nameArray.length; i++) {
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(latArray[i], longArray[i]),
            icon:{url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"},
            map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
  //               infowindow.setContent(nameArray[i]);

 infowindow.setContent('<div><h3>'+nameArray[i]+'</h3><p>'+addressArray[i]+
'<br>'+contactArray[i]+'<br>'+categoryArray[i]+'<br><a href='+websiteArray[i]+'>'+websiteArray[i]+'</a></p></div>');


                infowindow.open(map, marker);
             }
        })(marker, i));
            if(dist=="1km"){
map.setZoom(13);}
else if(dist=="5km"){
map.setZoom(12);}
else{
map.setZoom(10);}
            map.setCenter(marker.getPosition());
            //extend zoom according to position
            //var loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
            //bounds.extend(loc);
        }
        //re-center map
        //map.fitBounds(bounds);
        //map.panToBounds(bounds);
        }
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
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>

</body>
</html>
