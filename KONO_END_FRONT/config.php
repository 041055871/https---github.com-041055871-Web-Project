<?php
require_once('database_credential.php');
function db_connect()
{
  $connection = mysqli_connect('DB_SERVER','DB_USER','DB_PASS','DB_NAME','3306');
  if (mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }

  return $connection;
}

function db_disconnect($connection)
{
  if (isset($connection)) {
    mysqli_close($connection);
  }
}
?>