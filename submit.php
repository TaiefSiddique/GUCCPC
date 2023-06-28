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

 <script>
    function openPopup(url) {
      window.open(url, "popupWindow", "width=800,height=600");
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
    <h2>Contact Us</h2>
    <br>
    <form id="contactForm" action="#" method="post">

      <label for="id">Student ID:</label>
      <input type="text" id="id" name="id" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Submit</button>
    </form>
    

    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Use the password you set during XAMPP installation
$dbname = "gucclub_db"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$id = "";
$name = "";
$email = "";
$message = "";
$error = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form fields
    if (empty($id) || empty($name) || empty($email) || empty($message)) {
        $error = "Please fill in all the fields.";
    } else {
        // Prepare and execute the SQL query
        $stmt = $conn->prepare("INSERT INTO form_data (id, name, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $id, $name, $email, $message);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Form submitted successfully.";
        } else {
            echo "Error submitting the form.";
        }

        $stmt->close();
    }
}

$conn->close();
?>
<br>
<div>
<p>Join GUCC-PC official Facebook page: <a href="https://www.facebook.com/guccpc" onclick="openPopup('https://www.facebook.com/guccpc'); return false;">Click here</a></p>
<p>Join Messenger group CR with GUCCPC: <a href="https://www.messenger.com/t/7171571956246593" onclick="openPopup('https://www.messenger.com/t/7171571956246593'); return false;">Click here</a></p>
<p>Join Facebook group Dept. Of CSE, GUB-PC: <a href="https://www.facebook.com/groups/311916576641085" onclick="openPopup('https://www.facebook.com/groups/311916576641085'); return false;">Click here</a></p>

</div>
    <br>

  </main>


  <footer>
    <p>&copy; 2023 Green University Computer Club Permanent Campus. All rights reserved.</p>
  </footer>

  
  
</body>
</html>


