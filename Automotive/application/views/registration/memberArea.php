<!doctype>
<html>
    
    <head></head>
    
    <body>
        
     <h1>MemberArea</h1>
     
     
 <?php 
 echo "<pre>";
 
 print_r($this->session->all_userdata());
 
 echo "</pre>";
 ?>
     <a href='<?php echo base_url()."home/logout";?>'>Logout</a> 
    </body>
    </html>

