
<?php require_once '/includes/connection.php'; ?>
<?php require_once '/functions/functions.php'; ?>

<?php find_selected_page();  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Edulink Network</title>
        
        <script src="/edulink/libraries/jquery-1.9.0.min.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="/edulink/css/styleindex.css"/> 
         <link type="text/css" rel="stylesheet" href="/edulink/css/stylestaff.css"/> 
        
        <!-- Dropdown menu links START-->
<link href="css/horizontal-centering.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/vimeo.com/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
        <!-- Dropdown menu links END -->
        
    </head>
        
    <body>
           <div id="headingbar"> 
     <div class="wrapper1" id="wrapperid">  
    <div id="logo">
         <img id="logopic" src="/edulink/images/logo1.png">  
     </div>
         <div id="text">  EDULINK NETWORK 2013 </div>
                      

        </div>
           </div>
        
        
        <?php public_navigation($sel_subject,$sel_page);  ?>

   



        <?php
        // put your code here
        ?>
        
        