<?php

function mysql_prep($value){
    $magic_quotes_active=  get_magic_quotes_gpc();
    $new_enough_php=function_exists("mysql_real_escape_string"); //PHP > v4.3.0
    if($new_enough_php){ //PHP v4.3.0 or higher
        //Undo any magic quotes effects so mysql_real_escape_string can get to work
        if($magic_quotes_active){$value=stripslashes($value);}
        $value=mysql_real_escape_string($value);}
        else{ //Before PHP v4.3.0
            //if magic slashes is not already on than add slashes
            if(!$magic_quotes_active){$value=addslashes($value);}
        }
    return $value;
}

function redirect_to($location=NULL){
    if($location!=NULL){
        header("Location:{$location}");
        exit;
    }
}

function confirm_query($result_set){
    if(!$result_set){
                    die("Database query failed" . mysql_error()); 
                }
             }

function get_all_subjects($public =true){
    
                        global $connection;
                        $query="SELECT * 
                        FROM subjects ";
                        if($public){$query .="WHERE visible=1 ";}
                        $query .="ORDER BY position ASC";
                    $subject_set=mysql_query($query, $connection);
                    confirm_query($subject_set);
                    return $subject_set;
}             

function get_pages_for_subject($subject_id,$public=true){
                        global $connection;
                        $query="SELECT * FROM pages WHERE subject_id={$subject_id} ";
            if($public){$query .= "AND visible=1 ";}
                        $query.="ORDER BY position ASC";
                $page_set=mysql_query($query, $connection);
                confirm_query($page_set);
                return $page_set;
}

function get_subject_by_id($subject_id){
    global $connection;
    $query = "SELECT * " ;
    $query .= "FROM subjects " ;
    $query .= "WHERE id=".$subject_id." ";
    $query .= "LIMIT 1" ;
    $result_set =mysql_query($query,$connection);
    confirm_query($result_set);
    //REMEMBER
    //mysql_fetcharray returns false if no rows are returned
    if(($subject=mysql_fetch_array($result_set))){
        return $subject;
    } else{
        return NULL;
    }
}

function get_page_by_id($page_id){
    global $connection;
    $query = "SELECT * " ;
    $query .= "FROM pages " ;
    $query .= "WHERE id=".$page_id." ";
    $query .= "LIMIT 1" ;
    $result_set =mysql_query($query,$connection);
    confirm_query($result_set);
    //REMEMBER
    //mysql_fetcharray returns false if no rows are returned
    if(($page=mysql_fetch_array($result_set))){
        return $page;
    } else{
        return NULL;
    }
}

function get_default_page($subject_id){
    //Get all visible pages
    $page_set=get_pages_for_subject($subject_id,true);
    if($first_page=mysql_fetch_array($page_set)){
        return $first_page;
    }else{return NULL;}
}

function find_selected_page(){
    
    global $sel_subject;
    global $sel_page;
    if(isset($_GET["subj"])){
    $sel_subject=get_subject_by_id($_GET["subj"]);
    $sel_page=get_default_page($sel_subject['id']);
}
elseif(isset($_GET["page"])){
    $sel_subject=NULL;
    $sel_page=  get_page_by_id($_GET["page"]);
} 
else{
    $sel_subject=NULL;
    $sel_page=NULL;
}

}

