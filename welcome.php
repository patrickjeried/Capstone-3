<?php
// start the session!
session_start();
 
// If session start is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body style="background-color: #12d6e0;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%2300cee5' points='800%2C100 0%2C200 0%2C800 1600%2C800 1600%2C200'/%3E%3Cpolygon fill='%2300c6e9' points='800%2C200 0%2C400 0%2C800 1600%2C800 1600%2C400'/%3E%3Cpolygon fill='%2300beed' points='800%2C300 0%2C600 0%2C800 1600%2C800 1600%2C600'/%3E%3Cpolygon fill='%2300b5ef' points='1600%2C800 800%2C400 0%2C800'/%3E%3Cpolygon fill='%2300abef' points='1280%2C800 800%2C500 320%2C800'/%3E%3Cpolygon fill='%2300a1ee' points='533.3%2C800 1066.7%2C800 800%2C600'/%3E%3Cpolygon fill='%230c97eb' points='684.1%2C800 914.3%2C800 800%2C700'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
background-position: center;">
<?php
    include_once 'navbar.php';
?>

                              </ul>
                        </div>
                  </nav>

            </header>
            <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>! Welcome to our site.</h1>
        <a href="login.php" class="btn btn-danger">Log out</a>
        <a href="profile.php" class="btn btn-danger">Profile</a>
    </div>

        <img src="https://www.jackrabbit.com/info/uploads/featured-images/HokaFly-Header2-Desktop.png" style="width: 100%;">

        <img src="list.jpg" style="margin-top: 20px;">

            <div class="content">
                  <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
            </div>
      </div>

</body>
</html>

<?php
    include_once 'footer.php';
?>