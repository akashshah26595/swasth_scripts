<?php require "swasth_conn.php";

//if(isset($_POST['btnSubmit'])){
    global $conn;
   $username = mysqli_real_escape_string($conn,$_POST['username']);
   $password = mysqli_real_escape_string($conn,$_POST['password']);
    $username = (int)$username;
    global $salt;
    global $hash;
    global $fname;
    global $user_card_number; 
    global $credits; 
    $username;
   $query = "SELECT u_fname,u_salt,u_hashed_password, user_card_number, u_credits from user where user_card_number=$username";
    $result = mysqli_query($conn , $query);
    $user_details =array();
    while($row=mysqli_fetch_assoc($result)){
        $fname = $row['u_fname'];   
        $salt = $row['u_salt'];   
        $hash = $row['u_hashed_password'];  
        $user_card_number = $row['user_card_number'];
        $credits = $row['u_credits'];        
    }

    $user_details['fname'] = $fname;
    $user_details['user_card_number'] = $user_card_number;
    $user_details['u_credits'] = $credits;

    $concat_string = $password.$salt;
    $final = md5($concat_string);
//        echo "Final " .$final."<br>";
//        echo $hash."<br>";

    if($final==$hash){
        //echo "Success"."<br>";
        echo json_encode($user_details);
    }

    else {
         echo 'Failure';
    }
     
/*}*/


?>