function navigation($sel_subject,$sel_page,$public =false){
        echo '<div class="horizontal-centering"><div><div><div id="menuu">';
        echo '<ul id="nav" class="dropdown dropdown-horizontal">';
        echo '<li class="first"><a href="./">Home</a></li>';

        $level=1;
        //PERFORM DATABASE QUERY
        $subject_set=get_all_subjects($public);
        //USE RETURNED DATA
        while($subject=mysql_fetch_array($subject_set)){
        echo "<li id='strip' class='dir ";
        if($subject['id']==$sel_subject['id']){echo "selected";}
        echo   "'><a href=\"edit_subject.php?subj=".urlencode($subject['id']).
            "\">{$subject["menu_name"]}</a>";

        //PERFORM DATABASE QUERY
        $page_set=get_pages_for_subject($subject['id'],$public);

        $length=  mysql_num_rows($page_set);
        //                echo $length;
        echo "<ul>";
        //USE RETURNED DATA
        $iter=1;
        while($page=mysql_fetch_array($page_set)){
        if($level==1){
        echo "<li class='first ";
        if($page['id']==$sel_page['id']){echo "selected";}
        echo "'><a href=\"edit_page.php?page=".urlencode($page['id']).
        "\">{$page["menu_name"]}</a></li>";
        $level=0;
        }
        else{
        if($iter==$length){
        echo "<li class='last ";
        if($page['id']==$sel_page['id']){echo "selected";}
        echo "'><a href=\"edit_page.php?page=".urlencode($page['id']).
        "\">{$page["menu_name"]}</a></li>";}

        else{
        echo "<li ";
        if($page['id']==$sel_page['id']){echo "class='selected'";}
        echo "><a href=\"edit_page.php?page=".urlencode($page['id']).
        "\">{$page["menu_name"]}</a></li>";}

        }
        $iter++;
        }

        echo "</ul>";
        echo "</li>";
        }

        echo '<li class="dir last">';
        echo '<form method="post" action="">';
        echo '<fieldset>
            <label for="search">Search:</label>';
        echo'<input type="text" id="search" class="text" value="Search!" 
            onfocus="if (this.value == "Search!") this.value = \'\';" 
            onblur="if (this.value == \'\') this.value = \'Search!\';" 
            maxlength="255" />';
        echo '<input type="image" src="images/vimeo.com/btn_search.png" class="button" />
        </fieldset>
        </form>
        <ul>
        <li class="first"><a href="./">Search result #1</a></li>
        <li><a href="./">Search result #2</a></li>
        <li><a href="./">Search result #3</a></li>
        <li><a href="./">Search result #4</a></li>
        <li class="last"><a href="./">Search result #5</a></li>
        </ul>
        </li>
        </ul>';              
        echo '</div></div></div></div>';

        echo '</br></br>';
}

function public_navigation($sel_subject,$sel_page,$public=true){
        echo '<div class="horizontal-centering"><div><div><div id="menuu">';
        echo '<ul id="nav" class="dropdown dropdown-horizontal">';
        echo '<li class="first"><a href="./">Home</a></li>';
        echo '<li id="strip" class="dir"><a href="staff.php">Staff Section</a></li>';
        $level=1;
        //PERFORM DATABASE QUERY
        $subject_set=get_all_subjects($public);
        //USE RETURNED DATA
        while($subject=mysql_fetch_array($subject_set)){
        echo "<li id='strip' class='dir ";
        if($subject['id']==$sel_subject['id']){echo "selected";}
        echo   "'><a href=\"index.php?subj=".urlencode($subject['id']).
            "\">{$subject["menu_name"]}</a>";

        //PERFORM DATABASE QUERY
        $page_set=get_pages_for_subject($subject['id'],$public);

        $length=  mysql_num_rows($page_set);
        //                echo $length;
        echo "<ul>";
        //USE RETURNED DATA
        $iter=1;
        while($page=mysql_fetch_array($page_set)){
        if($level==1){
        echo "<li class='first ";
        if($page['id']==$sel_page['id']){echo "selected";}
        echo "'><a href=\"index.php?page=".urlencode($page['id']).
        "\">{$page["menu_name"]}</a></li>";
        $level=0;
        }
        else{
        if($iter==$length){
        echo "<li class='last ";
        if($page['id']==$sel_page['id']){echo "selected";}
        echo "'><a href=\"index.php?page=".urlencode($page['id']).
        "\">{$page["menu_name"]}</a></li>";}

        else{
        echo "<li ";
        if($page['id']==$sel_page['id']){echo "class='selected'";}
        echo "><a href=\"index.php?page=".urlencode($page['id']).
        "\">{$page["menu_name"]}</a></li>";}

        }
        $iter++;
        }

        echo "</ul>";
        echo "</li>";
        }

        echo '<li class="dir last">';
        echo '<form method="post" action="">';
        echo '<fieldset>
            <label for="search">Search:</label>';
        echo'<input type="text" id="search" class="text" value="Search!" 
            onfocus="if (this.value == "Search!") this.value = \'\';" 
            onblur="if (this.value == \'\') this.value = \'Search!\';" 
            maxlength="255" />';
        echo '<input type="image" src="images/vimeo.com/btn_search.png" class="button" />
        </fieldset>
        </form>
        <ul>
        <li class="first"><a href="./">Search result #1</a></li>
        <li><a href="./">Search result #2</a></li>
        <li><a href="./">Search result #3</a></li>
        <li><a href="./">Search result #4</a></li>
        <li class="last"><a href="./">Search result #5</a></li>
        </ul>
        </li>
        </ul>';              
        echo '</div></div></div></div>';

        echo '</br></br>';
}

?>
