<?php

include('database_connection.php');
include('index.php');

$_SESSION['login_details_id'] = $log_id;

if(isset($log_id))
{
 
$query = "
UPDATE login_details 
SET last_activity = now() 
WHERE login_details_id = ".$log_id;

$statement = $connect->prepare($query);

$statement->execute();
}
?>
