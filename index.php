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
  <div id="carouselExampleIndicators" class="carousel-container" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/1.jpg" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/2.JPG" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/3.jpg" alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section>
    <h2>About Us</h2>
    <p>The Green University Computer Club Permanent Campus is a community of computer enthusiasts and professionals
      who come together to share their knowledge, collaborate on workshops, and promote the use of technology for social
      and environmental causes.</p>
    <button><a href="about.php">Learn More</a></button>
  </section>
  <section>
    <h2>Upcoming Events</h2>
    <ul>
      <li><a href="Hackathon.php">Hackathon 2023</a></li>
      <li><a href="webdevelopment.php">Workshop on Web Development</a></li>
      <li><a href="ML.php">Seminar on Machine Learning</a></li>
    </ul>
  </section>
  <section>
    <h2>Latest Blog Posts</h2>
    <ul>
      <li><a href="ecofriendlycomputing.php">5 Tips for Eco-Friendly Computing</a></li>
      <li><a href="datacenters.php">Building Sustainable Data Centers</a></li>
      <li><a href="technology.php">How Technology is Helping Save the Planet</a></li>
    </ul>
  </section>
  
<section>
      <h2>Latest Notices</h2>
      <p>
        Access the latest notices and announcements from Green University. Stay updated on important information, upcoming events, deadlines, and other news.
      </p>
      <ul>
        <li><a href="https://green.edu.bd/notices/" onclick="openPopup('https://green.edu.bd/notices/'); return false;">View Notices</a></li>
      </ul>
    </section>
</main>
<footer style="text-align: center;">
  <p>&copy; 2023 Green University Computer Club Permanent Campus. All rights reserved.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
