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
}.container {
      margin-top: 50px;
    }

    .record-card {
      margin-bottom: 20px;
    }

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

    

<body>
  <div class="container">
    <h1>Form Data</h1>
    <div class="row">
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

        // Update record if update form is submitted
        if (isset($_POST['update'])) {
          $id = $_POST['id'];
          $name = $_POST['name'];
          $email = $_POST['email'];
          //$message = $_POST['message'];

          $sql = "UPDATE events SET name='$name', email='$email' WHERE id=$id";

          if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully.";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        }

        // Delete record if delete form is submitted
        if (isset($_POST['delete'])) {
          $id = $_POST['id'];

          $sql = "DELETE FROM events WHERE id=$id";

          if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully.";
          } else {
            echo "Error deleting record: " . $conn->error;
          }
        }

        // Select all form data from the database
        $sql = "SELECT * FROM events";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-6 record-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Record ID: <?php echo $row['id']; ?></h5>
                  <p class="card-text"><strong>Name:</strong> <?php echo $row['name']; ?></p>
                  <p class="card-text"><strong>Email:</strong> <?php echo $row['email']; ?></p>
                  <p class="card-text"><strong>Event:</strong> <?php echo $row['event']; ?></p>

                  <!-- Update form -->
                  <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                  </form>

                  <!-- Delete form -->
                  <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                  </form>
                </div>
              </div>
            </div>
            <?php
          }
        } else {
          echo "No form submissions yet.";
        }

        $conn->close();
      ?>
    </div>
  </div>
</body>
</html>
