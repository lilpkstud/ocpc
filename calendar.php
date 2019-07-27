<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OCPC Google Calendar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div id="hi"></div>
    <div class="row">
        <div id="events" class="col-6">
            <h3 id="title"></h3>
            <p id="description"></p>
            <p id="date"></p>
            <p id="location"></p>
        </div>
    </div>
   
    <div class="row">
        <div class="col-4">
            <h3 id="title1"> DUMMY DATA -Friday Service (Event #1)</h3>
            <p id="date1"> DUMMY DATA - June 13th 2019 at 7:30 to 7:50pm</p>
            <p id="location1"> DUMMY DATA - Location of the Place</p>
            <p id="description1">DUMMY DATA - Description of the events</p>
        </div>
        <div class="col-4">
            <h3> DUMMY DATA - Going to New Hope In Hawaii (Event #2)</h3>
            <p>DUMMY DATA - June 13th 2019 at 7:30 to 7:50pm</p>
            <p>DUMMY DATA - Location of the Place</p>
            <p>DUMMY DATA - Description of the events</p>
        </div>
        <div class="col-4">
            <h3> DUMMY DATA - Going to New Hope In Hawaii (Event #3)</h3>
            <p>DUMMY DATA - June 13th 2019 at 7:30 to 7:50pm</p>
            <p>DUMMY DATA - Location of the Place</p>
            <p>DUMMY DATA - Description of the events</p>
        </div>
    </div>
  
    <!--Add buttons to initiate auth sequence and sign out-->
    <button id="authorize_button" style="display: none;">Authorize</button>
    <button id="signout_button" style="display: none;">Sign Out</button>

    <pre id="content" style="white-space: pre-wrap;"></pre>
  </div>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google Calendar JS -->
    <script src="/js/calendar.js"></script>
    <!-- Google API -->
    <script async defer src="https://apis.google.com/js/api.js"
        onload="this.onload=function(){};handleClientLoad()"
        onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
</body>
</html>