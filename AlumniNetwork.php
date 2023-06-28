<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni Network - Green University Computer Club</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      color: white;
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

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: center;
      padding: 8px;
      border: 1px solid black;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
  <script>
    function openPopup(url) {
      window.open(url, '_blank', 'width=800,height=600');
    }
    
    function goBack() {
      window.history.back();
    }
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



  <main>
    <section>
      <h2>Welcome to the Alumni Network!</h2>
      <p>
        This is the dedicated space for our alumni community, where you can stay connected, network with fellow alumni, and explore opportunities. Join our vibrant alumni network and make valuable connections that can benefit your personal and professional growth.
      </p>
    </section>

    <section>
      <h2>Alumni Directory</h2>
      <p>
        Connect with other alumni and expand your professional network. Browse through our alumni directory to find and connect with your former classmates and colleagues. Stay updated on their accomplishments, career paths, and current endeavors.
      </p>
      <a href="https://alumni.green.edu.bd/directory.php" onclick="openPopup('https://alumni.green.edu.bd/directory.php'); return false;">Browse Alumni Directory</a>
    </section>

    <section>
      <h2>Events and Reunions</h2>
      <p>
        Stay informed about upcoming events, reunions, and alumni gatherings. Join us for networking opportunities, panel discussions, guest lectures, and more. Reconnect with old friends, meet new alumni, and engage with our dynamic community.
      </p>
      <a href="https://www.facebook.com/gaacse/" onclick="openPopup('https://www.facebook.com/gaacse/'); return false;">View Upcoming Events</a>
    </section>

    <section>
      <h2>Alumni Success Stories</h2>
      <p>
        Discover inspiring stories of our alumni who have made significant contributions in their fields. Read about their achievements, experiences, and the impact they are making in their professions. Be motivated by their journeys and learn from their insights.
      </p>
      <a href="https://green.edu.bd/newsnevent/decoders-squad-of-the-cse-department-alumni-wins-basis-national-ict-awards-2020/" onclick="openPopup('https://green.edu.bd/newsnevent/decoders-squad-of-the-cse-department-alumni-wins-basis-national-ict-awards-2020/'); return false;">Read Alumni Success Stories</a>
    </section>
    
    <button onclick="goBack()">Go Back</button>
  </main>

  <footer>
    <p>&copy; 2023 Green University Computer Club Permanent Campus. All rights reserved.</p>
  </footer>
</body>
</html>
