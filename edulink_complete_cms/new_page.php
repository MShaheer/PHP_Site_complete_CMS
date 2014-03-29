<?php require_once '/includes/connection.php'; ?>
<?php require_once '/functions/functions.php'; ?>
<?php include '/includes/header.php'; ?>



<?php
	// make sure the subject id sent is an integer
	if (intval($_GET['subj']) == 0) {
		redirect_to('content.php');
	}

	include_once("/functions/form_functions.php");

	// START FORM PROCESSING
	// only execute the form processing if the form has been submitted
	if (isset($_POST['submit'])) {
		// initialize an array to hold our errors
		$errors = array();
	
		// perform validations on the form data
		$required_fields = array('menu_name', 'position', 'visible', 'content');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));
		
		$fields_with_lengths = array('menu_name' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
		
		// clean up the form data before putting it in the database
		$subject_id = mysql_prep($_GET['subj']);
		$menu_name = trim(mysql_prep($_POST['menu_name']));
		$position = mysql_prep($_POST['position']);
		$visible = mysql_prep($_POST['visible']);
		$content = mysql_prep($_POST['content']);
	
		// Database submission only proceeds if there were NO errors.
		if (empty($errors)) {
			$query = "INSERT INTO pages (
						menu_name, position, visible, content, subject_id
					) VALUES (
						'{$menu_name}', {$position}, {$visible}, '{$content}', {$subject_id}
					)";
			if ($result = mysql_query($query, $connection)) {
				// as is, $message will still be discarded on the redirect
				$message = "The page was successfully created.";
				// get the last id inserted over the current db connection
				$new_page_id = mysql_insert_id();
				redirect_to("content.php?page={$new_page_id}");
			} else {
				$message = "The page could not be created.";
				$message .= "<br />" . mysql_error();
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		// END FORM PROCESSING
	}
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
                        <form id="addform" action="new_page.php?subj=<?php echo urlencode($sel_subject['id']); ?>" method="post">
                            <fieldset id="fieldsetpanel">
                                <legend><b>Edit Subject : </b><?php echo $sel_subject['menu_name']; ?></legend>
                                <?php $new_page = true; ?>
				<?php include "page_form.php" ?>
                                <input type="submit" name="submit" value="Create Page" />
                        </fieldset>
                        </form>
                        <a href="content.php">Cancel</a>
                        
                        
                </div>
        </div>
            
            
        </div>
                  
        <br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/>
        
        <?php require '/includes/footer.php'; ?>
        
                            
