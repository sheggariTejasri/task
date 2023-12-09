<!-- login.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["loginUsername"]) && isset($_POST["loginPassword"])) {
    // Simulate user login (you would typically validate credentials against a database)
    // For simplicity, let's just echo the username
    echo "Login successful! Welcome, " . $_POST["loginUsername"];
    exit;
  }
}

// Redirect to login.html if accessed directly
header("Location: login.html");
exit;
?>
