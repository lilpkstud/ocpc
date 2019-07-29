<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OCPC Google Calendar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Index CSS -->
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" width="200" height="auto" class="d-inline-block align-top" alt="">
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span>Menu</span>
        </button>

        <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
            <ul class="navbar-nav mr-auto">
               
            </ul>
            <ul class="navbar-nav mx-4 my-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Visit<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendar.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Give</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <!-- 16:9 aspect ratio could be used as well -->
        <video class="embed-responsive" autoplay="" playsinline="" loop="" muted="" src="https://281d98e0ab5512278894-874808387edf2e59e092850289738f00.ssl.cf2.rackcdn.com/h264-720/e/0e8732990_1557373920_easterrecap.mp4"></video>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md" style="background-color:yellow; padding:15px;">
                <a href="#" style="background-color: yellow"><h2 style="text-align:center;">Im New</h2></a>
            </div>
            <div class="col-md" style="background-color: orange; padding: 15px">
                <a href="#"><h2 style="text-align:center">Devotions</h2></a>
            </div>
            <div class="col-md" style="background-color: red; padding: 15px">
                <a href="#"><h2 style="text-align: center">Next Steps</h2></a>
            </div>
            <div class="col-md" style="background-color: #01A4C9; padding: 15px">
                <a href="calendar.php">
                    <h2 style="text-align:center">Events</h2>
                </a>
                <button onclick="showEvent()">ShowEvents</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" style="background-color: goldrenrod;">
            <div class="col-12">
                <h1 style="text-align: center; background-color: goldenrod">Upcoming Events</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div id ="events1" class="row">
            <div class="events col card" style="width: 18rem; margin: 0px 20px;">
                <img src="#" class="card-img-top" alt="Event #1">
                <div class="card-body">
                    <h5 class="card-title">Event # 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="events col card" style="width: 18rem; margin: 0px 20px;">
                <img src="#" class="card-img-top" alt="Event #2">
                <div class="card-body">
                    <h5 class="card-title">Event # 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="events col card" style="width: 18rem; margin: 0px 20px;">
                <img src="#" class="card-img-top" alt="Event #3">
                <div class="card-body">
                    <h5 class="card-title">Event # 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div id="events" class="container" style="display:none;">
        <a href="calendar.php">Check our Latest Events</a>
        <div class="row">
            <div class="col">
                <h1>Event #1</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h1 style="text-align: center; background-color:red">Location</h1>
        <div id="map"></div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

<script>
    function showEvent(){
        var x = document.getElementById("events");
        if(x.style.display == "none"){
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    //Initialize and add the map
    function initMap(){
        //The location of the place
        var location = {lat: -25.344, lng: 131.036};
        //Center the map to the location
        var map = new google.maps.Map(
            document.getElementById('map'),{zoom: 4, center: location}
        );
        //Adding the Marker and positioning to the location
        var marker = new google.maps.Marker({position: location, map: map});
    }
</script>
 <script async defer
src="https://maps.googleapis.com/maps/api/js?key={API_KEY}&callback=initMap">
</script>
</body>
</html>