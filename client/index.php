
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eat cells smaller than you and don't get eaten by the bigger ones, as an MMO">
    <meta name="keywords" content="agario, agar, io, cell, cells, virus, bacteria, blob, game, games, web game, html5, fun, flash">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Splitex.eu</title>

    <link id="favicon" rel="icon" type="image/png" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

   <link href="light.css" rel="stylesheet" id="csssssss">

    <link href="assets/css/gallery.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/io-design.css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="assets/js/quadtree.js"></script>
    <script src="assets/js/main_out.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/io.ui.js"></script>
</head>

<body>


    <div class="hud" style="display: none
    ">

      <div class="adminpanel">
        <div class="adminpanel-title">
            Admin Tools
        </div>

        <div class="adminpanel-tool">
            Target ID:
            <br>
            Name:
            <hr>
            Hotkeys:
            <br>
            1.
            <br>
            2.
            <br>
            3.
            <br>
            4.
            <br>
            5.
        </div>

      </div>
      
    </div>


<div class="modal fade" id="inPageModal" role="dialog" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 400px;align-content: center;position: absolute;left: 100px;top: 100px;">
                <div class="modal-header">
                    <button style="color: white;" type="button" class="close" data-dismiss="modal">×</button>
                    <h4 id="inPageModalTitle" class="modal-title">Settings</h4>
                </div>
                <div id="inPageModalBody" class="modal-body">
<script>
  $(function(){

        $('#changetabbutton').click(function(e){
            e.preventDefault();

            $('#premium-skins').tabcontent('show');
        });

    });
  </script>
<div class="row center">
    <ul>
        <div class="tab"><center>
  <button class="tablinks" id="changetabbutton" onclick="openCity(event, 'settings')">Settings</button>
  <button class="tablinks" onclick="openCity(event, 'hotkeys')">Hotkeys</button></center>
</div>
<div id="settings" class="tabcontent" style="display: block;">

  <center><span id="animation">Animation Delay 120</span></center>
            <input id="animationDelay" type="range" value="120" step="5" min="45" max="240" onchange="setAnimationDelay($(this).val());">
            <br>
  <div id="settings" class="checkbox">

                    <label><input id="showSkins" type="checkbox">Skins</label>
                    <label><input id="showNames" type="checkbox">Names</label>
                    <label><input id="showMass" type="checkbox">Mass</label>
                    <label><input id="cellGlow" type="checkbox">CellGlow</label>
                    <label><input id="darkTheme" type="checkbox">Dark</label>
                    <label><input id="showGrid" type="checkbox">Grids</label>
                    <label><input id="showBorder" type="checkbox">Borders</label>
                    <label><input id="showMinimap" type="checkbox">Minimap</label>

                     <center><button class="light-theme btn-theme" onclick="changeTheme('light.css')">Light Mode</button>
                     <button class="dark-theme btn-theme" onclick="changeTheme('dark.css')">Dark Mode</button></center>
                     <script>

        function changeTheme(cssFile) {
            document.querySelector('#csssssss').href = cssFile;
            localStorage.setItem('csssssss', cssFile);
        }

        var setCss = localStorage.getItem('csssssss');

        if(setCss == null) {
            changeTheme('light.css');
        } else {
            changeTheme(setCss);
        }




    </script>
                    <!--<label><input id="smoothCamera" type="checkbox">Smooth</label>-->
            </div>

</div>

<div id="hotkeys" class="tabcontent" style="display: none;overflow: auto;">

  <table>
  <tr>
    <th><center>Action</center></th>
    <th><center>Key</center></th>
  </tr>
  <tr>
    <td>DoubleSplit</td>
    <td><center><div id="doublesplit-keybox" class="keybox" tabindex="0"></div></center></td>
  </tr>
  <tr>
    <td>TripleSplit</td>
    <td><center><div id="triplesplit-keybox" class="keybox" tabindex="0"></div></center></td>
  </tr>
  <tr>
    <td>16x Split</td>
    <td><center><div id="sixteensplit-keybox" class="keybox" tabindex="0"></div></center></td>
  </tr>
  <tr>
    <td>Feed Macro</td>
    <td><center><div id="sixtyfoursplit-keybox" class="keybox" tabindex="0"></div></center></td>
  </tr>
