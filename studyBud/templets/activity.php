
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../static/assets/favicon.ico" type="image/x-icon" />
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
              <img src="https://randomuser.me/api/portraits/men/37.jpg" />
            </div>
            <p>John Doe <span>@john_doe</span></p>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <title>chevron-down</title>
              <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
            </svg>
          </a>
        </nav>
      </div>
    </header>
    <main class="layout">
      <div class="container">
        <div class="layout__box">
          <div class="layout__boxHeader ">
            <div class="layout__boxTitle">
              <a href="index.php">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <title>arrow-left</title>
                  <path
                    d="M13.723 2.286l-13.723 13.714 13.719 13.714 1.616-1.611-10.96-10.96h27.625v-2.286h-27.625l10.965-10.965-1.616-1.607z"
                  ></path>
                </svg>
              </a>
              <h3>Recent Activities</h3>
            </div>
          </div>

          <div class="activities-page layout__body activities">
               
            <div class="activities__box">
              <div class="activities__boxHeader roomListRoom__header">
                <a href="profile.php" class="roomListRoom__author">
                  <div class="avatar avatar--small">
                    <img src="https://randomuser.me/api/portraits/women/11.jpg" />
                  </div>
                  <p>
                    @sulamita_ivy
                    <span>5 days ago</span>
                  </p>
                </a>
                <div class="roomListRoom__actions">
                  <a href="#">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                      <title>remove</title>
                      <path
                                d='M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z'
                      ></path>
                        
                    </svg>
                  </a>
                </div>
              </div>
              <div class="activities__boxContent">
                <p>replied to post “<a href="room.php">100 Days of code challenge!</a>”</p>
                <div class="activities__boxRoomContent">
                  I’ll have to try this sometime. Really like this idea. Wanna talk about it? I ‘m....
                </div>
              </div>
            </div>
            
            <div class="activities__box">
              <div class="activities__boxHeader roomListRoom__header">
                <a href="profile.php" class="roomListRoom__author">
                  <div class="avatar avatar--small">
                    <img src="https://randomuser.me/api/portraits/women/11.jpg" />
                  </div>
                  <p>
                    @sulamita_ivy
                    <span>5 days ago</span>
                  </p>
                </a>
                <div class="roomListRoom__actions">
                  <a href="#">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                      <title>remove</title>
                      <path
                                d='M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z'
                      ></path>
                        
                    </svg>
                  </a>
                </div>
              </div>
              <div class="activities__boxContent">
                <p>replied to post “<a href="room.php">100 Days of code challenge!</a>”</p>
                <div class="activities__boxRoomContent">
                  I’ll have to try this sometime. Really like this idea. Wanna talk about it? I ‘m....
                </div>
              </div>
            </div>

            <!-- <?php 

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
                            <img src='https://randomuser.me/api/portraits/women/11.jpg' />
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
                        <p>replied to post “<a href='room.php'>$row[room_tag]</a>”</p>
                        <div class='activities__boxRoomContent'>
                          $row[message_content]
                        </div>
                      </div>
                  </div>

                    ";   
              }

            ?> -->
          </div> 
        </div>
        </div>
    </main>

    

    <script src="../static/js/script.js"></script>
  </body>
</html>
