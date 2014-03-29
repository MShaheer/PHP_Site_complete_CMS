<?php require_once("includes/session.php"); ?>         
<?php require_once '/functions/functions.php'; ?>
<?php confirm_logged_in(); ?> 
<?php include '/includes/header.php'; ?>
    
        </br> </br> </br> </br> </br> 
        
        <div class="wrapper1" id="wrapperid">  
        <div id="staffheader">
            <h1>Edulink Network</h1>
        </div>
        
        <div id="main">
            
            
            <div id="page">
                
                <h2>Staff Menu</h2>
                <p>Welcome to the staff area <?php echo $_SESSION['username']; ?> </p>
                
                <ul>
                    <li><a href="content.php">Manage Website Content</a></li>
                    <li><a href="new_user.php">Add New Staff User</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                
            </div>
            
            
        </div>
        </div>
        </br> </br> </br></br> </br> </br></br> </br> </br>
        
        <?php include '/includes/footer.php'; ?>
        
   

<?php
?>
