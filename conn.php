<?php

defined('DB_HOST') or define ('DB_HOST', 'localhost');
defined('DB_USER') or define ('DB_USER', 'root');
defined('DB_PASSWORD') or define ('DB_PASSWORD', '');
defined('DB_NAME') or define ('DB_NAME', 'scroll_page');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$con){

    die("Error" . mysqli_connect_error());
}

?>