</table>


</div>


<script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script></ul></div></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div></div></div>

                    <div class="center">
                        <div class="loader"></div>
                    </div>
                </div>
            </div></div></div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">

<div id="colors" class="tabcontent">
  <center><h3>Theme</h3></center>
  <hr>
  <center>

  <button class="light-theme" onclick="changeTheme('light.css')" style="margin-top: 10%;background: blue;">Light Mode</button>
            <button class="dark-theme" onclick="changeTheme('dark.css')" style="margin-top: 10%;background: blue;">Dark Mode</button>

</center>
</div>

<div id="macros" class="tabcontent">
  <center><h3>Hotkeys</h3></center>
  <hr>
  <table class="controls">
    <tbody><div align="center">
            <div class="keycontrol-box">
      <div class="info" style="margin-left: 3px;">
                  Press <div id="doublesplit-keybox" class="keybox" tabindex="0"></div> DoubleSplit
                </div>
                <div class="info" style="margin-right: -4px;">
                  Press <div id="triplesplit-keybox" class="keybox" tabindex="0"></div> TripleSplit
                </div>
                <div class="info">
                  Press <div id="sixteensplit-keybox" class="keybox" tabindex="0"></div> 16x Split
                </div>
                <div class="info">
                  Press <div id="sixtyfoursplit-keybox" class="keybox" tabindex="0"></div> 32x Split
                </div>
              </div>  </div>
<script type="text/javascript">
                  
                  let doubleSplitBox = document.querySelector("#doublesplit-keybox");
                  let tripleSplitBox = document.querySelector("#triplesplit-keybox");
                  let sixteenSplitBox = document.querySelector("#sixteensplit-keybox");
                  let sixtyfourSplitBox = document.querySelector("#sixtyfoursplit-keybox");
                  let feedkeyBox = document.querySelector("#feedkey-keybox");
                  
                  doubleSplitBox.addEventListener("keydown", event => {
                      doubleSplitBox.innerText = event.key == " " ? event.code : event.key;
                      localStorage.setItem("doubleSplitKey", doubleSplitBox.innerText.toLowerCase());
                  });
                  tripleSplitBox.addEventListener("keydown", event => {
                      tripleSplitBox.innerText = event.key == " " ? event.code : event.key;
                      localStorage.setItem("tripleSplitKey", tripleSplitBox.innerText.toLowerCase());
                  });
                  sixteenSplitBox.addEventListener("keydown", event => {
                      sixteenSplitBox.innerText = event.key == " " ? event.code : event.key;
                      localStorage.setItem("sixteenSplitKey", sixteenSplitBox.innerText.toLowerCase());
                  });
                  sixtyfourSplitBox.addEventListener("keydown", event => {
                      sixtyfourSplitBox.innerText = event.key == " " ? event.code : event.key;
                      localStorage.setItem("sixtyfourSplitKey", sixtyfourSplitBox.innerText.toLowerCase());
                  });
                  feedkeyBox.addEventListener("keydown", event => {
                      feedkeyBox.innerText = event.key == " " ? event.code : event.key;
                      localStorage.setItem("feedKey", feedkeyBox.innerText.toLowerCase());
                  });
                  
                  doubleSplitBox.innerText = localStorage.getItem("doubleSplitKey");
                  tripleSplitBox.innerText = localStorage.getItem("tripleSplitKey");
                  sixteenSplitBox.innerText = localStorage.getItem("sixteenSplitKey");
                  sixtyfourSplitBox.innerText = localStorage.getItem("sixtyfourSplitKey");
                  feedkeyBox.innerText = localStorage.getItem("feedKey");
              </script>       
  </tbody></table>
