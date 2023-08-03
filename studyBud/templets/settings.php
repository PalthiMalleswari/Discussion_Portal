
<?php

    if(isset($_SERVER[""]))

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
          </a>
        </nav>
      </div>
    </header>
    <main class="create-room layout">
      <div class="container">
        <div class="layout__box">
          <div class="layout__boxHeader">
            <div class="layout__boxTitle">
              <a href="index.php">
                <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                >
                  <title>arrow-left</title>
                  <path
                    d="M13.723 2.286l-13.723 13.714 13.719 13.714 1.616-1.611-10.96-10.96h27.625v-2.286h-27.625l10.965-10.965-1.616-1.607z"
                  ></path>
                </svg>
              </a>
              <h3>Settings</h3>
            </div>
          </div>

          <div class="settings layout__body">
            <div class="settings__avatar">
              <div class="avatar avatar--large active">
                <img src="../static/assets/avatar.svg" id="preview-avatar" />
              </div>
            </div>
            <form class="form" action="settings.php" method="POST">
              <div class="form__group form__avatar">
                <label for="avatar">Upload Avatar</label>
                <input
                  class="form__hide"
                  required
                  type="file"
                  name="avatar"
                  id="avatar"
                  accept="image/png, image/gif, image/jpeg"
                />
              </div>
              <div class="form__group">
                <label for="username">Username</label>
                <input
                  id="username"
                  name="username"
                  type="text"
                  placeholder="e.g. @dennis_ivy"
                  value="@dennis_ivy"
                />
              </div>
              <div class="form__group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. user@domain.com" />
              </div>
              <div class="form__group">
                <label for="about">About</label>
                <textarea name="about" id="about" placeholder="Write about yourself..."></textarea>
              </div>
              <div class="form__action">
                <a class="btn btn--dark" href="profile.php">Cancel</a>
                <button class="btn btn--main" type="submit">Update Settings</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <script src="../static/js/script.js"></script>
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
