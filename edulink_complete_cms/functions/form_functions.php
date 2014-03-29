<?php

function check_required_fields($required_array){
    if(isset($_POST['submit'])){
    $field_errors=array();
    //Form Validation
//    $required_fields=array('menu_name','position','visible');
    foreach($required_array as $fieldname){
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && $_POST[$fieldname]!=0)){
            $field_errors[]=$fieldname;
        }
    }
    return $field_errors;
}
}

function check_max_field_lengths($field_length_array){
    $field_errors=array();
    foreach($field_length_array as $fieldname => $maxlength){
        if(strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength)
        { $field_errors[]=$fieldname;  }
    }
    return $field_errors;
}

function display_errors($error_array){
        echo "<p id=\"errors\">";
        echo "Please review the following fields:<br\>";
        foreach($error_array as $error){
            echo " * ". $error ."<br/>";
        }
        echo "</p>";
}


?>
