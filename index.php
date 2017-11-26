<?php
        //error_reporting(E_ALL);
        //ini_set("display_errors", 1);

//Load site loader
require_once('model/site_loader.php');

require_once('model/parseTemplate.php');
if($_SESSION['loggedIn'] == 0){
    TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=login">Login</a>');
}

$sl = new site_loader(array("index", "register", "login", "upload", "review-file","profile","review"), array("Dashboard", "Register", "Login", "Upload", "Review", "Profil", "Review"));
$sl->load_sites();