</div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
    </div>

    <div id="gallery" onclick="if (event.target == this) this.hide()" style="display: none;">
        <div id="gallery-content">
            <div id="gallery-header">Skins</div>
            <div id="gallery-body"></div>
        </div>
    </div>
    <div id="overlays" style="display: none;zoom: 0.9;top: -100px">
      <div id="eatedAd" style="display:none">

        <div class="deadblock">
          <!--<h3>You're dead</h3>-->
          <h6>Advertisement</h6>
          <div class="advertblock"></div>
          <button id="continueAd" class="push_button green2">Continue</button>
        </div>
      </div>


      <div id="allpanelscolor">
        <div id="helloDialog">
            <div class="form-group">
                <center><h2 id="title">Splitex.eu</h2></center>
            </div>

<script>
    function verif(chars) {
        // Caractères autorisés
        var regex = new RegExp("[a-z0-9]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
            }
        }
    }
</script>

            <div class="form-group">
                <input id="nick" oninput="verif();" class="form-control" placeholder="Nickname" maxlength="150"><button id="play-btn"><i class="fas fa-play"></i></button>
                <input id="skin" class="form-control"  placeholder="Skin Name" style="display: none;">
                <select id="gamemode" class="form-control" onchange="setserver(this.value)" style="display: none;" required>
                    <option value="localhost:443" selected>Local 443</option>
                    <option value="splitex.eu:7878" selected>Local 8080</option>
                </select>
            </div>
            <div class="btn-align">
            <button type="button" id="settings-btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#inPageModal">Settings</button><button id="spectate-btn" onclick="spectate()" class="btn btn-warning btn-spectate btn-needs-server">Spectate</button><button id="gallery-btn" class="submit-skins" onclick="openSkinsList();">Free skins</button></div>

        

    
                        <div id="footer">
                <iframe class="newpackframe"></iframe>
                <button class="news-button" onclick="notyet()">Updates</button>
            </div>


            <div id="LoginPanel">
               <div class="profile-img"><img src="assets/img/profile.png" style="margin-bottom: -120px;width: 100px;height: 100px; display: none;"></div><center><h2><b><?php 
                        if (isset($_SESSION['email']))
                        {
                            echo $_SESSION["username"];
                        }
                        else
                        {
                            echo "Login";
                        }
                        ?></b></h2>
                        <div class="coin-amount" style="display: <?php 
                        if (isset($_SESSION['email']))
                        {
                            echo "block";
                        }
                        else
                        {
                            echo "none";
                        }
                        ?>;"><h4><b><span class="coins-amount"></span>        <i class="fas fa-coins" style="color: gold"></i></b></h4></div>

                      </center>
                <div id="login-register-tab" style="display: <?php 
                        if (isset($_SESSION['email']))
                        {
                            echo "none";
                        }
                        else
                        {
                            echo "block";
                        }
                        ?>">
                <div class="tab-login-button">

                <center>
                <button class="tab-login-btn tab-btn-splitex tablinks2" onclick="openlogin(event, 'login');">Login</button><button class="tab-register-btn tab-btn-splitex tablinks2" onclick="openlogin(event, 'register');">Register</button>
                </center>

                </div>


                 <div id="login" class="tabcontent2" style="display: block;"> 
                  
                  <form action="" method="POST">
 <div class="container">

    <input type="text" placeholder="Enter Email" name="emailconnect" id="emailconnect">

    <input type="password" placeholder="Enter Password" name="passwordconnect" id="passwordconnect">


    <button type="submit" id="submit" name="formlogin" class="loginbtn">Login</button>
  </div></form>
                 </div>

<script>

$(document).ready(function(){

    $("#submit").click(function{

        $.post(
            'index.php', // Un script PHP que l'on va créer juste après
            {
                email : $("#emailconnect").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php
                password : $("#passwordconnect").val()
            },

            function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
            },

            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
         );

    });

});

</script>

                  <div id="register" class="tabcontent2" style="display: none;">
                    <form action="register.php" method="POST">

