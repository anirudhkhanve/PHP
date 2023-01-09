// program to count number of visit in na page using php

<?php 
  
  session_start();
     
  if(isset($_SESSION['views']))
      $_SESSION['views'] = $_SESSION['views']+1;
  else
      $_SESSION['views']=1;
        
  echo"views = ".$_SESSION['views'];
    
?>
