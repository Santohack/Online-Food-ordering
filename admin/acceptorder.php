<?php  
     session_start();
     $conn = mysqli_connect('localhost','root','','food');
     if($conn){
         echo "";
     }
     else{
         echo "Failed to connet ";
     }

     $id = isset($_GET['id']) ? $_GET['id'] : '';
     $sql3 = "SELECT * FROM tbl_order WHERE id ='$id'";
     $res3 = mysqli_query($conn,$sql3);
     if($res3 == true){
         echo "<h1> your order is appecpted by restaurants</h1>";

     }
     else{
         echo "order rejected";
     }
?>