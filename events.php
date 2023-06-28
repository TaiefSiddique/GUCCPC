<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green University Computer Club Permanent Campus</title>
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
</style>
<<script>
  function showPopupMessage() {
    alert('Scope of the future work: ...'); // Add your desired message here
  }
</script>

</head>
<body>
  <header>
    <h1>Green University Computer Club Permanent Campus</h1>
    <nav>
      <ul>
        <li class="heh"><a href="index.php">Home</a></li>
        <li class="heh"><a href="PhotoVideoGallery.html">Gallery</a></li>
        <li class="heh"><a href="about.php">About Us</a></li>
        <div class="dropdown">
          <button class="dropbtn">Events
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
        
            <a href="eventsCalender.php">Events Schedule</a>
            <a href="#" onclick="showPopupMessage(); return false;">Weekly Programming Session</a>
          </div>
        </div>
        <li class="heh"><a href="blog.php">Blog</a></li>
        <li class="heh"><a href="submit.php">Contact</a></li>
        <li class="heh"><a href="admin.php">Admin</a></li>
        <li class="heh"><a href="AlumniNetwork.php">Alumni Netwok</a></li>
        <div class="dropdown">
          <button class="dropbtn">ExecutiveCommittee
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="Executive Committe 2022.php">ExecutiveCommittee2022</a>
            <a href="Executive Committe 2023.php">ExecutiveCommittee2023</a>
          </div>
        </div>
      </ul>
    </nav>
  </header>


  <main>
    <h2>Upcoming Events</h2>
    <ul>
      <section>
        <h3><a href="Hackathon.php">Hackathon 2023</a></h3>
        <p>Date: TBD</p>
        <p>Location: Green University</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris auctor, facilisis tortor non, dictum dolor. Integer gravida massa nisl, vel ultricies purus posuere in.</p>
        <a href="Hackathon.php">Read More</a>
      </section>
      <section>
        <h3><a href="webdevelopment.php">Workshop on Web Development</a></h3>
        <p>Date: TBD</p>
        <p>Location: Green University</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris auctor, facilisis tortor non, dictum dolor. Integer gravida massa nisl, vel ultricies purus posuere in.</p>
        <a href="webdevelopment.php">Read More</a>
      </section>
      <section>
        <h3><a href="ML.php">Seminar on Machine Learning</a></h3>
        <p>Date: TBD</p>
        <p>Location: Green University</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris auctor, facilisis tortor non, dictum dolor. Integer gravida massa nisl, vel ultricies purus posuere in.</p>
        <a href="ML.php">Read More</a>
      </section>
    </ul>
  </main>
  <footer>
    <p>&copy; 2023 Green University Computer Club Permanent Campus. All rights reserved.</p>
  </footer>
</body>
</html>
