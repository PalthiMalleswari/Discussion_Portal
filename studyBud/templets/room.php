
<?php

  include("connection.php");
  //include("index.php");

  //if(isset($_SERVER) === "GET"){
    $room_id = $_GET["room_id"];
    $username = $_GET["username"];
  
    $sql = "select * from room where room_id='$room_id';";
    $res = $con->query($sql);
  
    if(! $res){
      die("Error Occured".$con->error);
    }
     
    if($res->num_rows >0){
      while($row = $res->fetch_assoc()){
        $room_tag = $row['room_tag'];
        $user_id = $row['user_id'];
        $room_name = $row['room_name'];
        $room_about = $row['room_about'];
        $time = $row['timestamp_col'];
      }
    }
    $datetime = new DateTime($time);
    $roundtime = $datetime->format('H:i:s');

  //}  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/static/assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../static/css/style.css" />
    <title>StudyBuddy - Find study partners around the world!</title>
  </head>

  <body>
    <header class="header header--loggedIn">
      <div class="container">
        <a href="#" class="header__logo">
          <img src="../static/assets/logo.svg" />
          <h1>StudyBuddy</h1>
        </a>
        <form class="header__search">
          <label>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <title>search</title>
              <path
                d="M32 30.586l-10.845-10.845c1.771-2.092 2.845-4.791 2.845-7.741 0-6.617-5.383-12-12-12s-12 5.383-12 12c0 6.617 5.383 12 12 12 2.949 0 5.649-1.074 7.741-2.845l10.845 10.845 1.414-1.414zM12 22c-5.514 0-10-4.486-10-10s4.486-10 10-10c5.514 0 10 4.486 10 10s-4.486 10-10 10z"
              ></path>
            </svg>
            <input placeholder="Search for posts" />
          </label>
        </form>
        <nav class="header__menu">
          <!-- Not Logged In -->
          <!-- <a href="/login.html">
            <img src="./assets/avatar.svg" />
            <p>Account</p>
          </a> -->

          <!-- Logged In -->
          <a href="#">
            <div class="avatar avatar--medium active">
              <img src="../static/assets/imgs/profile.jpg" />
            </div>
            <p>Palthi Malleswari<span>@palthi</span></p>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <title>chevron-down</title>
              <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
            </svg>
          </a>
        </nav>
      </div>
    </header>
    <main class="profile-page layout layout--2">
      <div class="container">
        <!-- Room Start -->
        <div class="room">
          <div class="room__top">
            <div class="room__topLeft">
              <a href="index.php">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <title>arrow-left</title>
                  <path
                    d="M13.723 2.286l-13.723 13.714 13.719 13.714 1.616-1.611-10.96-10.96h27.625v-2.286h-27.625l10.965-10.965-1.616-1.607z"
                  ></path>
                </svg>
              </a>
              <h3>Study Room</h3>
            </div>

            <div class="room__topRight">
              <a href="#">
                <svg
                  enable-background="new 0 0 24 24"
                  height="32"
                  viewBox="0 0 24 24"
                  width="32"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>edit</title>
                  <g>
                    <path d="m23.5 22h-15c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h15c.276 0 .5.224.5.5s-.224.5-.5.5z" />
                  </g>
                  <g>
                    <g>
                      <path
                        d="m2.5 22c-.131 0-.259-.052-.354-.146-.123-.123-.173-.3-.133-.468l1.09-4.625c.021-.09.067-.173.133-.239l14.143-14.143c.565-.566 1.554-.566 2.121 0l2.121 2.121c.283.283.439.66.439 1.061s-.156.778-.439 1.061l-14.142 14.141c-.065.066-.148.112-.239.133l-4.625 1.09c-.038.01-.077.014-.115.014zm1.544-4.873-.872 3.7 3.7-.872 14.042-14.041c.095-.095.146-.22.146-.354 0-.133-.052-.259-.146-.354l-2.121-2.121c-.19-.189-.518-.189-.707 0zm3.081 3.283h.01z"
                      />
                    </g>
                    <g>
                      <path
                        d="m17.889 10.146c-.128 0-.256-.049-.354-.146l-3.535-3.536c-.195-.195-.195-.512 0-.707s.512-.195.707 0l3.536 3.536c.195.195.195.512 0 .707-.098.098-.226.146-.354.146z"
                      />
                    </g>
                  </g>
                </svg>
              </a>
              <a href="#">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <title>remove</title>
                  <path
                    d="M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z"
                  ></path>
                </svg>
              </a>
            </div>

          
          </div>
          <div class="room__box scroll">
            <div class="room__header scroll">
              <div class="room__info">
                <!-- <h3>100 Days of Code Challenge</h3> -->
                <h3><?php echo $room_name ?></h3>
                <span><?php echo $roundtime." ago" ?></span>
              </div>
              <div class="room__hosted">
                <p>Hosted By</p>
                <a href="#" class="room__author">
                  <div class="avatar avatar--small">
                    <img src="../static/assets/imgs/profile.jpg" />
                  </div>
                  <span><?php echo $username ?></span>
                </a>
              </div>
              <div class="room__details">
                <?php echo $room_about ?>
              </div>
              <span class="room__topics"><?php echo $room_tag ?></span>
            </div>
            <div class="room__conversation">
              
              <div class="threads scroll">
              
                <?php
                  include("connection.php");
                  $sql = "select user.username,message.timestamp,message.message_content from
                          message inner join user on user.user_id=message.sender_id where message.room_id=$room_id order by message.timestamp asc";
                  $result = $con->query($sql);
                  if(! $result){
                      die("Invalid Query: ".$con->error);
                  }
                  
                  while($row = $result->fetch_assoc())
                  {
                    $usr = $row['username'];
                    $tm = $row['timestamp'];
                    $date = new DateTime($tm);
                    $t = $date->format('H:i:s');
                    $ms = $row['message_content'];

                    echo "
                      <div class='thread'>
                        <div class='thread__top'>
                            <div class='thread__author'>
                              <a href='#' class='thread__authorInfo'>
                                <div class='avatar avatar--small'>
                                  <img src='../static/assets/imgs/profile.jpg' />
                                </div>
                                <span>$usr</span>
                              </a>
                              <span class='thread__date'>$t ago</span>
                            </div>
                            <div class='thread__delete'>
                              <svg version='1.1' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'>
                                  <title>remove</title>
                                  <path
                                    d='M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z'
                                  ></path>
                              </svg>
                            </div>
                          </div>
                          <div class='thread__details'>
                            $ms
                          </div>
                      </div>
                    
                    
                    ";

                    //echo $ms;
                  }
                ?>
                
              </div>
            </div>
          </div> 
          <div class="room__message">
            <form action="addmsg.php?rid=<?php echo $room_id?>&userid=<?php include("connection.php"); echo $user_id ?>&username=<?php echo $username ?>"  method="POST">
                  <br> <br>
              <input id="msg" name="msg" placeholder="Write your message here..." />
               <div style="float:right;">
                  <div class="form__action">
                    <button class="btn btn--main" type="submit" id="submit" name="submit">Enter</button>
                  </div>
              </div> 
            </form>
          </div>
        </div>
        <!-- Room End -->

        <!--   Start -->
        <div class="participants">
          <h3 class="participants__top">Participants <span>(5.3k Joined)</span></h3>
          <div class="participants__list scroll">

            <?php

              include("connection.php");
              $sql = "select user.user_id,user.username from user
                      join userroom on user.user_id=userroom.user_id where userroom.room_id=$room_id";
              $result = $con->query($sql);
              if(! $result){
                  die("Invalid Query: ".$con->error);
              }
                      
              while($row = $result->fetch_assoc())
              {
                //echo $row['username'];

                echo "
                    <a href='profile.php' class='participant'>
                      <div class='avatar avatar--medium'>
                        <img src='../static/assets/imgs/profile.jpg'/>
                      </div>
                      <p>
                          UserId:$row[user_id]
                          <span>$row[username]</span>
                      </p>
                    </a>
                ";
              }        
            ?>
            
          
            <a href="profile.php" class="participant">
              <div class="avatar avatar--medium">
                <img src="https://randomuser.me/api/portraits/men/37.jpg" />
              </div>
              <p>
                Dennis Ivy
                <span>@dennis_ivy</span>
              </p>
            </a>
            
            
          
            
          </div>
        </div>
        <!--  End -->
      </div>
    </main>
    <script src="../static/js/script.js"></script>
  </body>
</html>
