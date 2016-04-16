<?php require "swasth_conn.php";

//if(isset($_POST['btnSubmit'])){
    global $conn;
   $username = mysqli_real_escape_string($conn,$_POST['cardno']);
    $username = (int)$username;
    $array = array();
   $query = "SELECT patient_id,p_fname,p_lname,p_centre_status,p_medical_status,p_centre_status from patient where p_card_number =$username";
    $result = mysqli_query($conn , $query);
    $user_details =array();
    if($result){
        while($row=mysqli_fetch_assoc($result)){
        $user_details['patient_id'] = $row['patient_id']; 
        $user_details['fname'] = $row['p_fname']; 
        $user_details['lname'] = $row['p_lname'];
		$user_details['p_centre_status'] =	$row['p_centre_status'];
		$user_details['p_medical_status'] =	$row['p_medical_status'];
        array_push($array,$user_details);           
      
    }
    echo json_encode($array,TRUE);
    }
    else{
        echo "Failure";
    }
?>