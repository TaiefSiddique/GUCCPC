<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green University Computer Club Permanent Campus</title>
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



.heh{
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

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-btn {
  background-color: #f1f1f1;
  color: #333;
  padding: 10px;
  border: none;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.container {
    text-align: center;
}

.button-container {
    margin-top: 20px;
}

.redirect-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px;
}

.redirect-button:hover {
    background-color: #45a049;
}
  </style>
</style>

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

        

  
</head>
<body>
    <div class="container">
        <h1>Redirect Buttons</h1>
        <div class="button-container">
            <a href="view_data.php" class="redirect-button">View Data</a>
            <a href="events_data.php" class="redirect-button">Events Data</a>
        </div>
    </div>
</body>
</html>
