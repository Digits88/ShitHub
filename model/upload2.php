<?php
require "snippet.php";
$test = new upload2;
$test->_upload2();
class upload2{
    
    function _upload2(){
        $uploadOk = 1;
        // Check if image file is a actual image or fake image
        $tmpname = $_FILES["the_file"]["tmp_name"];
        $content = file_get_contents($tmpname);
        $the_title = $_POST['the_title'];
        $the_description = $_POST['the_description'];
        $the_tags = $_POST['the_tags'];
        $the_language = $_POST['the_language'];
        
        $dbfile = '../shithub_database.db';
        
        $sqlite = new SQLite3($dbfile);
        save_new_snippet($sqlite, $the_title, $content, $the_description, $the_language, $the_tags);
        
        header('Location: ../index.php');
    }
}
?>

