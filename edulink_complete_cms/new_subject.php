<?php require_once '/includes/connection.php'; ?>
<?php require_once '/functions/functions.php'; ?>
<?php include '/includes/header.php'; ?>



<?php 

find_selected_page();

?>
        <br/>  <br/> <br/> 
        
        <div class="wrapper1" id="wrapperid">  
        <div id="staffheader">
            <h1>Edulink Network</h1>
        </div>
        <div id="main">
                <div id="navigation">  
                        <?php navigation($sel_subject,$sel_page);  ?>
                </div>

                <div id="page">
                        <br/> <br/>
                        <h1>Content Area</h1>
                        <br/> <br/>
                        
                        <br/>
                        <form id="addform" action="create_subject.php" method="post">
                            <fieldset id="fieldsetpanel">
                                <legend><b>Add Subject</b></legend>
                            
                            <p>
                                Subject name:<input type="text" required="required" name="menu_name" value="" id="menu_name" />
                            </p>
                            <p>
                                Position:
                                <select name="position">
                                    <?php
                                    $subject_set=  get_all_subjects();
                                    $subject_count=mysql_num_rows($subject_set);
                                    for($count=1;$count<=$subject_count+1;$count++){
                                        echo "<option value=\"{$count}\">{$count}</option>";
                                    }
                                    ?>
                                        
                                </select>
                                    
                            </p>
                            <p>Visible:
                                <input type="radio" name="visible" value="0" />No
                                &nbsp;
                                <input type="radio" name="visible" value="1" />Yes
                            </p>
                            <input type="submit" value="Add Subject" />
                        </fieldset>
                        </form>
                        <a href="content.php">Cancel</a>
                        
                        
                </div>
        </div>
            
            
        </div>
                  
        <br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/>
        
        <?php require '/includes/footer.php'; ?>
        