<!-- profile.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Log out logic can be added here if needed
}

// Redirect to login.html if accessed directly
header("Location: login.html");
exit;
?>
