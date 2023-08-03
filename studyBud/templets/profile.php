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
      <a href="index.php" class="header__logo">
        <img src="../static/assets/logo.svg" />
        <h1>StudyBuddy</h1>
      </a>
      <form class="header__search">
        <label>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <title>search</title>
            <path
              d="M32 30.586l-10.845-10.845c1.771-2.092 2.845-4.791 2.845-7.741 0-6.617-5.383-12-12-12s-12 5.383-12 12c0 6.617 5.383 12 12 12 2.949 0 5.649-1.074 7.741-2.845l10.845 10.845 1.414-1.414zM12 22c-5.514 0-10-4.486-10-10s4.486-10 10-10c5.514 0 10 4.486 10 10s-4.486 10-10 10z">
            </path>
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
          <p>Palthi Malleswari <span>@p_malli</span></p>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <title>chevron-down</title>
            <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
          </svg>
        </a>
      </nav>
    </div>
  </header>
  <main class="profile-page layout layout--3">
    <div class="container">
      <!-- Topics Start -->
      <div class="topics">
        <div class="topics__header">
          <h2>Browse Topics</h2>
        </div>
        <ul class="topics__list">
        <li>
                <a href="index.php" class="active">All <span>553</span></a>
              </li>
            <?php

          include('connection.php');
          $sql = "select * from room;";
          $result = $con->query($sql);
          if( ! $result){
              die("Error Occured: ".$con->error);
          }
          while($row = $result->fetch_assoc()){
            // echo '<li>';
            // echo "<a href='#'>$row[room_name] <span>232</span></a>";
            // echo '</li>';

            echo "
              <li>
            <a href='room.php?room_id=$row[room_id]&username=$row[user_id]'>$row[room_tag] <span>553</span></a>
            </li>
            ";

            
          }
          $con->close();

          ?>
          
        </ul>
        <button class="btn btn--link" href="#">
          More
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <title>chevron-down</title>
            <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
          </svg>
        </button>
      </div>
      <!-- Topics End -->

      <!-- Room List Start -->
      <div class="roomList">
        <div class="profile">
          <div class="profile__avatar">
            <div class="avatar avatar--large active">
              <img src="../static/assets/imgs/profile.jpg"/>
            </div>
          </div>
          <div class="profile__info">
            <h3>Palthi Malleswari</h3>
            <p>@palthi</p>
            <a href="edit_user.php" class="btn btn--main btn--pill">Edit Profile</a>
          </div>
          <div class="profile__about">
            <h3>About</h3>
            <p>
             Student at IIIT Nuzvid pursuing Btech 2nd Year 

             Computer Sceience Student passionate about web Technologies and other latest Technologies


            </p>
          </div>
        </div>

        <div class="roomList__header">
          <div>
            <h2>Study Rooms Hosted by Palthi Malleswari</a>
            </h2>
          </div>
        </div>
        <div class="roomListRoom">

        <?php
          //session_start();
          include("connection.php");
          //global $user_id;
          $display = "select * from room join userroom on room.room_id=
                        userroom.room_id where userroom.user_id=$user_id";
          $result = $con->query($display);
          if(! $result){
                die("Invalid Query: ".$con->error);
          }
    
          while($row = $result->fetch_assoc())
          {
            $sql = "select * from user where user_id ='$row[user_id]'";
            $res = $con->query($sql);
            if(! $res){
              die("Went Wrong: ".$con->error);

            }

            $name;

            while($data = $res->fetch_assoc()){

                $name = $data["username"];
                //echo $data;
            }

            

          echo " 
                
                
            <div class='roomListRoom'>
              <div class='roomListRoom__header'>
                <a href='profile.php' class='roomListRoom__author'>
                  <div class='avatar avatar--small'>
                    <img src='../static/assets/imgs/profile.jpg' />
                  </div>
                  <span>$name</span>
                </a>
                <div class='roomListRoom__actions'>
                  <span>$row[timestamp_col] ago</span>
                </div>
              </div>
              <div class='roomListRoom__content'>
                <a href='room.php?room_id=$row[room_id]&username=$name'taget='_blank'> $row[room_tag] </a>
                <p>
                  $row[room_about]
                </p>
              </div>
              <div class='roomListRoom__meta'>
                <a href='room.php' class='roomListRoom__joined'>
                  <svg version='1.1' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'>
                    <title>user-group</title>
                    <path
                      d='M30.539 20.766c-2.69-1.547-5.75-2.427-8.92-2.662 0.649 0.291 1.303 0.575 1.918 0.928 0.715 0.412 1.288 1.005 1.71 1.694 1.507 0.419 2.956 1.003 4.298 1.774 0.281 0.162 0.456 0.487 0.456 0.85v4.65h-4v2h5c0.553 0 1-0.447 1-1v-5.65c0-1.077-0.56-2.067-1.461-2.584z'
                    ></path>
                    <path
                      d='M22.539 20.766c-6.295-3.619-14.783-3.619-21.078 0-0.901 0.519-1.461 1.508-1.461 2.584v5.65c0 0.553 0.447 1 1 1h22c0.553 0 1-0.447 1-1v-5.651c0-1.075-0.56-2.064-1.461-2.583zM22 28h-20v-4.65c0-0.362 0.175-0.688 0.457-0.85 5.691-3.271 13.394-3.271 19.086 0 0.282 0.162 0.457 0.487 0.457 0.849v4.651z'
                    ></path>
                    <path
                      d='M19.502 4.047c0.166-0.017 0.33-0.047 0.498-0.047 2.757 0 5 2.243 5 5s-2.243 5-5 5c-0.168 0-0.332-0.030-0.498-0.047-0.424 0.641-0.944 1.204-1.513 1.716 0.651 0.201 1.323 0.331 2.011 0.331 3.859 0 7-3.141 7-7s-3.141-7-7-7c-0.688 0-1.36 0.131-2.011 0.331 0.57 0.512 1.089 1.075 1.513 1.716z'
                    ></path>
                    <path
                      d='M12 16c3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.859 0-7 3.141-7 7s3.141 7 7 7zM12 4c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5c0-2.757 2.243-5 5-5z'
                    ></path>
                  </svg>
                  5.3k Joined
                </a>
                <p class='roomListRoom__topic'>$row[room_name]</p>
              </div>
            </div>
            ";
            
          }
          ?>
          
        </div>
      </div>  
      <!-- Room List End -->

      <!-- Activities Start -->
      <div class="activities">
        
        <?php

            include("connection.php");
            $sql = "select room.room_tag,message.message_content,
                    message.timestamp from message inner join room on
                    message.room_id=room.room_id where message.sender_id=$user_id order by message.timestamp desc";
            $result = $con->query($sql);
            if(! $result){
                die("Invalid Query: ".$con->error);
            }
                    
            while($row = $result->fetch_assoc())
            {
                //echo $row['message_content'];
                $tm = $row['timestamp'];
                $date = new DateTime($tm);
                $t = $date->format('H:i:s');
                
                  echo "
                  <div class='activities__box' class='myBlock'>
                    <div class='activities__boxHeader roomListRoom__header'>
                      <a href='profile.php' class='roomListRoom__author'>
                        <div class='avatar avatar--small'>
                          <img src='../static/assets/imgs/profile.jpg' />
                        </div>
                        <p>
                          $username
                          <span>$t ago</span>
                        </p>
                      </a>
                      <div class='roomListRoom__actions'>
                        <a href='#'>
                            <svg version='1.1' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'>
                            <title>delete</title>
                              <path
                                d='M30 4h-8v-3c0-0.553-0.447-1-1-1h-10c-0.553 0-1 0.447-1 1v3h-8v2h2v24c0 1.104 0.897 2 2 2h20c1.103 0 2-0.896 2-2v-24h2v-2h-0zM12 2h8v2h-8v-2zM26.002 30l-0.002 1v-1h-20v-24h20v24h0.002z'>
                              </path>
                            </svg>
                        </a>
                      </div>
                    </div>
                    <div class='activities__boxContent'>
                      <p>replied to post “<a href='room.php'>$row[room_tag]</a>”</p>
                      <div class='activities__boxRoomContent'>
                        $row[message_content]
                      </div>
                    </div>
                </div>
  
                  ";
                
                
            }

          ?>

        
      </div>
      <!-- Activities End -->
    </div>
  </main>
</body>

</html>