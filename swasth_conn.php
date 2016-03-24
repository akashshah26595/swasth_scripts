<?php
//$server = "mysql.hostinger.in";
//$username = "u354229557_ggmu";
//$password = "manutd710";
//$db = "u354229557_swast";

$server = "localhost";
$username = "root";
$password = "akapaka";
$db = "swasth";

$arr = array("SERVER"=>$server,"USERNAME"=>$username,"PASSWORD"=>$password,"DATABASE"=>$db);

foreach($arr as $key=>$value){
    define($key,$value);
}

$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

if($conn){
   //echo "We are connected..";
}

else {
    die("Connection Error..." . mysqli_error($conn));
}
?>
