<!DOCTYPE html>
<html>
<head>
  <title>Seminar on Machine Learning</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Seminar on Machine Learning</h1>
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
    <p>Welcome to the Seminar on Machine Learning organized by Green University Computer Club, Permanent Campus (GUCC-PC)! Join us to explore the fascinating world of machine learning and its applications in various domains.</p>
    <p>Date: <strong>TBD</strong></p>
    <p>Location: <strong>Green University, Permanent Campus</strong></p>
  </section>

  <section id="schedule">
    <h2>Schedule</h2>
    <ul>
      <li>
        <strong>Session 1: Introduction to Machine Learning</strong>
        <ul>
          <li>9:00 AM - Registration</li>
          <li>10:00 AM - Welcome and Introduction</li>
          <li>11:00 AM - Basics of Machine Learning</li>
          <li>1:00 PM - Lunch</li>
          <li>2:00 PM - Supervised Learning Algorithms</li>
          <li>4:00 PM - Evaluation and Validation</li>
        </ul>
      </li>
      <li>
        <strong>Session 2: Advanced Topics in Machine Learning</strong>
        <ul>
          <li>9:00 AM - Unsupervised Learning Techniques</li>
          <li>11:00 AM - Deep Learning and Neural Networks</li>
          <li>1:00 PM - Lunch</li>
          <li>2:00 PM - Natural Language Processing</li>
          <li>4:00 PM - Reinforcement Learning</li>
        </ul>
      </li>
      <li>
        <strong>Session 3: Machine Learning Applications</strong>
        <ul>
          <li>9:00 AM - Image and Video Processing</li>
          <li>11:00 AM - Recommendation Systems</li>
          <li>1:00 PM - Lunch</li>
          <li>2:00 PM - Fraud Detection and Anomaly Detection</li>
          <li>4:00 PM - Machine Learning in Healthcare</li>
        </ul>
      </li>
    </ul>
  </section>

  <section id="speakers">
    <h2>Speakers</h2>
    <ul>
      <li>John Smith - Machine Learning Researcher, Example Company</li>
      <li>Jane Doe - Data Scientist, ABC Corporation</li>
      <li>David Johnson - AI Engineer, XYZ Inc.</li>
    </ul>
  </section>

  <section id="register">
    <h2>Register</h2>
    <p>Don't miss out on this informative seminar on machine learning! Register now to secure your spot and gain valuable insights into the field.</p>

    <form method="POST">
    <label for="id">Id:</label>
      <input type="digit" id="Id" name="id" required><br><br>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
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
$event = "MachineLearning";
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
    <p>&copy; Seminar on Machine Learning. All rights reserved.</p>
  </footer>
</body>
</html>
