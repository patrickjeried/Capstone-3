
<head>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">


</head>


<?php

function getTitle() {
  echo 'Change Password';
}


?>

</head>
<body>

  <!-- main header -->
  <?php include 'htmlheader.php'; ?>

  <!-- wrapper -->
  <main class="wrapper">

<!-- start of actual content -->
<?php
session_start();
$_SESSION['message'] = '';
require 'db.php';

$username = $_SESSION['username'];
 echo $username;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    
    
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        
        
        $password = preg_replace('#[^A-Za-z0-9@.]#i', '',$_POST['password']);



                
                $sql = "UPDATE users
                        SET password='$password'
                        WHERE username='$username'";
                    echo $sql;
                
                
                if ($link->query($sql) === true){
                    $_SESSION['message'] = "Password has changed succesfully!";
                }
                else {
                    $_SESSION['message'] = 'UNsuccesful to change the password!';
                }
                $link->close();          
        }
            
    
      else {
          $_SESSION['message'] = 'Two passwords do not match!';
      }
  }
?>


<div class="body-content">
  <div class="module">
    <h1>CHANGE PASSWORD</h1>
    <form class="form" action="profile.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>

      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="UPDATE" name="pwupdate" class="btn btn-block btn-primary" />
      
    </form>
  </div>
</div>
</main>


<?php 

include 'footer.php';

 ?>
</body>