<div class="container2"><center>

    <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php if(isset($email)) { echo $email; } ?>">

    <input type="password" placeholder="Enter Password" name="password" id="password" value="<?php if(isset($password)) { echo $password; } ?>">

    <input type="password" placeholder="Confirm Password" name="password2" id="password2" value="<?php if(isset($password2)) { echo $password2; } ?>">

    <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php if(isset($username)) { echo $username; } ?>">

    <button type="submit" name="formregister" class="registerbtn">Register</button></center>
  </div>
                  </div>
            </div>
          </form>

<div class="profile" style="display: <?php 
                        if (isset($_SESSION['email']))
                        {
                            echo "block";
                        }
                        else
                        {
                            echo "none";
                        }
                        ?>">
  <div class="profile-infos">
  <center><img src="https://i.imgur.com/z8D1V7k.png" class="test" id="actualSkin" data-toggle="modal" data-target="#skinss" style="height: 125px;width: 125px;cursor: pointer;border-radius: 50%;box-shadow: 0px 0px 8px #000;margin: 20px;" val="" value="">
          <div class="level">
              <h4 style="background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);-webkit-background-clip: text;color: transparent; -webkit-text-fill-color: transparent;"><b>LEVEL: 0</b></h4>
              <div class="Loading">
  <div class="Loading-progress"></div>
</div>
          </div>
  <button class="shopbutton open_shop pop"><center><b>Shop</b></center></button>
  <button class="friendsbutton" onclick="notyet();"><center><b>Friends (Coming Soon)</b></center></button>
  <button class="profilesettingsbutton" onclick="notyet();"><center><b>Profile settings (Coming Soon)</b></center></button>
  <form action="logout.php" method="POST">
  <button class="logoutbutton" href="logout.php"><center><b>Logout</b></center></button>
</form>
  </center>
    </div>
