<?php require_once("includes/session.php"); ?>  
<?php require_once '/includes/connection.php'; ?>
<?php require_once '/functions/functions.php'; ?>
<?php confirm_logged_in(); ?> 
<?php include '/includes/header.php'; ?>

<?php find_selected_page();  ?>
        
<br/> <br/> <br/>  
        
        <div class="wrapper1" id="wrapperid">  
        <div id="staffheader">
            <h1 id="instruct">Click on the menu-item below to start editing.</h1>
        </div>
        
        <div id="main">
            <div id="navigation">
                <?php navigation($sel_subject,$sel_page);  ?>
            </div>
            
            <br/><br/><br/>
                        
            <div id="page">
                <div id="panelbar">
                    <a href="new_subject.php">+ Add another subject</a>
                </div>
                    <br/><br/><br/><br/> 

            <h1>Content Area</h1>
                <?php 
                if(isset($sel_subject)){
                    echo "<h2>".$sel_subject['menu_name']."</h2>";
//                    echo "<div class=\"contentpara\">".$sel_subject['content']."</div>";
                } 
                elseif(isset($sel_page)){
                    echo "<h3>".$sel_page['menu_name']."</h3>";
                    echo "<div class=\"contentpara\">".$sel_page['content']."</div>";
                }
                else{
                    echo "<h2>Please select a subject or page to edit</h2>";
                }    
                    ?>
                                              
            </div>
         </div>
        </div>
        <br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/>
        
        <?php require '/includes/footer.php'; ?>
        
            
   

