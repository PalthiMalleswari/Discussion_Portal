
<!-- //

  // if(isset($_POST["submit"])){
  //   echo $_POST["fullname"];
  //   echo $_POST["userid"];
  //   echo $_POST["username"];
  //   echo $_POST["password"];

  // }

  // $host = "localhost";
  // $username = "root";
  // $password = "malleswari";
  // $database = "studybud";

  // $conn = new mysqli($host,$username,$password,$database);
  // if($conn->connect_error){
  //   die("Conection Failed : ". $conn->connect_error);
  // }
  // else{
  //   echo "Sent Successfully";
  // }
 -->
<?php
  
  include("connection.php");
  if(isset($_POST["submit"])){
       //echo $_POST["fullname"];
       
       $name = $_POST["username"];
       $pas = $_POST["password"];

       $sql = "insert into user(username,password) values('$name','$pas');";
      if($con->query($sql) === TRUE){
        echo "Inserted Successfully";
      }
      else{
        echo "Failed to insert";
      }     
  }
  $con->close();
?>

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
            <svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 32 32"
            >
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
          <a href="/login.php">
            <img src="../static/assets/avatar.svg" />
            <p>Account</p>
          </a>

          <!-- Logged In -->
          <!-- <a href="#">
            <div class="avatar avatar--medium active">
              <img src="https://randomuser.me/api/portraits/men/37.jpg" />
            </div>
            <p>John Doe <span>@john_doe</span></p>
            <svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 32 32"
            >
              <title>chevron-down</title>
              <path d="M16 21l-13-13h-3l16 16 16-16h-3l-13 13z"></path>
            </svg>
          </a> -->
        </nav>
      </div>
    </header>
    <main class="auth layout">
      <div class="container">
        <div class="layout__box">
          <div class="layout__boxHeader">
            <div class="layout__boxTitle">
              <h3>Sign up</h3>
            </div>
          </div>
          <div class="layout__body">
            <h2 class="auth__tagline">Find your study partner</h2>

            <form class="form" action="signup.php" method="POST">
              <div class="form__group form__group">
                <label for="fullname">Full Name</label>
                <input id="fullname" name="fullname" type="text" placeholder="e.g. Dennis Ivy" />
              </div>
              
              <div class="form__group form__group">
                <label for="room_name">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. dennis_ivy" />
              </div>
              <div class="form__group">
                <label for="password">Password</label>
                <input
                  id="password"
                  name="password"
                  type="password"
                  placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                />
              </div>

              <div class="form__group">
                <label for="confirm_password">Confirm Password</label>
                <input
                  id="confirm_password"
                  name="confirm_password"
                  type="password"
                  placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                />
              </div>

              <button class="btn btn--main" type="submit" id="submit" name="submit">
                <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                >
                  <title>lock</title>
                  <path
                    d="M27 12h-1v-2c0-5.514-4.486-10-10-10s-10 4.486-10 10v2h-1c-0.553 0-1 0.447-1 1v18c0 0.553 0.447 1 1 1h22c0.553 0 1-0.447 1-1v-18c0-0.553-0.447-1-1-1zM8 10c0-4.411 3.589-8 8-8s8 3.589 8 8v2h-16v-2zM26 30h-20v-16h20v16z"
                  ></path>
                  <path
                    d="M15 21.694v4.306h2v-4.306c0.587-0.348 1-0.961 1-1.694 0-1.105-0.895-2-2-2s-2 0.895-2 2c0 0.732 0.413 1.345 1 1.694z"
                  ></path>
                </svg>

                Sign Up
              </button>
            </form>

            <div class="auth__action">
              <p>Already have an account?</p>
              <a href="login.php" class="btn btn--link">Log In</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
