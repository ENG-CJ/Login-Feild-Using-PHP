
<?php
require 'conn.php';
session_start();
$action=$_POST['action'];


function search_user($conn){
    extract($_POST);
    $query = "CALL searchUser('$email','$password')";
    $result= $conn->query($query);
    $data=array();
    $resultData=array();

    if (mysqli_num_rows($result) > 0){
       
        $rows=mysqli_fetch_assoc($result);
        $data[]=$rows;
       
        $_SESSION['Username']=$rows['Username'];
        $_SESSION['id']=$rows['ID'];
        $resultData=array("status"=>true,"data"=>$data);
    }
    else
        $resultData=array("status"=>false,"data"=>"Incorrect Username or Password");
    
    echo json_encode($resultData);
}

function logout($conn){
    session_unset();
    session_destroy();
   header("Location : login.php");
   exit();
}




if (isset($action)){
    $action($conn);
}
else
    echo "Invalid Action";


?>