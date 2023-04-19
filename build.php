<?php

require('conn.php');

for($x = 0; $x < 50; $x++){

$file = file_get_contents('https://loripsum.net/api/3/short', true);
$utime = time();
$query = "INSERT INTO blog_post(content, date) VALUES ('$file', '$utime')";

mysqli_query($con, $query);
echo $query;
}

?>