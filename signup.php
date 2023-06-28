
<?php
// Assuming you have a MySQL database with a table called 'users'

// Set your database connection credentials
$host = 'localhost';
$db = 'gucclub_db';
$user = 'root';
$password = '';

// Create a new PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);

// Get user inputs from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the SQL statement
$stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
$stmt->execute(['username' => $username, 'password' => $password]);

// Redirect the user to the login page
header('Location: admin.php');
exit();
?>