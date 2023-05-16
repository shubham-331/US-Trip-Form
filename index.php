<?php
$server = "localhost";
$username = "root";
$password ="";

$con = mysqli_connect( $server,$username, $password);

if(!$con){
    die("connection to this database" .
    mysqli_connect_error());
}

// echo "success connect to the db";

$sql = "INSERT INTO `us trip` (`SNO`, `NAME`, `AGE`, `GENDER`, `EMAIL`, `PHONE`, `OTHER`, `DT`) VALUES ('1', 'textarea', '26', 'male', 'this@this.com', '8219423827', 'i luv india', current_timestamp()); "
?>