</div>

        </div>

        <!--- Shop Menu Pop up --->
    <div class="popup dark" id="shop_home">
      <button class="closeUI pop"><i class="fa fa-times" aria-hidden="true"></i></button>
      <div class="header">Shop Menu</div>
      <div class="main-container">
        <div class="content">
          <div class="io-col-33 io-col">
            <div id="" class="shop-category coming-soon" onclick="notyet();">
              <div class="category-name">
                <div class="c">Buy Skins</div>
              </div>
            </div>
          </div>
          <div class="io-col-33 io-col">
            <div id="" class="shop-category coming-soon" onclick="notyet();">
              <div class="category-name">
                <div class="c">Bot Packages</div>
              </div>
            </div>
          </div>
          <div class="io-col-33 io-col">
            <div id="" class="shop-category coming-soon" onclick="notyet();">
              <div class="category-name">
                <div class="c">Leaderboard Colors</div>
              </div>
            </div>
          </div>
          <div class="io-col-33 io-col">
            <div class="shop-category coming-soon" onclick="notyet();">
              <div class="category-name">
                <div class="c">XP Boost</div>
              </div>
            </div>
          </div>
          <div class="io-col-33 io-col">
            <div class="shop-category coming-soon" onclick="notyet();">
              <div class="category-name">
                <div class="c">Mass Boost</div>
              </div>
            </div>
          </div>
          <div class="io-col-33 io-col">
            <div class="shop-category coming-soon" onclick="notyet();">
              <div class="category-name">
                <div class="c">Get Coins</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- Owned Skins Popup --->
    <div class="popup dark" id="owned_skins">
      <button class="backUI pop"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
      <button class="closeUI pop"><i class="fa fa-times" aria-hidden="true"></i></button>
      <div class="header">Change your Skin</div>
      <div class="main-container">
        <div class="content skin-content">
          <div class="skin-container">
            <div id="my_skins_list"></div>
          </div>
        </div>
      </div>
    </div>
    <!--- Shop Skins Pop up --->
    <div class="popup dark" id="shop_skins">
      <button class="backUI pop"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
      <button class="closeUI pop"><i class="fa fa-times" aria-hidden="true"></i></button>
      <div class="header">Skins Shop</div>
      <div class="main-container">
        <div class="content skin-content">
          <div class="skin-container">
            <div id="skins_list"></div>
          </div>
        </div>
        <div class="coin-container">
          <div class="content">
            <div class="io-col-50">
              <div class="padding-8px">
                <div class="my-coins">
                  <span class="coins-amount">0</span> Coins <button class="getmore"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- Bots Shop Pop up --->
    <div class="popup dark" id="bot_packages">
      <button class="backUI pop"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
      <button class="closeUI pop"><i class="fa fa-times" aria-hidden="true"></i></button>
      <div class="header">Bots Packages</div>
      <div class="main-container">
        <div class="content skin-content">
          <div class="skin-container">
            <div id="bot-sales"></div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">15 Bots for 25 Minutes</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">2000 Coins</button> <button class="purchaseThis">Buy Now</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">25 Bots for 25 Minutes</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">3000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">25 Bots for 2 Hours</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">6000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">50 Bots for 1 Hour</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">10,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">75 Bots for 1 Hour</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">12,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">75 Bots for 2 Hours</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">15,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">100 Bots for 2 Hours</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">20,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">100 Bots for 4 Hours</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">34,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle">100 Bots for 12 Hours</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">50,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
          </div>
        </div>
        <div class="coin-container">
          <div class="content">
            <div class="io-col-50">
              <div class="padding-8px">
                <div class="my-coins">
                  <span class="coins-amount">0</span> Coins <button class="getmore"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="io-col-50">
              <div class="padding-8px">
                <div class="my-points">
                  0 Points <button class="getmore"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- Bots Shop Pop up --->
    <div class="popup dark" id="leaderboard_colors">
      <button class="backUI pop"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
      <button class="closeUI pop"><i class="fa fa-times" aria-hidden="true"></i></button>
      <div class="header">Leaderboard Colors</div>
      <div class="main-container">
        <div class="content skin-content">
          <div class="skin-container">
            <div id="bot-sales"></div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="red">Red</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">20,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="orange">Orange</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">20,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="pink">Pink</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">20,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="blue">Blue</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">20,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="green">Green</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">20,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="rainbow">Rainbow</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">50,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="red-shdw">Red Glowing</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">30,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="orange-shdw">Orange Glowing</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">30,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="pink-shdw">Pink Glowing</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">30,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="blue-shdw">Blue Glowing</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">30,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="green-shdw">Green Glowing</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">30,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
            <div class="skin-holder shop-list">
              <div class="io-col-70 text-align-left"><div class="shopTitle"><span class="rainbow-shdw">Rainbow Glowing</span> Leaderboard Name</div></div>
              <div class="io-col-30 text-align-right"><button class="pricing">80,000 Coins</button> <button class="purchaseCant">Can't Afford</button></div>
            </div>
          </div>
        </div>
        <div class="coin-container">
          <div class="content">
            <div class="io-col-50">
              <div class="padding-8px">
                <div class="my-coins">
                  <span class="coins-amount">0</span> Coins <button class="getmore"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="io-col-50">
              <div class="padding-8px">
                <div class="my-points">
                  0 Points <button class="getmore"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="Fueatured-videoPanel">
<div class="featuredvideo">
          <div class="featured">Featured Video</div>
          <iframe class="ytvideoframe" src="https://www.youtube.com/embed/f_i8tHLyhBE"></iframe>
        </div>
          </div>


    

          <div id="SubmitPanel">
            <button class="submit-skins" onclick="submitskins();">Custom Skins</button>
          </div>

          <div id="adsPanelleft" style="display: none;">
          </div>

          <div id="adsPanelright" style="display: none;">
            
          </div>

          <div class="right-panels">

          <div id="InfosPanel">
     <center><div class="terms"><span class="text-muted"><a href="tos.html">Terms of Service and Privacy Policy</a></span></div></center>
          </div>


            <div id="ServersPanel">
                <center><h2><b>Servers</b></h2></center>

                <button class="accordion">UltraFeed</button>
<div class="panel">
   <button type="button" id="server-button" class="btn btn-light" onclick="setserver('splitex.eu:7878')"><p>UltraFeed #1</p></button>
</div>

                <button class="accordion">UltraSplit</button>
