<?php
session_start();
ob_start();
include 'php/header.php'
?>

<html>
  <head>

    <!--Referencing the CSS Styling for the page-->
    <link rel = "stylesheet" href="css/useradmin.css">
    <!--Importing jquery-->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!--Importing Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  </head>

  <!--Body-->
  <body>
    <script src="js/user.js"></script>
    <script src="js/chalk.js"></script>
    <div class="mainwrap">

      <!--Main One is the Top of the Page that makes it look pretty-->
      <div class="mainone">
        <center>
          <br><br><br>
          <h1> User Event Planner </h1>
          <h6> by <span class="groupname">Purple C#bras</span> </h6>
        </center>
      </div>

      <!--Main Two is the Side Menu that contains
      all the buttons that create events,
      view events, and expand events-->
      <div class="maintwo">
        <br><br>
        <button id="create" class="side_menu">Create New Event</button>
        <button id="view_all" class="side_menu">View All Events</button>
        <button id="expand_all" class="side_menu">Expand All Events</button>

        <br>
      </div>

      <!--Main Three is in charge of displaying all the events-->
      <div class="mainthree">

        <br>

        <center><h1 id="Info_Title"></h1></center>
        <br>

        <div id="eventcreation" class="eventcreation">
          <div id="event_month" class="event_month"></div>
          <div id="event_date" class="event_date"></div>
        </div>

        <p id="Events_List"></p>

      </div>

    </div>
  </body>
</html>
