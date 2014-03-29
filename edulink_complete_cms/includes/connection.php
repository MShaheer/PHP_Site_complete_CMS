<?php

require 'constants.php';

//CREATE A DATABASE CONNECTION
$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection){
    die("Database connection failed" . mysql_error());
}

//SELECT A DATABASE TO USE
$db_select=mysql_select_db(DB_NAME,$connection);
if(!$db_select){
    die("Database selection failed" . mysql_error());
}
?>


