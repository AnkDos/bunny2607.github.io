<?php $file = 'Feedback.txt';file_put_contents($file, print_r($_POST, true), FILE_APPEND);
header("Location: index.html");

?>






