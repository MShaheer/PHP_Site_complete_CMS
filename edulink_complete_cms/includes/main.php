<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
</br> </br> </br> </br> 
<div class="wrapper1" id="wrapperid">  
<hr class="separatorhr"> 
<br/> 
<div class="content" >
<div id="page">
<?php 
                if(isset($sel_subject)){
                    echo "<h1>".$sel_subject['menu_name']."</h1>";
//                    echo "<div class=\"contentpara\">".$sel_subject['content']."</div>";
                } 
                if(isset($sel_page)){
                    echo "<h1>".htmlentities($sel_page['menu_name'])."</h1>";
                    echo "<div class=\"contentpara\">".strip_tags(nl2br($sel_page['content']),"<b><br><p><a><span><blockquote>")."</div>";
                }
                else{
                    echo "<h2>Please select a subject or page to display</h2>";
                }    
                    ?>
</div>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<hr class="separatorhr"> 
</div> 
</div>