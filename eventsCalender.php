<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green University Computer Club Events Calendar</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn ,.heh{
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

  
    .calendar {
      font-family: Arial, sans-serif;
      max-width: 800px;
      margin: 0 auto;
    }
    .calendar h2 {
      text-align: center;
    }
    .calendar table {
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
    }
    .calendar th, .calendar td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    .calendar td {
      cursor: pointer;
    }
    .calendar .event-name {
      font-weight: bold;
    }
    .calendar .highlight {
      background-color: #FFD700;
    }
  </style>
  <script>
    function showEventDetails(date) {
      if (date === '2023-06-23' || date === '2023-06-24') {
        window.location.href = "Hackathon.php";
      } else {
        // Replace this function with your logic to show event details
        var eventDetails = "No Events in this date"; // Get event details for the selected date
        alert(eventDetails);
      }
    }

    function generateCalendar() {
      var today = new Date();
      var year = today.getFullYear();
      var month = today.getMonth();
      var firstDay = new Date(year, month, 1);
      var lastDay = new Date(year, month + 1, 0);
      var startDate = firstDay.getDay();
      var totalDays = lastDay.getDate();
      var daysInWeek = 7;

      var calendar = document.getElementById("calendar");
      var monthName = document.createElement("h2");
      monthName.innerText = firstDay.toLocaleString('default', { month: 'long' }) + " " + year;
      calendar.appendChild(monthName);

      var table = document.createElement("table");
      var headerRow = document.createElement("tr");
      var daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

      for (var i = 0; i < daysOfWeek.length; i++) {
        var th = document.createElement("th");
        th.innerText = daysOfWeek[i];
        headerRow.appendChild(th);
      }

      table.appendChild(headerRow);

      var row = document.createElement("tr");

      for (var i = 0; i < startDate; i++) {
        var emptyCell = document.createElement("td");
        row.appendChild(emptyCell);
      }

      var dayCount = startDate;

      for (var i = 1; i <= totalDays; i++) {
        var cell = document.createElement("td");
        cell.innerText = i;

        if (i === 23 || i === 24) {
          cell.classList.add("highlight");
        }

        cell.onclick = function() {
          var date = year + "-" + (month + 1).toString().padStart(2, "0") + "-" + this.innerText.toString().padStart(2, "0");
          showEventDetails(date);
        };

        row.appendChild(cell);

        if (dayCount % daysInWeek === 6 || i === totalDays) {
          table.appendChild(row);
          row = document.createElement("tr");
        }

        dayCount++;
      }

      calendar.appendChild(table);
    }

    window.onload = function() {
      generateCalendar();
    };
  </script>
</head>
<body>
<header>
    <h1> <b>Green University Computer Club Permanent Campus</b></h1>
    <nav>
      <ul>
        <li class="heh"><a href="index.php">Home</a></li>
        <li class="heh"><a href="PhotoVideoGallery.html">Gallery</a></li>
        <li class="heh"><a href="about.php">About Us</a></li>
        <li class="heh"><a href="events.php">Events</a></li>
        <li class="heh"><a href="blog.php">Blog</a></li>
        <li class="heh"><a href="submit.php">Contact</a></li>
        <li class="heh"><a href="admin.php">Admin</a></li>
        <li class="heh"><a href="AlumniNetwork.php">Alumni Netwok</a></li>
        <div class="dropdown">
  <button class="dropdown-btn">ExecutiveCommittee</button>
  <div class="dropdown-content">
    <a href="Executive Committe 2022.php">ExecutiveCommittee2022</a>
    <a href="Executive Committe 2023.php">ExecutiveCommittee2023</a>
    
  </div>


        
      </ul>
    </nav>
  </header>
  <br>
  <br>
  <div class="calendar" id="calendar"></div>

  <footer style="text-align: center;">
  <br>
  <br>
    <p>&copy; 2023 Green University Computer Club Permanent Campus. All rights reserved.</p>
  </footer>
</body>
</html>
