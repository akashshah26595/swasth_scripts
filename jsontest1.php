<?php header('Content-type: text/plain; charset=utf-8'); ?>
<?php require 'swasth_conn.php';

$choice = $_GET['choice'];
global $conn;
//0->english 1->hindi
$query = "SELECT question, choice1, choice2, choice3, choice4, choice5 from swasth_medical_questions where lang=$choice";
    $result = mysqli_query($conn , $query);
    $questions = array();
    $array = array();
    $i=0;
    $id;
    while($row=mysqli_fetch_assoc($result)){
       $questions['question'] = $row['question'];
       $questions['choice1'] = $row['choice1'];
       $questions['choice2'] = $row['choice2'];
       $questions['choice3'] = $row['choice3'];
       $questions['choice4'] = $row['choice4'];
       $questions['choice5'] = $row['choice5'];
       array_push($array,$questions);           
    }

echo json_encode($array,TRUE);
?>