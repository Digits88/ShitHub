<?php

//Load site loader
require_once('model/site_loader.php');

require_once('model/parseTemplate.php');
if($_SESSION['loggedIn'] == 0){
    TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=login">Login</a>');
}

TemplateParser::push_variable('loginfailed', '');

$sl = new site_loader(array("index", "login", "upload", "review-file","profile"), array("Dashboard", "Login", "Upload", "Review", "Profil"));
$sl->load_sites();
