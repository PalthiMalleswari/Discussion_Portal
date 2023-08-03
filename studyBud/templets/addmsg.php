<?php


    include("connection.php");

    
        // $roomid = $room_id;
        $name = $_GET["username"];
        //$msg = $_POST["msg"];
        $rid = $_GET["rid"];
        $usr_id = $_GET["userid"];
        $msg = $_POST["msg"];
        
        $sql = "insert into message (room_id,sender_id,message_content,timestamp) values('$rid','$usr_id','$msg',CURRENT_TIMESTAMP)";
        if($con->query($sql) === TRUE){
            echo "msg inserted Successfully";
            $url = "room.php?room_id=".urlencode($rid)."&username=".urlencode($username);
            header("Location: $url");
            exit();
          }
          else{
            echo "Failed to insert msg";
        }
        
        
    
    $con->close();

?>