<div class="panel">
  <button type="button" id="server-button" class="btn btn-light" onclick="setserver('splitex.eu:7251')"><p>UltraSplit #1</p></button>
</div>

<button class="accordion">Instant</button>
<div class="panel">
   <button type="button" id="server-button" class="btn btn-light" onclick="setserver('splitex.eu:5253')"><p>Instant #1</p></button>
</div>

<button class="accordion">Selffeed</button>
<div class="panel">
   <button type="button" id="server-button" class="btn-light" onclick="setserver('splitex.eu:7253')"><p>Selffeed #1</p></button>
</div>

<button class="accordion">FastSplit</button>
<div class="panel">
   <button type="button" id="server-button" class="btn-light" onclick="setserver('splitex.eu:7354')"><p>FastSplit #1</p></button>
</div>

            </div></div>


            <div id="SocialPanel">
                <center><a href="https://discord.gg/G3S5DDAdSe"><img src="assets/img/discord.png" style="width:82px; height:80px" title="Discord server" alt="Discord"></a></center>
            </div>


            <div id="AdsPanel" style="display: none;">
                <center><h4>Ads</h4></center>
            </div>
</div></div>
</div>

    <div id="connecting">
        <div id="connecting-content">
            <h2>Connecting</h2>
            <p> If you cannot connect to the servers, check if you have some anti virus or firewall blocking the connection.</p>
        </div>
    </div>

    <div id="mobileStuff" style="display: none;">
        <div id="touchpad"></div>
        <div id="touchCircle" style="display: none;"></div>
        <img src="assets/img/split.png" id="splitBtn">
        <img src="assets/img/eject.png" id="ejectBtn">
    </div>

    <canvas id="canvas" width="800" height="600" moz-opaque></canvas>
    <input type="text" id="chat_textbox" placeholder="Press enter to chat" maxlength="200">
    <div style="font-family:'Ubuntu'">&nbsp;</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        
        function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
        <script>
        
        function openlogin(evt, cityName) {
  // Declare all variables
  var i, tabcontent2, tablinks2;

  // Get all elements with class="tabcontent" and hide them
  tabcontent2 = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent2.length; i++) {
    tabcontent2[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks2 = document.getElementsByClassName("tablinks2");
  for (i = 0; i < tablinks2.length; i++) {
    tablinks2[i].className = tablinks2[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
                var colorWell
var defaultColor = "#0000ff";

window.addEventListener("load", startup, false);
 function startup() {
  colorWell = document.querySelector("#colorWell");
  colorWell.value = defaultColor;
  colorWell.addEventListener("input", updateFirst, false);
  colorWell.addEventListener("change", updateAll, false);
  colorWell.select();
}
 function updateFirst(event) {
  var p = document.querySelector("p");

  if (p) {
    p.style.color = event.target.value;
  }
} function updateAll(event) {
  document.querySelectorAll("p").forEach(function(p) {
    p.style.color = event.target.value;
  });
}

            </script>
            <script>
              var p = document.getElementById("animationDelay"),
    res = document.getElementById("animation");

p.addEventListener("input", function() {
    res.innerHTML = "Animation Delay " + p.value;
}, false); 
</script>
<script>
function notyet() {
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Available soon!',
  customClass: 'error-message'
})
}
</script>
<script>
function submitskins() {
Swal.fire({
  icon: 'warning',
  title: 'Custom Skins',
  text: 'You would like to use a skin of your choice? You now can by contacting Onkill#0001 or Yellow#0877 on discord for a price of 20$/€(paypal only).Note: The skin must require a name and has to be a PNG file.',
  customClass: 'error-message'
})
}
</script>
<script>
$("#continueAd").click(() => {
            $("#mainMenu").css('display', 'block');
            $("#eatedAd").css('display', 'none')
        })
function showAdBanner() {
        $("#mainMenu").css('display', 'none');
        $("#eatedAd").css('display', 'block')
        showESCOverlay();
    }
</script>
<script type="text/javascript">
    var my_coins = <?php echo $_SESSION["coins"]; ?>;
</script>
</body>
</html>
