<?php require "swasth_conn.php";


$question1 = strval($_POST['1']);
$question2 = strval($_POST['2']);
$question3 = strval($_POST['3']);
$question4 = strval($_POST['4']);
$question5 = strval($_POST['5']);
$question6 = strval($_POST['6']);
$question7 = strval($_POST['7']);
$question8 = strval($_POST['8']);
$card_number = $_POST['card_no'];
$score = $_POST['score'];
$feedback = $_POST['feedback'];
$time =date("Y-m-d H:i:s");
$credits=0;  
global $conn;
    
$result = mysqli_query($conn, "CALL SP_insert_medical_feedback(0,'$question1','$question2','$question3','$question4',
'$question5','$question6','$question7','$question8','$time',$card_number,$score,'$feedback')");
  
$query = "SELECT u_credits from user where user_card_number=$card_number;";

$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
    $credits = $row['u_credits'];
}

if($result){
    echo $credits;
}
else{
    echo "Error while entering data  ".mysqli_error($conn);
}
mysqli_close($conn);   
?>

