<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>iMobile Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <center>
                    <h1>Välj din mobil</h1>
                    </center>
                </div>
            </div>
            
                            <center>
                                <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="mobileservice.php">
                                <img src="img/mobil.jpg" alt="mobil" height="100px" width="70%">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">iPhone</p>
                                        
                                </div>
                           </center>
                       </div>
                   </div>

           <div class="container">
            <div>
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/samsung-galaxy-a22.jpg" height="100px" width="70%" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Samsung</p>
                                        
                               
                           </center>
                       
                   </div> 
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/hu.jpg" height="100px" width="57%" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Huwaei</p>
                                    
                                </div>
                           </center>
                       </div>
                   </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy iMobile Service. All Rights Reserved. | Contact Us: +46 720-010242</p>
                   <p>This website is developed by Web Dev</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
