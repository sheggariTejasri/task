<!-- register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["username"]) && isset($_POST["password"])) {
    // Simulate user registration (you would typically insert into a database)
    // For simplicity, let's just echo the username
    echo "Registration successful! Username: " . $_POST["username"];
    exit;
  }
}

// Redirect to register.html if accessed directly
header("Location: register.html");
exit;
?>
