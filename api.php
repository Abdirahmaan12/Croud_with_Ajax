<?php

include 'conn.php';

header("content-type: aplication/json");

$action = $_POST['action'];
function readAll($conn){
     $data = array();
     $messege = array();
    $query = "SELECT * FROM student";

    $result = $conn->query($query);

    if($result){

        while($row = $result->fetch_assoc()){
             
            $data [] = $row;

        }

        $messege= array("status" => true, "data" => $data);


    }else{
        $messege= array("status" => false, "data" => $conn->error);

    }
    echo json_encode($messege);
}

function readstudentinfo($conn){
    $data = array();
    $messege = array();
    $id = $_POST['id'];
   $query = "SELECT * FROM student where id= '$id'";

   $result = $conn->query($query);

   if($result){

       while($row = $result->fetch_assoc()){
            
           $data [] = $row;

       }

       $messege= array("status" => true, "data" => $data);


   }else{
       $messege= array("status" => false, "data" => $conn->error);

   }
   echo json_encode($messege);
}

 function registerstudent($conn){
   
    $studentid = $_POST['student_id'];
    $studentname = $_POST['student_name'];
    $studentclass = $_POST['student_class'];
  $data = array();
    $query = "INSERT INTO student (id, name, class) values('$studentid', '$studentname', '$studentclass')";

    $result = $conn->query($query);

    if($result){

        $data = array("status"=> true, "data"=> "Registered successfully");

    }else{
        $data = array("status"=> false, "data"=> "$conn->error");
    }

    echo json_encode($data);
 }

 function updatestudent($conn){
   
    $studentid = $_POST['student_id'];
    $studentname = $_POST['student_name'];
    $studentclass = $_POST['student_class'];
  $data = array();
    $query = "UPDATE  student set name= '$studentname', class='$studentclass' where id= '$studentid'";

    $result = $conn->query($query);

    if($result){

        $data = array("status"=> true, "data"=> "updated successfully");

    }else{
        $data = array("status"=> false, "data"=> "$conn->error");
    }

    echo json_encode($data);
 }

 function deletestudent($conn){
    $data = array();
    $messege = array();
    $id = $_POST['id'];
   $query = "DELETE FROM student where id= '$id'";

   $result = $conn->query($query);

   if($result){

     

       $messege= array("status" => true, "data" => $data);


   }else{
       $messege= array("status" => false, "data" => $conn->error);

   }
   echo json_encode($messege);
}

if(isset($action)){
    $action($conn);
}else{
    echo "Action is Required";
}

?>