

<?php require "swasth_conn.php";
if(isset($_POST['btnSubmit'])!=null){
    
$fname = $_POST['txtFname'];
$mname = isset($_POST['txtMname']) ? $_POST['txtMname'] : null;
$lname = $_POST['txtLname'];
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;   
$add = $_POST['txtAdd'];
$mob = (int)$_POST['txtMob'];
$age = $_POST['txtAge'];
$gender = $_POST['rbgender'];    

$user_card_number = null;
$swasth_credits = 0;    
$salt = rand();

$hash_string = md5($mob.$salt);    
 echo $hash_string;   
global $conn;

    
$result = mysqli_query($conn, "CALL SP_insert_user(null,'$fname','$mname','$lname','$email',$salt,'$hash_string','$add',$mob,$age,'$gender',0)");
  
    if($result){
    echo "data added successfully";
}
else{
    echo "Error while entering data  ".mysqli_error($conn);
}
    
$result = mysqli_query($conn, "CALL SP_insert_patient(null,'$fname','$mname','$lname',$age,'$gender')");

if($result){
    echo "data added successfully";
}
else{
    echo "Error while entering data  ".mysqli_error($conn);
}
mysqli_close($conn);   
    
    
}
?>
