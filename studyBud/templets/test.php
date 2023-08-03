<div class="topics">
          <div class="topics__header">
            <h2>Topics</h2>
          </div>
        
          <ul class="topics__list">
            <?php

            include('connection.php');
            $sql = "select * from room;";
            $s = "select count(*) as c from room";
            $r1 = $con->query($s);
            if( ! $r1){
            die("Error Occured: ".$con->error);
            }
            while($r = $r1->fetch_assoc()){

            echo "<li><a href='index.php' class='active'>All <span>$r[c]</span></a></li>";

            }

            $result = $con->query($sql);
            if( ! $result){
                die("Error Occured: ".$con->error);
            }
            while($row = $result->fetch_assoc()){
            // echo '<li>';
            // echo "<a href='#'>$row[room_name] <span>232</span></a>";
            // echo '</li>';
            //echo $row['count'];
            $sq = "select count(*) as user_count from userroom where room_id=$row[room_id]";
            $r = $con->query($sq);
            $count = $r->fetch_assoc()["user_count"];

            

            echo "
                <li>
            <a href='room.php?room_id=$row[room_id]&username=$row[user_id]'>$row[room_tag] <span>$count</span></a>
            </li>
            ";

            
            }
            $con->close();

            ?>

            
          </ul>
          <a class="btn btn--link" href="topics.php">
            More
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <title>chevron-down</title>
              <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
            </svg>
          </a>
        </div> 