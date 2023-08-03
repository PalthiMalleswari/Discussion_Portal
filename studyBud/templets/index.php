
<?php

include("connection.php");

  session_start();

  if(isset($_POST["submit"])){
     //echo $_POST["fullname"];
     $name = $_POST["room_name"];
     //$user_id = $_POST["user_id"];
     $about = $_POST["room_about"];
     $tag = $_POST["room_tag"];
     //$_SESSION['userid'] = $user_id;

     //echo $_SESSION['userid'];

     $sql = "
      insert into room(room_name,user_id,room_about,timestamp_col,room_tag) values('$name','$user_id','$about',CURRENT_TIMESTAMP,'$tag');";
    if($con->query($sql) === TRUE){
      echo "Room inserted Successfully";
    }
    else{
      echo "Failed to insert into Room";
    }
  }

  //

  
  $con->close();

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
        <form class="header__search" method="get" action="">
          <label>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <title>search</title>
              <path
                d="M32 30.586l-10.845-10.845c1.771-2.092 2.845-4.791 2.845-7.741 0-6.617-5.383-12-12-12s-12 5.383-12 12c0 6.617 5.383 12 12 12 2.949 0 5.649-1.074 7.741-2.845l10.845 10.845 1.414-1.414zM12 22c-5.514 0-10-4.486-10-10s4.486-10 10-10c5.514 0 10 4.486 10 10s-4.486 10-10 10z"
              ></path>
            </svg>
            <input placeholder="Search for rooms..." name="search" required />
            <button class="btn" name="submit" id="search">Search</button> 
          </label>
          
        </form>
        
        
        <div class="header__user">
           <a href="signup.php">
            Login
           </a>
        </div>
        <nav class="header__menu">
          <!-- Not Logged In -->
          <!-- <a href="/login.html">
            <img src="./assets/avatar.svg" />
            <p>Login</p>
          </a> -->

          <!-- Logged In -->
          

          <div class="header__user">
            <a href="profile.php">
              <div class="avatar avatar--medium active">
                <img src="../static/assets/imgs/profile.jpg" />
              </div>
              <p>Palthi Malleswari <span>@p_malli</span></p>
            </a>
            <button class="dropdown-button">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <title>chevron-down</title>
                <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
              </svg>
            </button>
          </div>

          <div class="dropdown-menu">
            <a href="settings.php" class="dropdown-link"
              ><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <title>tools</title>
                <path
                  d="M27.465 32c-1.211 0-2.35-0.471-3.207-1.328l-9.392-9.391c-2.369 0.898-4.898 0.951-7.355 0.15-3.274-1.074-5.869-3.67-6.943-6.942-0.879-2.682-0.734-5.45 0.419-8.004 0.135-0.299 0.408-0.512 0.731-0.572 0.32-0.051 0.654 0.045 0.887 0.277l5.394 5.395 3.586-3.586-5.394-5.395c-0.232-0.232-0.336-0.564-0.276-0.887s0.272-0.596 0.572-0.732c2.552-1.152 5.318-1.295 8.001-0.418 3.274 1.074 5.869 3.67 6.943 6.942 0.806 2.457 0.752 4.987-0.15 7.358l9.392 9.391c0.844 0.842 1.328 2.012 1.328 3.207-0 2.5-2.034 4.535-4.535 4.535zM15.101 19.102c0.26 0 0.516 0.102 0.707 0.293l9.864 9.863c0.479 0.479 1.116 0.742 1.793 0.742 1.398 0 2.535-1.137 2.535-2.535 0-0.668-0.27-1.322-0.742-1.793l-9.864-9.863c-0.294-0.295-0.376-0.74-0.204-1.119 0.943-2.090 1.061-4.357 0.341-6.555-0.863-2.631-3.034-4.801-5.665-5.666-1.713-0.561-3.468-0.609-5.145-0.164l4.986 4.988c0.391 0.391 0.391 1.023 0 1.414l-5 5c-0.188 0.188-0.441 0.293-0.707 0.293s-0.52-0.105-0.707-0.293l-4.987-4.988c-0.45 1.682-0.397 3.436 0.164 5.146 0.863 2.631 3.034 4.801 5.665 5.666 2.2 0.721 4.466 0.604 6.555-0.342 0.132-0.059 0.271-0.088 0.411-0.088z"
                ></path>
              </svg>
              Settings</a
            >
            <a href="login.php" class="dropdown-link"
              ><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <title>sign-out</title>
                <path
                  d="M3 0h22c0.553 0 1 0 1 0.553l-0 3.447h-2v-2h-20v28h20v-2h2l0 3.447c0 0.553-0.447 0.553-1 0.553h-22c-0.553 0-1-0.447-1-1v-30c0-0.553 0.447-1 1-1z"
                ></path>
                <path
                  d="M21.879 21.293l1.414 1.414 6.707-6.707-6.707-6.707-1.414 1.414 4.293 4.293h-14.172v2h14.172l-4.293 4.293z"
                ></path>
              </svg>
              Logout</a
            >
          </div>
        </nav>
      </div>
    </header>
    <main class="layout layout--3">
      <div class="container">
        <!-- Topics Start -->
        <?php 

          ob_start();
          include 'test.php';
          $content = ob_get_clean();
          echo $content;
       
       ?> 
       
        
        <!-- Topics End -->

        <!-- Room List Start -->
        
        <div class="roomList">
          <div class="mobile-menu">
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
            <div class="mobile-menuItems">
              <a class="btn btn--main btn--pill" href="#">Browse Topics</a>
              <a class="btn btn--main btn--pill" href="#">Recent Activities</a>
            </div>
          </div>
          <div class="roomList__header">
    
            <div>
              <h2>Study Room</h2>
              <?php
              include("connection.php");
                 
                 $s = "select count(*) as rooms_count from room";
                 $count_que = $con->query($s);
                 $count = $count_que->fetch_assoc()["rooms_count"];
                 echo "<p> $count Rooms available</p>";
              ?>
            </div>
            <a class="btn btn--main" href="create_room.php">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <title>add</title>
                <path
                  d="M16.943 0.943h-1.885v14.115h-14.115v1.885h14.115v14.115h1.885v-14.115h14.115v-1.885h-14.115v-14.115z"
                ></path>
              </svg>
              Create Room
            </a>
          </div>
          
          <div id="search_items">
              
              <?php
                  if(isset($_GET["submit"])){
                    $search =  $_GET['search'];

                    $sql = "select * from room where room_tag like '%$search%' or room_name like '%$search%';";
                    $res = mysqli_query($con,$sql);
                    if($res){

                      // Calculating no of matched rows 
                      
                      $num = mysqli_num_rows($res);

                      if($num>0){

                        echo "<h2>Search Results <br><br><hr><br> </h2>";
                        
                        $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);

                        foreach($rows as $row){
                          include ('room_data.php');
                          
                        }                
                         
                        echo "<br><br><br><hr> <br><br>";

                        
                      }
                      else{
                        
                        echo "<br><br><br><hr> <br><br>";
                        echo '<h2>Data Not Found</h2>';
                        echo "<br><br><br><hr> <br><br>";
                      }

                       
                    }
                  }
                  
              ?>
          </div>
          
            <div id="test">
              <?php
              //session_start();
              include("connection.php");
              //global $user_id;
              $display = "select * from room order by room.timestamp_col desc;";
              $result = $con->query($display);
              if(! $result){
                    die("Invalid Query: ".$con->error);
              }
              $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

              foreach($rows as $row){
                include ('room_data.php');
                
              }      
        
              
              $con->close();
              ?>  
            </div> 
          


          
        </div>

        <!-- Room List End -->

        <!-- Activities Start -->
        <div class="activities">
          <div class="activities__header">
            <h2>Recent Activities</h2>
          </div>

          <?php

            include("connection.php");
            $sql = "select room.room_name,message.message_content,
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
                        <a href='#' class='del'>
                          <svg version='1.1' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'>
                            <title>remove</title>
                            <path
                              d='M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z'
                            ></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                    <div class='activities__boxContent'>
                      <p>replied to post “<a href='room.php'>$row[room_name]</a>”</p>
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
    <script src="../static/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      console.log("hello");
      // function hide(e){
        
      //   $("#test").hide(2000);
      //   $("#search_items").fadeOut(2000);
      //  console.log("clicked");
      // };
     $("#search").click(function(){
      console.log("clciked");
      $("#test").hide();
     })

     //$("#test").hide();
      
    </script>

  </body>
</html>
