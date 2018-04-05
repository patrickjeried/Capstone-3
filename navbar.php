<?php
	include_once 'htmlheader.php';
?>
<style>
	
	html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}
 
body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}
 
header {
      width: 100%;
      height: 100vh;
      background: url(hero.jpg) no-repeat 50% 50%;
      background-size: cover;
}
 
.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}
 
.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}
 
nav {
      position: fixed;
      width: 100%;
      line-height: 60px;

}
 
nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;

}
 
nav.black ul {
      background: #000;
}
 
nav ul li {
      display: inline-block;
      padding: 16px 40px;

}
 
nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}
 
.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;

}
 
@media(max-width: 786px) {
 
      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }
 
      nav ul {
            max-height: 0px;
            background: #000;
      }
 
      nav.black ul {
            background: #000;
      }
 
      .showing {
            max-height: 34em;
      }
 
      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }
 
      .menu-icon {
            display: block;

      }


</style>

<body>
      <div class="wrapper">
            <header>
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo" style="font-size: 40px;">
                              <h1 style="font-family: 'Lobster', cursive;">Run&nbsp;ph</h1>
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="welcome.php">Home</a></li>
                                    <li><a href="aboutus.php">About us</li>
                                    <li><a href="cart.php">Products</a></li>
                                    <li><a href="mycart.php"><!-- <i class="glyphicon glyphicon-shopping-cart" -->  My&nbsp;Cart</i></a></li>


      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>

</body>
</html>