<? php require "swasth_conn.php";
//if(isset($_POST['btnSubmit'])){
    
    $val = $_POST['hfBrands'];
    global $conn;
    
    echo 'Hello';
$lines = explode(PHP_EOL, $val);
$array = array();
foreach ($lines as $line) {
    $array[] = str_getcsv($line);
}
print_r($array);
//}
?>