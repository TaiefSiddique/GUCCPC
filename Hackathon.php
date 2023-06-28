<!DOCTYPE html>
<html>
<head>
  <title>Hackathon 2023</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Hackathon 2023</h1>
    <nav>
      <ul>
      <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#schedule">Schedule</a></li>
        <li><a href="#speakers">Speakers</a></li>
        <li><a href="#register">Register</a></li>
      </ul>
    </nav>
  </header>

  <section id="about">
    <h2>About</h2>
    <p>Welcome to Hackathon 2023 Organized by Green University Computer Club, Permanent Campus (GUCC-PC)! Join us for an exciting coding competition where developers from around the world come together to showcase their skills and build innovative solutions.</p>
    <p>Date: <strong>June 23-24, 2023</strong></p>
    <p>Location: <strong>City Convention Center, Your City</strong></p>
  </section>

  <section id="schedule">
    <h2>Schedule</h2>
    <ul>
      <li>
        <strong>Day 1: October 10</strong>
        <ul>
          <li>9:00 AM - Registration</li>
          <li>10:00 AM - Opening Ceremony</li>
          <li>11:00 AM - Hackathon Kickoff</li>
          <li>1:00 PM - Lunch</li>
          <li>6:00 PM - Team Presentations</li>
        </ul>
      </li>
      <li>
        <strong>Day 2: October 11</strong>
        <ul>
          <li>9:00 AM - Coding Continues</li>
          <li>1:00 PM - Lunch</li>
          <li>6:00 PM - Mentor Sessions</li>
        </ul>
      </li>
      <li>
        <strong>Day 3: October 12</strong>
        <ul>
          <li>9:00 AM - Finalize Projects</li>
          <li>1:00 PM - Lunch</li>
          <li>3:00 PM - Project Presentations</li>
          <li>6:00 PM - Award Ceremony</li>
        </ul>
      </li>
    </ul>
  </section>

  <section id="speakers">
    <h2>Speakers</h2>
    <ul>
      <li>John Smith - CTO, Example Company</li>
      <li>Jane Doe - Senior Developer, ABC Corporation</li>
      <li>David Johnson - Tech Lead, XYZ Inc.</li>
    </ul>
  </section>

  <section id="register">
    <h2>Register</h2>
    <p>Don't miss out on this amazing opportunity! Register now to secure your spot in Hackathon 2023.</p>
  

    <form method="POST">
      <label for="id">Id:</label>
      <input type="digit" id="Id" name="id" required><br><br>
      <label for="name">Name:</label>
      <input type="text" id="Name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="Email" name="email" required><br><br>
      
      <input type="submit" name="submit" value="Register">
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
$event = "Hackathon";
$error = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    //$message = $_POST['message'];

    // Validate form fields
    if (empty($id) || empty($name) || empty($email) || empty($event)) {
        $error = "Please fill in all the fields.";
    } else {
        // Prepare and execute the SQL query
        $stmt = $conn->prepare("INSERT INTO events (id, name, email, event) VALUES (?, ?, ?,? )");
        $stmt->bind_param("ssss", $id, $name, $email, $event);
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
  </section>

  <footer>
    <p>&copy; 2023 Hackathon 2023. All rights reserved.</p>
  </footer>
</body>
</html>