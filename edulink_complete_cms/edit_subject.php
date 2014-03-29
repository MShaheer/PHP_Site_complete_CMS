<?php require_once '/includes/connection.php'; ?>
<?php require_once '/functions/functions.php'; ?>
<?php include '/includes/header.php'; ?>
<?php 
    if(intval($_GET['subj'])==0){
        redirect_to("content.php");
    }
    
    include_once '/functions/form_functions.php';
    //START FORM PROCESSING
    //Only execute the form processing if the form has been submitted
    if(isset($_POST['submit'])){
        //Initialize array to hold our errors
        $errors=array();
    //Form Validation
    $required_fields=array('menu_name','position','visible');
    $errors=array_merge($errors,check_required_fields($required_fields));
    
    $fields_with_lengths=array('menu_name'=>30);
    $errors=array_merge($errors,check_max_field_lengths($fields_with_lengths));
    
        //Clean up form data before putting in tha database
        $id=mysql_prep($_GET['subj']);
        $menu_name=trim(mysql_prep($_POST['menu_name']));
        $position=mysql_prep($_POST['position']);
        $visible=mysql_prep($_POST['visible']);
        
        //Data submission proceeds if there were no errors
        if(empty($errors)){
        //Perform Update
        $query="UPDATE subjects SET menu_name ='{$menu_name}',position ={$position},visible ={$visible} WHERE id ={$id}";
        $result = mysql_query($query, $connection);
        if(mysql_affected_rows()==1){//Success
            $message= "Subject updated successfully";
        }
        else{
            //Failed
            $message= "Oops, there were some problems updating.";
            $message.= "<br/>".mysql_error();
        }       
    }
    else{
        //Errors
        $message= "Oops, there were <b>".count($errors)."</b> error(s) in the form.";
    }
} //END if(isset($_POST['submit']))

?>
<?php find_selected_page(); ?>
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
                        </br> </br>
                        <h1>Content Area</h1>
                        <br/> <br/>
                        <?php if(!empty($message)){echo "<p id=\"message\">".$message."</p>";}  ?>
                        
                        <?php 
                        //Display fields that had errors.
                        if(!empty($errors)){
                            display_errors($errors);
                        }
                        ?>
                                                
                        <br/>
                        <form id="addform" action="edit_subject.php?subj=<?php echo urlencode($sel_subject['id']); ?>" method="post">
                            <fieldset id="fieldsetpanel">
                                <legend><b>Edit Subject : </b><?php echo $sel_subject['menu_name']; ?></legend>
                            
                            <p>
                                Subject name:<input type="text" required="required" name="menu_name" value="<?php echo $sel_subject['menu_name'] ?>" id="menu_name" />
                            </p>
                            <p>
                                Position:
                                <select name="position">
                                    <?php
                                    $subject_set=  get_all_subjects();
                                    $subject_count=mysql_num_rows($subject_set);
                                    for($count=1;$count<=$subject_count+1;$count++){
                                        echo "<option value=\"{$count}\"";
                                        if($sel_subject['position']==$count){
                                            echo ' selected';
                                        }
                                       echo ">{$count}</option>";
                                    }
                                    ?>
                                        
                                </select>
                                    
                            </p>
                            <p>Visible:
                                <input type="radio" name="visible" value="0" <?php if($sel_subject['visible']==0){echo " checked";} ?> />No
                                &nbsp;
                                <input type="radio" name="visible" value="1" <?php if($sel_subject['visible']==1){echo " checked";} ?> />Yes
                            </p>
                            <input type="submit" name="submit" value="Edit Subject" />
                            &nbsp;&nbsp;
                             <a href="delete_subject.php?subj=<?php echo urlencode($sel_subject['id']);?>" onclick="return confirm('Are you sure?');">Delete subject</a>
                        </fieldset>
                        </form>
                        <a href="content.php">Cancel</a>
                 <br/><br/><br/><hr class="separatorhr">        
            <div>
            <h3>Pages in this subject:</h3>
            <ul>
            <?php 
            $subject_pages = get_pages_for_subject($sel_subject['id']);
            while($page = mysql_fetch_array($subject_pages)) {
            echo "<li><a href=\"content.php?page={$page['id']}\">
            {$page['menu_name']}</a></li>";
            }
            ?>
            </ul>
            <br />
            <div id="panelbar">
                    <a href="new_page.php?subj=<?php echo $sel_subject['id']; ?>">+ Add a new page to this subject</a>
            </div>
            
            </div>

                </div>
        </div>
            
            
        </div>
                  
        <br/> <br/> <br/>
        
        <?php require '/includes/footer.php'; ?>
        