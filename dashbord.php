<?php
  
    require('header-script.php');
    if(isset($_SESSION['email'])){
      require('sideber.php');
      require('header.php');
      require('content.php');
      require('footer.php');
  
  }
  else{
    header('location:login_page.php?msg=age login koro');
  }
 



?>

        
         

       
        
         
